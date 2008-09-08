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
* @package module_install
*/
class acp_altt_info
{
	function module()
	{
		return array(
			'filename'	=> 'acp_altt',
			'title'		=> 'ALTT_TITLE',
			'version'	=> '1.2.5',
			'modes'		=> array(
				'config_altt'	=> array(
					'title'			=> 'ALTT_CONFIG',
					'auth'			=> 'acl_a_board',
					'cat'			=> array('ACP_BOARD_CONFIGURATION'),
				),
			),
		);
	}
}

?>