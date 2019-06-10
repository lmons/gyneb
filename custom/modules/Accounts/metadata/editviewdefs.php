<?php
$viewdefs ['Accounts'] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'SAVE',
          1 => 'CANCEL',
        ),
      ),
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'modules/Accounts/Account.js',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'LBL_ACCOUNT_INFORMATION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'lbl_account_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'label' => 'LBL_NAME',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'jjwg_maps_address_c',
            'label' => 'LBL_JJWG_MAPS_ADDRESS',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'brick_c',
            'label' => 'LBL_BRICK',
          ),
          1 => 
          array (
            'name' => 'city_c',
            'label' => 'LBL_CITY',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'country_c',
            'studio' => 'visible',
            'label' => 'LBL_COUNTRY',
          ),
        ),
        4 => 
        array (
          0 => 'account_type',
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'account_subtype_c',
            'studio' => 'visible',
            'label' => 'LBL_ACCOUNT_SUBTYPE',
          ),
          1 => 
          array (
            'name' => 'phone_office',
            'label' => 'LBL_PHONE_OFFICE',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'acc_number_c',
            'label' => 'LBL_ACC_NUMBER',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
?>
