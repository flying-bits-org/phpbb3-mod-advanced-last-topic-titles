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

	'CREATE_INDEX'						=> 'Create Index',
	'CREATE_INDEX_EXP'					=> 'Creating an index improves the speed of this MOD. Some Users don\'t have the rights to create indexes and would receive an error on the installation. So just turn it off here.',

	'INSTALLER_INTRO'					=> 'Introduction',
	'INSTALLER_INTRO_WELCOME'			=> 'Bienvenue dans l\'installation du MOD',
	'INSTALLER_INTRO_WELCOME_NOTE'		=> 'Choisissez ce que vous voulez faire.',

	'INSTALLER_INSTALL'					=> 'Installation',
	'INSTALLER_INSTALL_MENU'			=> 'Menu d\'installation',
	'INSTALLER_INSTALL_SUCCESSFUL'		=> 'L\'installation du MOD v%s a réussi.',
	'INSTALLER_INSTALL_VERSION'			=> 'Installation du MOD v%s',
	'INSTALLER_INSTALL_WELCOME'			=> 'Bienvenue dans le menu d\'installation',
	'INSTALLER_INSTALL_WELCOME_NOTE'	=> 'Quand vous choisissez d\'installer ce  MOD, aucune donnée des précédentes versions ne sera oubliée.',

	'INSTALLER_NEEDS_FOUNDER'			=> 'Vous devez être connecté en tant que fondateur.',

	'INSTALLER_UPDATE'					=> 'Mise à jour',
	'INSTALLER_UPDATE_MENU'				=> 'Menu de la mise à jour',
	'INSTALLER_UPDATE_NOTE'				=> 'Mise à jour du MOD de la v%s vers la v%s',
	'INSTALLER_UPDATE_SUCCESSFUL'		=> 'La mise à jour du MOD de la v%s vers la v%s a réussi.',
	'INSTALLER_UPDATE_VERSION'			=> 'Mise à jour du MOD v',
	'INSTALLER_UPDATE_WELCOME'			=> 'Bienvenue dans le menu de mise à jour',

	'INSTALL_MODIFICATION'				=> 'NV advanced last topic titles v%s',
	'LOG_INSTALL_MODIFICATION'			=> 'Le Mod "NV advanced last topic titles" v%s est installé',
	'LOG_UPDATE_MODIFICATION'			=> 'Le Mod "NV advanced last topic titles" a été mis à jour en v%s',

	'WARNING'							=> 'Attention',
));

?>