<?php
/* TeamStanding Test cases generated on: 2012-01-19 14:02:45 : 1326999765*/
App::uses('TeamStanding', 'Model');

/**
 * TeamStanding Test Case
 *
 */
class TeamStandingTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.team_standing', 'app.team', 'app.conference', 'app.season', 'app.game', 'app.game_summary', 'app.player', 'app.goalie_stat', 'app.player_bio', 'app.player_stat');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->TeamStanding = ClassRegistry::init('TeamStanding');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TeamStanding);

		parent::tearDown();
	}

}
