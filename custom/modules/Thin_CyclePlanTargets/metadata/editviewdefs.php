<?php
$module_name = 'Thin_CyclePlanTargets';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
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
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'thin_cycleplantargets_contacts_name',
          ),
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'accounts_thin_cycleplantargets_1_name',
            'label' => 'LBL_ACCOUNTS_THIN_CYCLEPLANTARGETS_1_FROM_ACCOUNTS_TITLE',
          ),
          1 => 
          array (
            'name' => 'call_frequency_target',
            'label' => 'LBL_CALL_FREQUENCY_TARGET',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'thin_cycleplans_thin_cycleplantargets_name',
          ),
          1 => 
          array (
            'name' => 'submitted_calls',
            'label' => 'LBL_SUBMITTED_CALLS',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'week_c',
            'label' => 'LBL_WEEK',
          ),
          1 => 
          array (
            'name' => 'customer_tier',
            'studio' => 'visible',
            'label' => 'LBL_CUSTOMER_TIER',
          ),
        ),
      ),
    ),
  ),
);
?>
