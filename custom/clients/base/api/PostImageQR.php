<?php
/**
 * Created by PhpStorm.
 * User: salvadorlopez
 * Date: 01/06/2020
 */

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class PostImageQR extends SugarApi
{

    /**
     * Registro de todas las rutas para consumir los servicios del API
     *
     */
    public function registerApiRest()
    {
        return array(
            //GET
            'retrieve' => array(
                //request type
                'reqType' => 'POST',
                'noLoginRequired' => true,
                //endpoint path
                'path' => array('GenerarImagenQR'),
                //endpoint variables
                'pathVars' => array('method'),
                //method to call
                'method' => 'generarImagenQR',
                //short help string to be displayed in the help documentation
                'shortHelp' => 'Genera imagen QR dentro de directorio upload desde una url',
                //long help to be displayed in the help documentation
                'longHelp' => '',
            ),


        );

    }

    public function generarImagenQR($api, $args){
        global $sugar_config;

        $url_image=$args['file'];
        $GLOBALS['log']->fatal("SE OBTUVO EL SIGUIENTE CONTENIDO PARA GENERAR QR ".$url_image);
        $id_imagen=create_guid();

        $imagen_web = file_get_contents("http://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=".$url_image);

        $archivo="upload/".$id_imagen;
        file_put_contents($archivo, $imagen_web);
        $GLOBALS['log']->fatal("SE GENERO ARCHIVO ".$archivo);


        return $id_imagen;

    }


}

?>
