<?php
/* GoalieStat Test cases generated on: 2012-02-07 12:49:29 : 1328636969*/
App::uses('GoalieStat', 'Model');

/**
 * GoalieStat Test Case
 *
 */
class GoalieStatTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.goalie_stat', 'app.player', 'app.season', 'app.conference', 'app.game', 'app.team', 'app.team_standing', 'app.player_game_summary', 'app.player_bio');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->GoalieStat = ClassRegistry::init('GoalieStat');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GoalieStat);

		parent::tearDown();
	}

}
