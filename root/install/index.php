<?php

/**
*
* @package - NV recent topics
* @version $Id$
* @copyright (c) nickvergessen ( http://mods.flying-bits.org/ )
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @ignore
*/
define('IN_PHPBB', true);
$phpbb_root_path = '../';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.'.$phpEx);
include($phpbb_root_path . 'includes/acp/acp_modules.' . $phpEx);

// Needed to be able to access the install/ when phpBB is already installed
define('ADMIN_START', 1);

// Start session management
$user->session_begin();
$auth->acl($user->data);
$user->setup();

// Load language and custom template-path
$user->add_lang('mods/info_acp_altt');
$template->set_custom_template('style', 'install_altt');
$template->assign_var('T_TEMPLATE_PATH', 'style');

$new_mod_version = '1.2.6';
$page_title = sprintf($user->lang['INSTALL_MODIFICATION'], $new_mod_version);

function install_back_link($u_action)
{
	global $user;
	return '<br /><br /><a href="' . $u_action . '">&laquo; ' . $user->lang['BACK_TO_PREV'] . '</a>';
}
function add_module($array)
{
	global $user;
	$modules = new acp_modules();
	$failed = $modules->update_module_data($array, true);
	if ($failed == 'PARENT_NO_EXIST')
	{
		$user->add_lang('acp\modules');
		trigger_error('PARENT_NO_EXIST');
	}
}

$mode = request_var('mode', 'else');
$version = request_var('version', '0.0.0');
$confirm = request_var('confirm', 0);
switch ($mode)
{
	case 'install':
		if ($confirm)
		{
			// Use phpBB-Stuff
			include($phpbb_root_path . 'includes/db/db_tools.' . $phpEx);
			$phpbb_db_tools = new phpbb_db_tools($db);
			if (!$phpbb_db_tools->sql_column_exists(FORUMS_TABLE, 'forum_recent_topics'))
			{
				$phpbb_db_tools->sql_column_add(FORUMS_TABLE, 'forum_recent_topics', array('TINT:1', 1));
			}

			$index = request_var('index', 0);
			if ($index == 1)
			{
				include($phpbb_root_path . 'includes/db/db_tools.' . $phpEx);
				$phpbb_db_tools = new phpbb_db_tools($db);

				$phpbb_db_tools->sql_create_index(TOPICS_TABLE, 'altt', 'topic_last_post_id');
			}

			set_config('altt_char_limit', 64);
			set_config('altt_link_name', 0);
			set_config('altt_link_url', 0);
			set_config('altt_style_bold', 1);
			set_config('altt_style_italic', 0);
			set_config('altt_style_adv', 0);
			set_config('altt_style_adv2', 'color: #FF0000;');
			set_config('altt_active', 1);
			set_config('altt_ignore_rights', 0);
			set_config('altt_ignore_password', 0);
			set_config('altt_mod_version', $new_mod_version);

			// create the acp modules
			$modules = new acp_modules();
			$altt = array('module_basename' => '', 'module_enabled' => 1, 'module_display' => 1, 'parent_id' => 31, 'module_class' => 'acp', 'module_langname' => 'ALTT_TITLE', 'module_mode' => '', 'module_auth' => '');
			add_module($altt);
			$altt_module_id = $db->sql_nextid();
			$config_altt = array('module_basename' => 'altt', 'module_enabled' => 1, 'module_display' => 1, 'parent_id' => $altt_module_id, 'module_class' => 'acp', 'module_langname' => 'ALTT_CONFIG', 'module_mode' => 'overview', 'module_auth' => '');
			add_module($config_altt);

			// clear cache and log what we did
			$cache->purge();
			add_log('admin', 'LOG_INSTALL_INSTALLED', sprintf($user->lang['LOG_INSTALL_MODIFICATION'], $new_mod_version));
			add_log('admin', 'LOG_PURGE_CACHE');

			$template->assign_vars(array(
				'S_INFORMATION'		=> sprintf($user->lang['INSTALLER_INSTALL_SUCCESSFUL'], $new_mod_version),
			));
		}
		$template->assign_vars(array(
			'S_NOT_INTRO'		=> true,
			'S_INSTALL'			=> true,
			'S_ASK_INDEX'		=> true,
			'L_WELCOME'			=> $user->lang['INSTALLER_INSTALL_WELCOME'],
			'L_WELCOME_NOTE'	=> $user->lang['INSTALLER_INSTALL_WELCOME_NOTE'],
			'L_LEGEND'			=> $user->lang['INSTALLER_INSTALL'],
			'L_LABLE'			=> 'v' . $new_mod_version,
			'S_ACTION'			=> append_sid("{$phpbb_root_path}install/index.$phpEx", 'mode=install'),
		));
	break;
	case 'update':
		$ask_for_index = false;
		switch ($version)
		{
			case '1.2.0':
				$ask_for_index = true;
			case '1.2.1':
			case '1.2.2':
			case '1.2.3':
			case '1.2.4':
			case '1.2.5':
			break;
		}
		if ($confirm)
		{
			switch ($version)
			{
				case '1.2.0':
					$index = request_var('index', 0);
					if ($index == 1)
					{
						include($phpbb_root_path . 'includes/db/db_tools.' . $phpEx);
						$phpbb_db_tools = new phpbb_db_tools($db);

						$phpbb_db_tools->sql_create_index(TOPICS_TABLE, 'altt', 'topic_last_post_id');
					}
				case '1.2.1':
				case '1.2.2':
				case '1.2.3':
					set_config('altt_link_name', 0);
					set_config('altt_link_url', 0);
					set_config('altt_style_bold', 1);
					set_config('altt_style_italic', 0);
					set_config('altt_style_adv', 0);
					set_config('altt_style_adv2', 'color: #FF0000;');
				case '1.2.4':
					set_config('altt_ignore_rights', 0);
					set_config('altt_ignore_password', 0);
				case '1.2.5':

				break;
			}
			set_config('altt_mod_version', $new_mod_version);
			$cache->purge();
			add_log('admin', 'LOG_INSTALL_INSTALLED', sprintf($user->lang['LOG_UPDATE_MODIFICATION'], $new_mod_version));
			add_log('admin', 'LOG_PURGE_CACHE');

			$template->assign_vars(array(
				'S_INFORMATION'		=> sprintf($user->lang['INSTALLER_UPDATE_SUCCESSFUL'], $version, $new_mod_version),
			));
		}
		$template->assign_vars(array(
			'S_NOT_INTRO'		=> true,
			'S_UPDATE'			=> $version,
			'S_ASK_INDEX'		=> $ask_for_index,
			'L_WELCOME'			=> $user->lang['INSTALLER_UPDATE_WELCOME'],
			'L_LEGEND'			=> $user->lang['INSTALLER_UPDATE'],
			'L_LABLE'			=> sprintf($user->lang['INSTALLER_UPDATE_NOTE'], $version, $new_mod_version),
			'S_ACTION'			=> append_sid("{$phpbb_root_path}install/index.$phpEx", 'mode=update&amp;version=' . $version),
		));
	break;
	default:
		if ($user->data['user_type'] == USER_FOUNDER)
		{
			$template->assign_vars(array(
				'S_INTRO'			=> true,
				'L_WELCOME'			=> $user->lang['INSTALLER_INTRO_WELCOME'],
				'L_WELCOME_NOTE'	=> $user->lang['INSTALLER_INTRO_WELCOME_NOTE'],
			));
		}
	break;
}
if ($user->data['user_type'] != USER_FOUNDER)
{
	$template->assign_vars(array(
		'L_WELCOME'		=> $user->lang['INSTALLER_INTRO_WELCOME'],
		'S_WARNING'		=> $user->lang['INSTALLER_NEEDS_FOUNDER'],
	));
}

$template->assign_vars(array(
	'L_PAGE_TITLE'		=> $page_title,
	'L_INSTALL_VERSION'	=> sprintf($user->lang['INSTALLER_INSTALL_VERSION'], $new_mod_version),

	'S_VERSION'			=> $version,

	'U_INTRO'			=> append_sid("{$phpbb_root_path}install/index.$phpEx"),
	'U_INSTALL'			=> append_sid("{$phpbb_root_path}install/index.$phpEx", 'mode=install'),
	'U_UPDATE_1_2_0'	=> append_sid("{$phpbb_root_path}install/index.$phpEx", 'mode=update&amp;version=1.2.0'),
	'U_UPDATE_1_2_1'	=> append_sid("{$phpbb_root_path}install/index.$phpEx", 'mode=update&amp;version=1.2.1'),
	'U_UPDATE_1_2_2'	=> append_sid("{$phpbb_root_path}install/index.$phpEx", 'mode=update&amp;version=1.2.2'),
	'U_UPDATE_1_2_3'	=> append_sid("{$phpbb_root_path}install/index.$phpEx", 'mode=update&amp;version=1.2.3'),
	'U_UPDATE_1_2_4'	=> append_sid("{$phpbb_root_path}install/index.$phpEx", 'mode=update&amp;version=1.2.4'),
	'U_UPDATE_1_2_5'	=> append_sid("{$phpbb_root_path}install/index.$phpEx", 'mode=update&amp;version=1.2.5'),
));

page_header($page_title);

$template->set_filenames(array(
	'body' => 'install_body.html')
);

page_footer();

?>