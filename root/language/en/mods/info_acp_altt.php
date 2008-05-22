<?php

/**
*
* @package - NV advanced last topic titles
* @version $Id$
* @copyright (c) nickvergessen: http://www.flying-bits.org/ - nickvergessen@gmx.de
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/
if (!defined('IN_PHPBB'))
{
	exit;
}
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ALTT_ACTIVE'				=> 'enable NV advanced last topic titles MOD',

	'ALTT_CHAR_LIMIT'			=> 'number of chars, display on the page',
	'ALTT_CHAR_LIMIT_EXP'		=> '0 or 64 for no cut down',
	'ALTT_CONFIG'				=> 'configuration of NV advanced last topic titles',
	'ALTT_CONFIG_SAVED'			=> 'saved adjustment',

	'ALTT_LASTPOST'				=> 'last posttitle',
	'ALTT_LASTPOST_EXP'			=> 'If this option is set to "no", the last topictitle is displayed.',

	'ALTT_TITLE'				=> 'NV advanced last topic titles',

	'CREATE_INDEX'						=> 'Create Index',
	'CREATE_INDEX_EXP'					=> 'Creating an index improves the speed of this MOD. Some Users don\'t have the rights to create indexes and would receive an error on the installation. So just turn it off here.',

	'INSTALLER_INTRO'					=> 'Intro',
	'INSTALLER_INTRO_WELCOME'			=> 'Welcome to the MOD Installation',
	'INSTALLER_INTRO_WELCOME_NOTE'		=> 'Please choose what you want to do.',

	'INSTALLER_INSTALL'					=> 'Install',
	'INSTALLER_INSTALL_MENU'			=> 'Installmenu',
	'INSTALLER_INSTALL_SUCCESSFUL'		=> 'Installation of the MOD v%s was successful. You may delete the install-folder now.',
	'INSTALLER_INSTALL_UNSUCCESSFUL'	=> 'Installation of the MOD v%s was <strong>not</strong> successful.',
	'INSTALLER_INSTALL_VERSION'			=> 'Install MOD v%s',
	'INSTALLER_INSTALL_WELCOME'			=> 'Welcome to the Installationmenu',
	'INSTALLER_INSTALL_WELCOME_NOTE'	=> 'When you choose to install the MOD, any database of previous versions will be dropped.',

	'INSTALLER_NEEDS_FOUNDER'			=> 'You must be logged in as a founder.',

	'INSTALLER_UPDATE'					=> 'Update',
	'INSTALLER_UPDATE_MENU'				=> 'Updatemenu',
	'INSTALLER_UPDATE_NOTE'				=> 'Update MOD from v%s to v%s',
	'INSTALLER_UPDATE_SUCCESSFUL'		=> 'Update of the MOD from v%s to v%s was successful. You may delete the install-folder now.',
	'INSTALLER_UPDATE_UNSUCCESSFUL'		=> 'Update of the MOD from v%s to v%s was <strong>not</strong> successful.',
	'INSTALLER_UPDATE_VERSION'			=> 'Update MOD from v',
	'INSTALLER_UPDATE_WELCOME'			=> 'Welcome to the Updatemenu',

	'WARNING'							=> 'Warning',
));

?>