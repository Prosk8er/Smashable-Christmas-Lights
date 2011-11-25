<?php
/**
*
* @package - Smashable Christmas Lights
* @version $Id: install.php 2011-11-11 12:34 Prosk8er $
* @copyright (c) Prosk8er ( http://www.gotskillslounge.com )
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

$mod_name = 'SCL_ACP';

$version_config_name = 'christmas_lights_version';
$language_file = 'mods/info_acp_christmas_lights';

$versions = array(
	// Version 1.0.0
	'1.0.0'   => array(
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
);

// Include the UMIL Auto file and everything else will be handled automatically.
include($phpbb_root_path . 'umil/umil_auto.' . $phpEx);

?>