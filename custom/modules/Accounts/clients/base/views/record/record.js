({
    extendsFrom: 'RecordView',

    initialize: function (options) {
        this._super("initialize", [options]);

        self = this;

        this.context.on('button:btn_qr:click', this.btn_qr, this);
    },

    btn_qr: function() {
        
        var nombre=this.model.get('name');
        var descripcion=this.model.get('description');
        var usuario=this.model.get('assigned_user_name');
        var fecha_creacion=this.model.get('date_entered');
        var flag_crear_qr=true;

        if(nombre =="" || nombre ==undefined){
            app.alert.show("valida nombre", {
                level: "error",
                title: "Favor de ingresar nombre",
                autoClose: false
            });

            flag_crear_qr=false;
        }

        if(descripcion =="" || descripcion ==undefined){
            app.alert.show("valida desc", {
                level: "error",
                title: "Favor de ingresar descripcion",
                autoClose: false
            });

            flag_crear_qr=false;
        }

        if(flag_crear_qr){
            //Mostrar la imagen
            var campo=this.getField('imagen_qr_c');
            campo.setMode('edit');
            //%0A representa el salto de linea
            var str_to_qr=nombre+"%0A"+descripcion+"%0A"+usuario+"%0A"+fecha_creacion;
            var url_QR="http://chart.googleapis.com/chart?chs=300x300&cht=qr&chl="+str_to_qr.replace(/ /g, '%20');

            var body={
                "file":str_to_qr.replace(/ /g, '%20')
            }

            app.alert.show('setImageQR', {
                level: 'process',
                closeable: false,
                messages: app.lang.get('LBL_LOADING'),
            });

            app.api.call('create', app.api.buildURL("GenerarImagenQR"), body, {
                success: _.bind(function (data) {
                    app.alert.dismiss('setImageQR');
                    if(data!=""){
                        self.idDocumento=data;
                        $input = self.$('input[type=file]');
                        self.model.set('temp_id_img_qr_c',data);

                        
                        self.model.save(null, {
                            fields: ['temp_id_img_qr_c'],
                            success(model) {
                                location.reload();

                            },error(err) {
                                console.log("ERROR AL GUARDAR LA IMAGEN QR "+err);
                            },
                        });
                        
                        /*
                        self.model.uploadFile(
                            'imagen_qr_c',
                            $input,
                            {
                                field: "imagen_qr_c",
                                success: function(rsp) {
                                    var fileId = self.idDocumento;
                                    // Add the guid to the list of fields to set on the model.
                                    if (fileId) {
                                        self.model.unset("imagen_qr_c");
                                        self.model.set("imagen_qr_c", fileId);
                                    }
                                }

                            },
                            {}
                            );
                        */

                        
                    }//fin if data

                }, self),
                error: _.bind(function (response) {
                    app.alert.dismiss('setImageQR');
                    app.alert.show('error_image_qr', {
                        level: 'error',
                        messages: response.textStatus+'\nSe superó el tiempo de espera, favor de intentar nuevamente',
                        autoClose: true
                    });

                },self)
            });

        }
    },


        
})