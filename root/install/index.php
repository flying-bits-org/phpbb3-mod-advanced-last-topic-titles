<?php
/**
*
* @package - NV Advanced Last Topic Titles
* @version $Id$
* @copyright (c) 2007 nickvergessen nickvergessen@gmx.de http://www.flying-bits.org
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
* @ignore
*/
define('UMIL_AUTO', true);
define('IN_PHPBB', true);
define('IN_INSTALL', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : '../';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);

$user->session_begin();
$auth->acl($user->data);
$user->setup();

if (!file_exists($phpbb_root_path . 'umil/umil_auto.' . $phpEx))
{
	trigger_error('Please download the latest UMIL (Unified MOD Install Library) from: <a href="http://www.phpbb.com/mods/umil/">phpBB.com/mods/umil</a>', E_USER_ERROR);
}

$mod_name = 'NV_ALTT_MOD';

$version_config_name = 'altt_mod_version';
$language_file = 'mods/info_acp_altt';

$versions = array(
	// Version 1.2.0
	'1.2.0'	=> array(
		'module_add' => array(
			array('acp', 'ACP_CAT_DOT_MODS', 'ALTT_TITLE'),

			array('acp', 'ALTT_TITLE', array(
					'module_basename'	=> 'altt',
					'module_langname'	=> 'ALTT_CONFIG',
					'module_mode'		=> 'overview',
					'module_auth'		=> 'acl_a_board',
				),
			),
		),
		'table_index_add' => array(
			array(TOPICS_TABLE, 'altt', array('topic_last_post_id')),
		),
		'config_add' => array(
			array('altt_char_limit', 64),
			array('altt_active', 1),
		),
	),

	// Version 1.2.1
	'1.2.1'	=> array(),

	// Version 1.2.2
	'1.2.2'	=> array(),

	// Version 1.2.3
	'1.2.3'	=> array(
		'config_add' => array(
			array('altt_link_name', 0),
			array('altt_link_url', 0),
			array('altt_style_bold', 1),
			array('altt_style_italic', 0),
			array('altt_style_adv', 0),
			array('altt_style_adv2', 'color: #FF0000;'),
		),
	),

	// Version 1.2.4
	'1.2.4'	=> array(
		'config_add' => array(
			array('altt_ignore_rights', 0),
			array('altt_ignore_password', 0),
		),
	),

	// Version 1.2.5
	'1.2.5'	=> array(),

	// Version 1.2.6
	'1.2.6'	=> array(),

	// Version 1.2.7
	'1.2.7'	=> array(),

	// Version 1.2.8
	'1.2.8'	=> array(),

	// Version 1.2.9
	'1.2.9'	=> array(),

	// Version 1.3.0
	'1.3.0'	=> array(),

	// Version 1.3.1
	'1.3.1'	=> array(),

	// Version 1.3.2
	'1.3.2'	=> array(),

	// Version 1.3.3
	'1.3.3'	=> array(),
);

// Include the UMIL Auto file and everything else will be handled automatically.
include($phpbb_root_path . 'umil/umil_auto.' . $phpEx);

?>