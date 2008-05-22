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
	'ALTT_ACTIVE'			=> 'NV advanced last topic titles MOD anzeigen',

	'ALTT_CHAR_LIMIT'		=> 'Anzahl der Zeichen die angezeigt werden sollen',
	'ALTT_CHAR_LIMIT_EXP'	=> '0 oder 64 wenn nicht gekürzt werden soll',
	'ALTT_CONFIG'			=> 'Konfiguration',
	'ALTT_CONFIG_SAVED'		=> 'Einstellungen gespeichert',

	'ALTT_LASTPOST'			=> 'Letzter Beitragstitel',
	'ALTT_LASTPOST_EXP'		=> 'Wenn diese Option auf "Nein" gesetzt wird, wird der Titel des letzten Themas angezeigt.',

	'ALTT_TITLE'			=> 'NV advanced last topic titles',

	'CREATE_INDEX'						=> 'Index erstellen',
	'CREATE_INDEX_EXP'					=> 'Die Erstellung des Index erhöht die Geschwindigkeit der MOD. Manche Benutzer haben aber nicht die nötigen Rechte um einen Index zuerstellen. Sie erhalten eine Fehlermeldung bei der Installation. Sollte dies der Fall sein, einfach hier auf "Nein" stellen.',

	'INSTALLER_INTRO'					=> 'Intro',
	'INSTALLER_INTRO_WELCOME'			=> 'Willkommen zur MOD-Installation',
	'INSTALLER_INTRO_WELCOME_NOTE'		=> 'Bitte wähle aus, was du tun möchtest.',

	'INSTALLER_INSTALL'					=> 'Installieren',
	'INSTALLER_INSTALL_MENU'			=> 'Installation',
	'INSTALLER_INSTALL_SUCCESSFUL'		=> 'Installation der MOD v%s war erfolgreich.',
	'INSTALLER_INSTALL_UNSUCCESSFUL'	=> 'Installation der MOD v%s war <strong>nicht</strong> erfolgreich.',
	'INSTALLER_INSTALL_VERSION'			=> 'Installiere MOD v%s',
	'INSTALLER_INSTALL_WELCOME'			=> 'Willkommen zur Installation',
	'INSTALLER_INSTALL_WELCOME_NOTE'	=> 'Wenn du den MOD installierst, werden möglicherweise vorhandene Datenbanktabellen mit gleichem Namen gelöscht.',

	'INSTALLER_NEEDS_FOUNDER'			=> 'Du musst als Gründer eingeloggt sein.',

	'INSTALLER_UPDATE'					=> 'Update',
	'INSTALLER_UPDATE_MENU'				=> 'Updatemenü',
	'INSTALLER_UPDATE_NOTE'				=> 'Update MOD von v%s nach v%s',
	'INSTALLER_UPDATE_SUCCESSFUL'		=> 'Update der MOD von v%s nach v%s war erfolgreich.',
	'INSTALLER_UPDATE_UNSUCCESSFUL'		=> 'Update der MOD von v%s nach v%s war <strong>nicht</strong> erfolgreich.',
	'INSTALLER_UPDATE_VERSION'			=> 'Update MOD von v',
	'INSTALLER_UPDATE_WELCOME'			=> 'Willkommen zum Update',

	'WARNING'							=> 'Warnung',
));

?>