<?php
$viewdefs['Opportunities'] = 
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
        ),
        'panels' => 
        array (
          0 => 
          array (
            'label' => 'LBL_PANEL_DEFAULT',
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
              1 => 'amount',
              2 => 'account_name',
              3 => 'date_closed',
              4 => 'tag',
              5 => 'assigned_user_name',
              6 => 'team_name',
              7 => 
              array (
                'name' => 'sales_status',
                'readonly' => true,
                'studio' => true,
                'label' => 'LBL_SALES_STATUS',
              ),
              8 => 
              array (
                'name' => 'renewal_parent_name',
                'label' => 'LBL_RENEWAL_PARENT',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);
