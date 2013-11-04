<?php
/* GameSummary Test cases generated on: 2012-01-18 20:26:16 : 1326936376*/
App::uses('GameSummary', 'Model');

/**
 * GameSummary Test Case
 *
 */
class GameSummaryTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.game_summary', 'app.game', 'app.conference', 'app.season', 'app.player', 'app.team', 'app.team_standing', 'app.goalie_stat', 'app.player_bio', 'app.player_stat');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->GameSummary = ClassRegistry::init('GameSummary');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GameSummary);

		parent::tearDown();
	}

}
