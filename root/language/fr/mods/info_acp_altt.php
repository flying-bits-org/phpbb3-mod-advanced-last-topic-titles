<?php
/**
*
* @package - NV Advanced Last Topic Titles
* @version $Id$
* @copyright (c) 2007 nickvergessen nickvergessen@gmx.de http://www.flying-bits.org
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
	'ALTT_ACTIVE'			=> 'Activer le MOD NV advanced last topic titles',

	'ALTT_CHAR_LIMIT'		=> 'Nombre de carractères, affichés sur la page',
	'ALTT_CHAR_LIMIT_EXP'	=> '0 ou 64 pour pas de coupure du titre',
	'ALTT_CONFIG'			=> 'Configuration de NV advanced last topic titles',
	'ALTT_CONFIG_SAVED'		=> 'Sauvegarder les changements',

	'ALTT_LINK_NAME'		=> 'Le nom du lien est le titre de',
	'ALTT_LINK_URL'			=> 'le lien mène à',
	'ALTT_FIRST_POST'		=> 'Premier message du dernier sujet',
	'ALTT_LAST_POST'		=> 'Dernier message du dernier sujet',
	'ALTT_FIRST_UNREAD_POST'	=> 'Premier message non lu du dernier sujet',
	'ALTT_FIRST_UNREAD_POST_NOTE'	=> 'Note: S\'il n\'y a pas de message non lu, le lien mènera vers le premier message.',
	'ALTT_POST'				=> 'Message',
	'ALTT_TOPIC'			=> 'Sujet',
	'ALTT_LINK_STYLE'		=> 'Style de lien',
	'ALTT_BOLD'				=> 'Gras',
	'ALTT_ITALIC'			=> 'Italique',
	'ALTT_ADV'				=> 'plus:',

	'ALTT_IGNORE_PASSWORD'		=> 'Ignorer le mot de passe',
	'ALTT_IGNORE_PASSWORD_EXP'	=> 'Le titre est visible, même si le forum est protégé par mot de passe.',
	'ALTT_IGNORE_RIGHTS'		=> 'Ignorer les droits',
	'ALTT_IGNORE_RIGHTS_EXP'	=> 'Si vous ignorez les droits, le titre est visible, même si vous n\'êtes pas autorisé à lire le message.',

	'ALTT_TITLE'				=> 'NV advanced last topic titles',

	'NV_ALTT_MOD'					=> '"NV advanced last topic titles" MOD',
	'INSTALL_NV_ALTT_MOD'			=> 'Install "NV advanced last topic titles" MOD',
	'INSTALL_NV_ALTT_MOD_CONFIRM'	=> 'Are you sure you want to install the "NV advanced last topic titles" MOD?',
	'UPDATE_NV_ALTT_MOD'			=> 'Update "NV advanced last topic titles" MOD',
	'UPDATE_NV_ALTT_MOD_CONFIRM'	=> 'Are you sure you want to update the "NV advanced last topic titles" MOD?',
	'UNINSTALL_NV_ALTT_MOD'			=> 'Uninstall "NV advanced last topic titles" MOD',
	'UNINSTALL_NV_ALTT_MOD_CONFIRM'	=> 'Are you sure you want to uninstall the "NV advanced last topic titles" MOD?',
));

?>