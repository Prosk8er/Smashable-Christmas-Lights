<?php
/**
*
* @author Prosk8er (Tyler) prosk8er@gotskillslounge.com
* @package Smashable Christmas Lights
* @version $Id: acp_christmas_lights.php 2013-11-23 14:05:00Z Prosk8er $
* @copyright (c) 2013 Prosk8er ( http://www.gotskillslounge.com/ )
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