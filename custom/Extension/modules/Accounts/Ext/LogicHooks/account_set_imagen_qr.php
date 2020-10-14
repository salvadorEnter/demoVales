<?php

$hook_array['after_save'][] = Array(
    1,
    'Establece string con id de imagen generada hacia el campo de tipo imagen',//Just a quick comment about the logic of it
    'custom/modules/Accounts/Account_Hooks.php', //path to the logic hook
    'Account_Hooks', // name of the class
    'account_set_img_qr' // name of the function.
);