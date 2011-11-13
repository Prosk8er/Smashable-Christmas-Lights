<?php

/**
*
* @package - Share On
* @version $Id: info_acp_shareon.php 2010-03-12 02:40 Saske1 $
* @copyright (c) Saske1 ( http://www.phpbbsaske.com )
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
* DO NOT CHANGE
*/
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
	
));

?>