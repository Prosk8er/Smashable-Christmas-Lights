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

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* @package acp
*/
class acp_christmas_lights
{
	var $u_action;

	function main($id, $mode)
	{
		global $db, $user, $auth, $template, $cache;
		global $config, $phpbb_root_path, $phpbb_admin_path, $phpEx;

		include($phpbb_root_path . 'includes/acp/info/acp_christmas_lights.' . $phpEx);

		$user->add_lang('acp/common');
		$this->tpl_name = 'acp_christmas_lights';
		$this->page_title = $user->lang['CHRISTMAS_LIGHTS_MOD'];
		add_form_key('acp_christmas_lights');

		$submit = (isset($_POST['submit'])) ? true : false;
		if ($submit)
		{
			if (!check_form_key('acp_christmas_lights'))
			{
				trigger_error('FORM_INVALID');
			}

			set_config('scl_enabled', request_var('scl_enabled', 0));

			trigger_error($user->lang['SCL_SAVED'] . adm_back_link($this->u_action));
		}
		
		$template->assign_vars(array(
			'SCL_ENABLED'      => $config['scl_enabled'],
			'U_ACTION'      => $this->u_action,
		));
	}
}

?>