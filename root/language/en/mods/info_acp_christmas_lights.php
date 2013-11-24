<?php
/**
*
* Smashable Christmas Lights [English]
*
* @author Prosk8er (Tyler) prosk8er@gotskillslounge.com
* @package Smashable Christmas Lights
* @version $Id: info_acp_christmas_lights.php 100 2013-11-23 14:05:00Z Prosk8er $
* @copyright (c) 2013 Prosk8er ( http://www.gotskillslounge.com/ )
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'SCL_ACP'		=> 'Smashable Christmas Lights',
	'SCL_TITLE'		=> 'Smashable Christmas Lights Settings',
	'SCL_EXPLAIN'		=> 'Configure Smashable Christmas Lights.',
	'CHRISTMAS_LIGHTS_MOD'	=> 'Smashable Christmas Lights',
	'SCL_CONFIG'		=> 'Settings',
	'SCL_SAVED'		=> 'Changes Saved.',
	'SCL_ENABLED'		=> 'Enable "Smashable Christmas Lights"',

	'INSTALL_SCL_MOD'		=> 'Install Smashable Christmas Lights Mod',
	'INSTALL_SCL_MOD_CONFIRM'	=> 'Are you sure you want to install the Smashable Christmas Lights Mod?',
	'UPDATE_SCL_MOD'		=> 'Update Smashable Christmas Lights Mod',
	'UPDATE_SCL_MOD_CONFIRM'	=> 'Are you sure you want to update the Smashable Christmas Lights Mod?',
	'UNINSTALL_SCL_MOD'		=> 'Uninstall Smashable Christmas Lights Mod',
	'UNINSTALL_SCL_MOD_CONFIRM'	=> 'Are you sure you want to uninstall the Smashable Christmas Lights Mod?',
));

?>