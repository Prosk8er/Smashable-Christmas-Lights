<?php
/**
*
* @author Prosk8er (Tyler) prosk8er@gotskillslounge.com
* @package Smashable Christmas Lights
* @version $Id: install.php 100 2013-11-23 14:05:00Z Prosk8er $
* @copyright (c) 2013 Prosk8er ( http://www.gotskillslounge.com/ )
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @ignore
*/
define('UMIL_AUTO', true);
define('IN_PHPBB', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : './';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);

$user->session_begin();
$auth->acl($user->data);
$user->setup();

if (!file_exists($phpbb_root_path . 'umil/umil_auto.' . $phpEx))
{
	trigger_error('Please download the latest UMIL (Unified MOD Install Library) from: <a href="http://www.phpbb.com/mods/umil/">phpBB.com/mods/umil</a>', E_USER_ERROR);
}

// The language file which will be included when installing
$language_file = 'mods/info_acp_christmas_lights';

// The name of the mod to be displayed during installation.
$mod_name = 'CHRISTMAS_LIGHTS_MOD';

/*
* The name of the config variable which will hold the currently installed version
* UMIL will handle checking, setting, and updating the version itself.
*/
$version_config_name = 'christmas_lights_version';

/*
* Optionally we may specify our own logo image to show in the upper corner instead of the default logo.
* $phpbb_root_path will get prepended to the path specified
* Image height should be 50px to prevent cut-off or stretching.
*/
//$logo_img = 'styles/prosilver/imageset/site_logo.gif';

/*
* The array of versions and actions within each.
* You do not need to order it a specific way (it will be sorted automatically), however, you must enter every version, even if no actions are done for it.
*
* You must use correct version numbering.  Unless you know exactly what you can use, only use X.X.X (replacing X with an integer).
* The version numbering must otherwise be compatible with the version_compare function - http://php.net/manual/en/function.version-compare.php
*/
$versions = array(
	// Version 1.0.0
	'1.0.0' => array(
		'config_add' => array(
			array('scl_enabled'),
		),

		'table_column_add' => array(
			array('phpbb_users', 'user_scl_enabled', array('BOOL', '1')),
		),

		'module_add' => array(
			array('acp', 'ACP_CAT_DOT_MODS', 'SCL_ACP'),

			array('acp', 'SCL_ACP', array(
					'module_basename'	=> 'christmas_lights',
					'modes'			=> array('configuration'),
					'module_auth'		=> 'acl_a_board',
				),
			),
		),
	),
	// Version 1.0.0RC2
	'1.0.0RC2' => array(
		'cache_purge' => array('', 'imageset', 'template', 'theme'),
	),
);

// Include the UMIL Auto file, it handles the rest
include($phpbb_root_path . 'umil/umil_auto.' . $phpEx);

?>