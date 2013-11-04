<?php
/* GameSummary Fixture generated on: 2012-01-18 20:26:14 : 1326936374 */

/**
 * GameSummaryFixture
 *
 */
class GameSummaryFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'game_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index', 'collate' => NULL, 'comment' => ''),
		'goal_team_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index', 'collate' => NULL, 'comment' => ''),
		'goal_player_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index', 'collate' => NULL, 'comment' => ''),
		'goal_assist_player_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index', 'collate' => NULL, 'comment' => ''),
		'powerplay_goal' => array('type' => 'integer', 'null' => true, 'default' => '0', 'collate' => NULL, 'comment' => ''),
		'pk_goal' => array('type' => 'integer', 'null' => true, 'default' => '0', 'collate' => NULL, 'comment' => ''),
		'punition_in_min' => array('type' => 'integer', 'null' => true, 'default' => '0', 'collate' => NULL, 'comment' => ''),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'fk_game_id_game_summaries' => array('column' => 'game_id', 'unique' => 0), 'fk_goal_team_id_game_summaries' => array('column' => 'goal_team_id', 'unique' => 0), 'fk_goal_player_id_game_summaries' => array('column' => 'goal_player_id', 'unique' => 0), 'fk_goal_assist_player_id_game_summaries' => array('column' => 'goal_assist_player_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'game_id' => 1,
			'goal_team_id' => 1,
			'goal_player_id' => 1,
			'goal_assist_player_id' => 1,
			'powerplay_goal' => 1,
			'pk_goal' => 1,
			'punition_in_min' => 1
		),
	);
}
