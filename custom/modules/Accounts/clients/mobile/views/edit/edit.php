<?php
$viewdefs['Accounts'] = 
array (
  'mobile' => 
  array (
    'view' => 
    array (
      'edit' => 
      array (
        'templateMeta' => 
        array (
          'maxColumns' => '1',
          'widths' => 
          array (
            0 => 
            array (
              'label' => '10',
              'field' => '30',
            ),
          ),
          'useTabs' => false,
        ),
        'panels' => 
        array (
          0 => 
          array (
            'label' => 'LBL_PANEL_DEFAULT',
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_PANEL_DEFAULT',
            'columns' => '1',
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'name',
                'displayParams' => 
                array (
                  'required' => true,
                  'wireless_edit_only' => true,
                ),
              ),
              1 => 'phone_office',
              2 => 
              array (
                'name' => 'description',
                'comment' => 'Full text of the note',
                'label' => 'LBL_DESCRIPTION',
              ),
              3 => 
              array (
                'name' => 'website',
                'displayParams' => 
                array (
                  'type' => 'link',
                ),
              ),
              4 => 'email',
              5=> array (
                  'name' => 'signature',
                  'type' => 'signature',
                  'studio' => 'visible',
                  'label' => 'Firma del Cliente',
                  'css_class' => 'signature_cliente',
              ),
              6 => 'tag',
              7 => 'billing_address_street',
              8 => 'billing_address_city',
              9 => 'billing_address_state',
              10 => 'billing_address_postalcode',
              11 => 'billing_address_country',
              12 => 'assigned_user_name',
              13 => 'team_name',
            ),
          ),
        ),
      ),
    ),
  ),
);
