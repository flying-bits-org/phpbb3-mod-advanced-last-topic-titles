<?php

/**
*
* @package - NV advanced last topic titles
* @version $Id$
* @copyright (c) nickvergessen: http://www.flying-bits.org/ - nickvergessen@gmx.de
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

define('IN_PHPBB', true);
$phpbb_root_path = '../';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.'.$phpEx);
include($phpbb_root_path . 'includes/acp/acp_modules.' . $phpEx);

// Start session management
$user->session_begin();
$auth->acl($user->data);
$user->setup();
$user->add_lang('mods/info_acp_altt');
$new_mod_version = '1.2.5';
$page_title = 'NV advanced last topic titles v' . $new_mod_version;
$log_name = 'Modification "NV advanced last topic titles"' . ((request_var('update', 0) > 0) ? '-Update' : '') . ' v' . $new_mod_version;

$mode = request_var('mode', 'else', true);
function split_sql_file($sql, $delimiter)
{
	$sql = str_replace("\r" , '', $sql);
	$data = preg_split('/' . preg_quote($delimiter, '/') . '$/m', $sql);

	$data = array_map('trim', $data);

	// The empty case
	$end_data = end($data);

	if (empty($end_data))
	{
		unset($data[key($data)]);
	}

	return $data;
}
function altt_create_index($table, $column)
{
	global $db;

	switch ($db->sql_layer)
	{
		case 'firebird':
		case 'postgres':
		case 'oracle':
		case 'sqlite':
			$sql = 'CREATE INDEX ' . $table . "_$column ON " . TOPICS_TABLE . "($column)";
		break;

		case 'mysql':
		case 'mysqli':
		case 'mysql4':
			$sql = "ALTER TABLE `" . $table . "` ADD INDEX (`$column`)";
		break;

		case 'mssql':
		case 'mssql_odbc':
			$sql = "CREATE INDEX $column ON " . $table . "($column) ON [PRIMARY]";
		break;

		default:
			trigger_error("Your database ({$db->sql_layer})is not supported by phpbb3 itself.");
		break;
	}
	$db->sql_query($sql);
}
function add_module($array)
{
	global $user;
	$modules = new acp_modules();
	$failed = $modules->update_module_data($array, true);
	if ($failed == 'PARENT_NO_EXIST')
	{
		$user->add_lang('mods/info_acp_gallery');
		trigger_error(sprintf($user->lang['MISSING_PARENT_MODULE'], $array['parent_id'], $user->lang[$array['module_langname']]));
	}
}
$install = request_var('install', 0);
$update = request_var('update', 0);
$version = request_var('v', '0.0.0');

switch ($mode)
{
	case 'install':
		$installed = false;
		if ($install == 1)
		{
			$index = request_var('index', 0);
			if ($index == 1)
			{
				altt_create_index(TOPICS_TABLE, 'topic_last_post_id');
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
			$sql = 'SELECT module_id FROM ' . MODULES_TABLE . " WHERE module_langname = 'ALTT_TITLE' LIMIT 1";
			$result = $db->sql_query($sql);
			$altt = $db->sql_fetchrow($result);
			$config_altt = array('module_basename' => 'altt', 'module_enabled' => 1, 'module_display' => 1, 'parent_id' => $altt['module_id'], 'module_class' => 'acp', 'module_langname' => 'ALTT_CONFIG', 'module_mode' => 'overview', 'module_auth' => '');
			add_module($config_altt);

			// clear cache and log what we did
			$cache->purge();
			add_log('admin', 'LOG_INSTALL_INSTALLED', $log_name);
			add_log('admin', 'LOG_PURGE_CACHE');
			$installed = true;
		}
	break;
	case 'update':
		$updated = $ask_for_index = false;
		switch ($version)
		{
			case '1.2.0':
				$ask_for_index = true;
			case '1.2.1':
			case '1.2.2':
			case '1.2.3':
			case '1.2.4':
			break;
		}
		if ($update == 1)
		{
			switch ($version)
			{
				case '1.2.0':
					$index = request_var('index', 0);
					if ($index == 1)
					{
						altt_create_index(TOPICS_TABLE, 'topic_last_post_id');
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
				break;
			}


			// clear cache and log what we did
			set_config('altt_mod_version', $new_mod_version);
			$cache->purge();
			add_log('admin', 'LOG_INSTALL_INSTALLED', $log_name);
			add_log('admin', 'LOG_PURGE_CACHE');
			$updated = true;
		}
	break;
	default:
		//we had a little cheater
	break;
}

include($phpbb_root_path . 'install_altt/layout.'.$phpEx);
?>