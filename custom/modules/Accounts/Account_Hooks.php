<?php
class Account_Hooks
{
    public function account_set_img_qr($bean = null, $event = null, $args = null)
    {
        if($bean->temp_id_img_qr_c!=""){

            $updateImgQR = "UPDATE accounts_cstm SET imagen_qr_c='{$bean->temp_id_img_qr_c}' WHERE id_c='{$bean->id}'";
            $GLOBALS['log']->fatal("QUERY ACTUALIZACION ".$updateImgQR);
            //$GLOBALS['db']->query($updateImgQR);
        }
        
    }
}
