<?php
$viewdefs['Accounts'] = 
array (
  'base' => 
  array (
    'view' => 
    array (
      'list' => 
      array (
        'panels' => 
        array (
          0 => 
          array (
            'name' => 'panel_header',
            'label' => 'LBL_PANEL_1',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'name',
                'link' => true,
                'label' => 'LBL_LIST_ACCOUNT_NAME',
                'enabled' => true,
                'default' => true,
                'width' => 'xlarge',
              ),
              1 => 
              array (
                'name' => 'gps_latitud_c',
                'label' => 'LBL_GPS_LATITUD_C',
                'enabled' => true,
                'default' => true,
              ),
              2 => 
              array (
                'name' => 'gps_longitud_c',
                'label' => 'LBL_GPS_LONGITUD_C',
                'enabled' => true,
                'default' => true,
              ),
              3 => 
              array (
                'name' => 'quick_contact_c',
                'label' => 'LBL_QUICK_CONTACT_C',
                'enabled' => true,
                'default' => true,
              ),
              4 => 
              array (
                'name' => 'business_type_c',
                'label' => 'LBL_BUSINESS_TYPE_C',
                'enabled' => true,
                'default' => true,
              ),
              5 => 
              array (
                'name' => 'account_type',
                'label' => 'LBL_TYPE',
                'enabled' => true,
                'default' => true,
              ),
              6 => 
              array (
                'name' => 'photography_c',
                'label' => 'LBL_PHOTOGRAPHY_C',
                'enabled' => true,
                'sortable' => false,
                'width' => '120',
                'default' => true,
              ),
              7 => 
              array (
                'name' => 'billing_address_city',
                'label' => 'LBL_LIST_CITY',
                'enabled' => true,
                'default' => true,
              ),
              8 => 
              array (
                'name' => 'billing_address_country',
                'label' => 'LBL_BILLING_ADDRESS_COUNTRY',
                'enabled' => true,
                'default' => true,
              ),
              9 => 
              array (
                'name' => 'phone_office',
                'label' => 'LBL_LIST_PHONE',
                'enabled' => true,
                'default' => true,
              ),
              10 => 
              array (
                'name' => 'assigned_user_name',
                'label' => 'LBL_LIST_ASSIGNED_USER',
                'id' => 'ASSIGNED_USER_ID',
                'enabled' => true,
                'default' => true,
              ),
              11 => 
              array (
                'name' => 'email',
                'label' => 'LBL_EMAIL_ADDRESS',
                'enabled' => true,
                'default' => true,
              ),
              12 => 
              array (
                'name' => 'date_modified',
                'enabled' => true,
                'default' => true,
              ),
              13 => 
              array (
                'name' => 'date_entered',
                'type' => 'datetime',
                'label' => 'LBL_DATE_ENTERED',
                'enabled' => true,
                'default' => true,
                'readonly' => true,
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);
