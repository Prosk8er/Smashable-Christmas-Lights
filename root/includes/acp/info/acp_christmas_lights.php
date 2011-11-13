<?php
/**
*
* @package - Smashable Christmas Lights
* @version $Id: acp_christmas_lights.php 2011-11-11 12:34 Prosk8er $
* @copyright (c) Prosk8er ( http://www.gotskillslounge.com )
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/
if (!defined('IN_PHPBB'))
{
	exit;
}
/**
* @package module_install
*/
class acp_christmas_lights_info
{
	function module()
	{
		return array(
			'filename'	=> 'acp_christmas_lights',
			'title'		=> 'SCL_ACP',
			'version'	=> '1.0.0',
			'modes'		=> array(
				'configuration'		=> array('title' => 'SCL_CONFIG', 'auth' => 'acl_a_board', 'cat' => array('ACP_CAT_DOT_MODS')),
			),
		);
	}

	function install()
	{
	}

	function uninstall()
	{
	}
}

?>