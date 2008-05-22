<?php

/**
*
* @package - NV advanced last topic titles
* @version $Id$
* @copyright (c) nickvergessen: http://www.flying-bits.org/ - nickvergessen@gmx.de
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
* @package acp
*/
class acp_altt
{
	var $u_action;

	function main($id, $mode)
	{
		global $db, $user, $auth, $template, $cache;
		global $config, $phpbb_root_path, $phpbb_admin_path, $phpEx;

		$user->add_lang('acp/common');
		$this->tpl_name = 'acp_altt';
		$this->page_title = $user->lang['ALTT_TITLE'];
		add_form_key('acp_altt');

		$submit = (isset($_POST['submit'])) ? true : false;
		if ($submit)
		{
			if (!check_form_key('acp_altt'))
			{
				trigger_error('FORM_INVALID');
			}
			$altt_char_limit	= request_var('altt_char_limit', 64);
			$altt_last_post		= request_var('altt_last_post', 0);
			$altt_active		= request_var('altt_active', 0);
			if($altt_char_limit !=$config['altt_char_limit'])
			{
				set_config('altt_char_limit', $altt_char_limit);
			}
			if($altt_last_post !=$config['altt_last_post'])
			{
				set_config('altt_last_post', $altt_last_post);
			}
			if($altt_active !=$config['altt_active'])
			{
				set_config('altt_active', $altt_active);
			}
			trigger_error($user->lang['ALTT_CONFIG_SAVED'] . adm_back_link($this->u_action));
		}
		$template->assign_vars(array(
			'ALTT_VERSION'			=> 'v' . $config['altt_mod_version'],
			'ALTT_CHAR_LIMIT'		=> $config['altt_char_limit'],
			'ALTT_LASTPOST'			=> $config['altt_last_post'],
			'ALTT_ACTIVE'			=> $config['altt_active'],
			'U_ACTION'				=> $this->u_action)
		);
	}
}

?>