<?php
/**
*
* @package NV Advanced Last Topic Titles
* @copyright (c) 2012 nickvergessen <nickvergessen@gmx.de> http://www.flying-bits.org/
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

class phpbb_ext_nickvergessen_advancedlasttopictitles_event_advancedlasttopictitles_subscriber implements phpbb_event_subscriber_interface
{
	static public function get_subscribed_events()
	{
		return array(
			'core.display_forums_assign_block_vars'		=> 'display_forums_assign_block_vars',
			'core.display_forums_row_inject'			=> 'display_forums_row_inject',
			'core.display_forums_row_values_inject'		=> 'display_forums_row_values_inject',
			'core.display_forums_sql_inject'			=> 'display_forums_sql_inject',
		);
	}

	public function display_forums_sql_inject($event)
	{
		phpbb_ext_nickvergessen_advancedlasttopictitles::initialise();
		$event['sql_ary'] = phpbb_ext_nickvergessen_advancedlasttopictitles::inject_sql($event['sql_ary']);
	}

	public function display_forums_row_inject($event)
	{
		$event['row'] = phpbb_ext_nickvergessen_advancedlasttopictitles::inject_forum_row($event['row']);
	}

	public function display_forums_row_values_inject($event)
	{
		$event['forum_rows'] = phpbb_ext_nickvergessen_advancedlasttopictitles::inject_forum_row_values($event['forum_rows'], $event['parent_id'], $event['row']);
	}

	public function display_forums_assign_block_vars($event)
	{
		phpbb_ext_nickvergessen_advancedlasttopictitles::display_information($event['row']);
	}
}
