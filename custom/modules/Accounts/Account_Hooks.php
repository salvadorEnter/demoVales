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

        //$tabla_html=$args['data'];

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

        // remove default header/footer
        //$pdf->setPrintHeader(false);
        //$pdf->setPrintFooter(false);

        //$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, "Documento de ejemplo".' ', 'Creado por Salvador Lopez');

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

        // ---------------------------------------------------------

        // set font
        $pdf->SetFont('times', 'BI', 20);

        // add a page
        $pdf->AddPage();

        $imagenBase64='data:image/jpeg;base64,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';

        $fileName =  'tactos.jpeg';
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

        //$pdf->Write(0, $txt, '', 0, 'C', true, 0, false, false, 0);
        $pdf->writeHTML($htmlString, true, false, false, false, '');

        //Creación de Documento
        $document = BeanFactory::newBean('Documents');
        $document->name = "Reporte.pdf";
        $fecha_actual=date("Y")."-" . date("m") . "-" . date("d");
        $fecha_exp=date("d/m/Y",strtotime($fecha_actual."+ 7 days"));
        $document->exp_date = $fecha_exp;
        $document->save();

        $document->load_relationship('accounts');
        $document->accounts->add($bean->id);

        $docRevision = new DocumentRevision();
        $docRevision->revision = 1;
        $docRevision->document_id = $document->id;
        $docRevision->filename = $document->name;
        $docRevision->file_ext = 'pdf';
        $docRevision->save();
        ob_end_clean();
        $pdf->Output('upload/'.$docRevision->id, 'F');


    }
}
