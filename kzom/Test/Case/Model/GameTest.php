<?php
/* Game Test cases generated on: 2012-01-19 17:12:01 : 1327011121*/
App::uses('Game', 'Model');

/**
 * Game Test Case
 *
 */
class GameTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.game', 'app.conference', 'app.season', 'app.player', 'app.team', 'app.team_standing', 'app.goalie_stat', 'app.player_bio', 'app.player_stat', 'app.game_summary');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Game = ClassRegistry::init('Game');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Game);

		parent::tearDown();
	}

}
