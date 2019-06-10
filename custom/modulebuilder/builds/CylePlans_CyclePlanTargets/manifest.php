<?php
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.

 * SuiteCRM is an extension to SugarCRM Community Edition developed by Salesagility Ltd.
 * Copyright (C) 2011 - 2014 Salesagility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for  technical reasons, the Appropriate Legal Notices must
 * display the words  "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 ********************************************************************************/


// THIS CONTENT IS GENERATED BY MBPackage.php
$manifest = array (
  0 => 
  array (
    'acceptable_sugar_versions' => 
    array (
      0 => '',
    ),
  ),
  1 => 
  array (
    'acceptable_sugar_flavors' => 
    array (
      0 => 'CE',
      1 => 'PRO',
      2 => 'ENT',
    ),
  ),
  'readme' => '',
  'key' => 'Thin',
  'author' => 'Mounssif',
  'description' => '',
  'icon' => '',
  'is_uninstallable' => true,
  'name' => 'CylePlans_CyclePlanTargets',
  'published_date' => '2016-12-27 15:50:14',
  'type' => 'module',
  'version' => 1482853815,
  'remove_tables' => 'prompt',
);


$installdefs = array (
  'id' => 'CylePlans_CyclePlanTargets',
  'beans' => 
  array (
    0 => 
    array (
      'module' => 'Thin_CyclePlans',
      'class' => 'Thin_CyclePlans',
      'path' => 'modules/Thin_CyclePlans/Thin_CyclePlans.php',
      'tab' => true,
    ),
    1 => 
    array (
      'module' => 'Thin_CyclePlanTargets',
      'class' => 'Thin_CyclePlanTargets',
      'path' => 'modules/Thin_CyclePlanTargets/Thin_CyclePlanTargets.php',
      'tab' => true,
    ),
  ),
  'layoutdefs' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/thin_cycleplans_thin_cycleplantargets_Thin_CyclePlans.php',
      'to_module' => 'Thin_CyclePlans',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/thin_cycle_plan_targets_contacts_Contacts.php',
      'to_module' => 'Contacts',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/thin_cycle_plan_targets_contacts_Thin_CyclePlanTargets.php',
      'to_module' => 'Thin_CyclePlanTargets',
    ),
  ),
  'relationships' => 
  array (
    0 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/thin_cycleplans_thin_cycleplantargetsMetaData.php',
    ),
    1 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/thin_cycle_plan_targets_contactsMetaData.php',
    ),
  ),
  'image_dir' => '<basepath>/icons',
  'copy' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/modules/Thin_CyclePlans',
      'to' => 'modules/Thin_CyclePlans',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/modules/Thin_CyclePlanTargets',
      'to' => 'modules/Thin_CyclePlanTargets',
    ),
  ),
  'language' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Thin_CyclePlanTargets.php',
      'to_module' => 'Thin_CyclePlanTargets',
      'language' => 'en_us',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Thin_CyclePlans.php',
      'to_module' => 'Thin_CyclePlans',
      'language' => 'en_us',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Contacts.php',
      'to_module' => 'Contacts',
      'language' => 'en_us',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Thin_CyclePlanTargets.php',
      'to_module' => 'Thin_CyclePlanTargets',
      'language' => 'en_us',
    ),
    4 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/en_us.lang.php',
      'to_module' => 'application',
      'language' => 'en_us',
    ),
  ),
  'vardefs' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/thin_cycleplans_thin_cycleplantargets_Thin_CyclePlanTargets.php',
      'to_module' => 'Thin_CyclePlanTargets',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/thin_cycleplans_thin_cycleplantargets_Thin_CyclePlans.php',
      'to_module' => 'Thin_CyclePlans',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/thin_cycle_plan_targets_contacts_Contacts.php',
      'to_module' => 'Contacts',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/thin_cycle_plan_targets_contacts_Thin_CyclePlanTargets.php',
      'to_module' => 'Thin_CyclePlanTargets',
    ),
  ),
  'layoutfields' => 
  array (
    0 => 
    array (
      'additional_fields' => 
      array (
      ),
    ),
  ),
);