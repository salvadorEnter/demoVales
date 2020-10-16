<?php
class Account_Hooks
{
    public function account_set_img_qr($bean = null, $event = null, $args = null)
    {
        if($bean->temp_id_img_qr_c!="" && !$args['isUpdate']){

            $updateImgQR = "UPDATE accounts_cstm SET imagen_qr_c='{$bean->temp_id_img_qr_c}' WHERE id_c='{$bean->id}'";
            $GLOBALS['log']->fatal("QUERY ACTUALIZACION ".$updateImgQR);
            $GLOBALS['db']->query($updateImgQR);
        }
        
    }

    public function setSignature($bean = null, $event = null, $args = null)
    {
        //require_once('include/Sugarpdf/Sugarpdf.php');
        require_once('vendor/tcpdf/tcpdf.php');
        require_once('vendor/tcpdf/config/tcpdf_config.php');

        $imagenBase64=$bean->signature;

        // create new PDF document
        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);


        // set document information
        $pdf->SetCreator('Salvador Lopez');
        $pdf->SetAuthor('Salvador Lopez');
        $pdf->SetTitle('Reporte');
        $pdf->SetSubject('Reporte generado desde Sugar App Mobile');
        $pdf->SetKeywords('Reporte,SDK Mobile');

        //$pdf->setHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);
        $pdf->setHeaderData('logo_tactos.jpeg',PDF_HEADER_LOGO_WIDTH, "Documento de ejemplo", 'Creado por Salvador Lopez');
        // set header and footer fonts
        $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
        $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

        // set default monospaced font
        $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

        // set margins
        $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);

        // set auto page breaks
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

        // set image scale factor
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

        // set some language-dependent strings (optional)
        if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
            require_once(dirname(__FILE__).'/lang/eng.php');
            $pdf->setLanguageArray($l);
        }

        // set font
        $pdf->SetFont('times', 'BI', 20);

        // add a page
        $pdf->AddPage();


        $fileName =  'firma.png';
        $base64Image = trim($imagenBase64);
        $base64Image = str_replace('data:image/png;base64,', '', $base64Image);
        $base64Image = str_replace('data:image/jpg;base64,', '', $base64Image);
        $base64Image = str_replace('data:image/jpeg;base64,', '', $base64Image);
        $base64Image = str_replace('data:image/gif;base64,', '', $base64Image);
        $base64Image = str_replace(' ', '+', $base64Image);

        $imageData = base64_decode($base64Image);
        //Set image whole path here
        $filePath = "custom/" . $fileName;

        file_put_contents($filePath, $imageData);

        $htmlString='<h1>Documento de ejemplo</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
<p style="text-align:center"><img src="custom/'.$fileName.'" alt="test alt attribute" width="300" height="300" border="0"/></p>';

        $pdf->writeHTML($htmlString, true, false, false, false, '');

        $nombreCuenta=$bean->name;

        $idDocRevision=\Sugarcrm\Sugarcrm\Util\Uuid::uuid1();
        //$idDoc=\Sugarcrm\Sugarcrm\Util\Uuid::uuid1();

        ob_end_clean();
        $pdf->Output('upload/'.$idDocRevision, 'F');

        $content=file_get_contents('upload/'.$idDocRevision);

        //Creación de Documento
        $document = BeanFactory::newBean('Documents');
        //$document->new_with_id=true;
        //$document->id=$idDoc;
        $document->name =  "Reporte_".$nombreCuenta.".pdf";
        $document->filename= "Reporte_".$nombreCuenta.".pdf";
        $document->document_revision_id=$idDocRevision;
        $fecha_actual=date("Y")."-" . date("m") . "-" . date("d");
        $fecha_exp=date("d/m/Y",strtotime($fecha_actual."+ 7 days"));
        $document->exp_date = $fecha_exp;
        $document->save();

        $documentSoap=new DocumentSoap();
        $documentObj = array(
            'id' => $document->id,
            'file' => base64_encode($content),
            'filename' => "Reporte_".$nombreCuenta.".pdf",
            'revision' => '1',
        );

        $documentSoap->saveFile($documentObj);

        $document->load_relationship('accounts');
        $document->accounts->add($bean->id);

        /*
        $docRevision = new DocumentRevision();
        $docRevision->new_with_id=true;
        $docRevision->id=$idDocRevision;
        $docRevision->revision = 1;
        $docRevision->document_id = $document->id;
        $docRevision->filename = "Reporte_".$nombreCuenta.".pdf";
        $docRevision->file_ext = 'pdf';
        $docRevision->save();
        */


    }
}
