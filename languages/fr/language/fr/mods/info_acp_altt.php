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

	'ALTT_LASTPOST'			=> 'Dernier titre de post',
	'ALTT_LASTPOST_EXP'		=> 'Si cette option est sur "non", le dernier titre de sujet apparaitra.',

	'ALTT_TITLE'				=> 'NV advanced last topic titles',

	'CREATE_INDEX'						=> 'Create Index',
	'CREATE_INDEX_EXP'					=> 'Creating an index improves the speed of this MOD. Some Users don\'t have the rights to create indexes and would receive an error on the installation. So just turn it off here.',

	'INSTALLER_INTRO'					=> 'Introduction',
	'INSTALLER_INTRO_WELCOME'			=> 'Bienvenue dans l\'installation du MOD',
	'INSTALLER_INTRO_WELCOME_NOTE'		=> 'Choisissez ce que vous voulez faire.',

	'INSTALLER_INSTALL'					=> 'Installation',
	'INSTALLER_INSTALL_MENU'			=> 'Menu d\'installation',
	'INSTALLER_INSTALL_SUCCESSFUL'		=> 'L\'installation du MOD v%s a réussi.',
	'INSTALLER_INSTALL_UNSUCCESSFUL'	=> 'L\'installation du MOD v%s a <strong>échoué</strong>.',
	'INSTALLER_INSTALL_VERSION'			=> 'Installation du MOD v%s',
	'INSTALLER_INSTALL_WELCOME'			=> 'Bienvenue dans le menu d\'installation',
	'INSTALLER_INSTALL_WELCOME_NOTE'	=> 'Quand vous choisissez d\'installer ce  MOD, aucune donnée des précédentes versions ne sera oubliée.',

	'INSTALLER_NEEDS_FOUNDER'			=> 'Vous devez être connecté en tant que fondateur.',

	'INSTALLER_UPDATE'					=> 'Mise à jour',
	'INSTALLER_UPDATE_MENU'				=> 'Menu de la mise à jour',
	'INSTALLER_UPDATE_NOTE'				=> 'Mise à jour du MOD de la v%s vers la v%s',
	'INSTALLER_UPDATE_SUCCESSFUL'		=> 'La mise à jour du MOD de la v%s vers la v%s a réussi.',
	'INSTALLER_UPDATE_UNSUCCESSFUL'		=> 'La mise à jour du MOD de la v%s vers la v%s a <strong>échoué</strong>.',
	'INSTALLER_UPDATE_VERSION'			=> 'Mise à jour du MOD v',
	'INSTALLER_UPDATE_WELCOME'			=> 'Bienvenue dans le menu de mise à jour',

	'WARNING'							=> 'Attention',
));

?>