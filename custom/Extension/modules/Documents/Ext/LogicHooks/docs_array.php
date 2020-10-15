<?php
/**
 * Created by salvador.lopez@enterconecta.com.
 * User: root
 * Date: 14/10/20
 * Time: 09:09 AM
 */
$hook_array['after_save'][] = Array(
    1,
    'Subir archivo a Google_drive con Id especificado',//Just a quick comment about the logic of it
    'custom/modules/Documents/Docs_hooks.php', //path to the logic hook
    'upload_documents', // name of the class
    'file_to_drive' // name of the function.
);
