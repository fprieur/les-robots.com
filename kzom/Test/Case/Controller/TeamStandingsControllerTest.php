<?php
/* TeamStandings Test cases generated on: 2012-01-19 14:03:11 : 1326999791*/
App::uses('TeamStandingsController', 'Controller');

/**
 * TestTeamStandingsController *
 */
class TestTeamStandingsController extends TeamStandingsController {
/**
 * Auto render
 *
 * @var boolean
 */
	public $autoRender = false;

/**
 * Redirect action
 *
 * @param mixed $url
 * @param mixed $status
 * @param boolean $exit
 * @return void
 */
	public function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

/**
 * TeamStandingsController Test Case
 *
 */
class TeamStandingsControllerTestCase extends CakeTestCase {
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

		$this->TeamStandings = new TestTeamStandingsController();
		$this->TeamStandings->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TeamStandings);

		parent::tearDown();
	}

/**
 * testIndex method
 *
 * @return void
 */
	public function testIndex() {

	}

/**
 * testView method
 *
 * @return void
 */
	public function testView() {

	}

/**
 * testAdd method
 *
 * @return void
 */
	public function testAdd() {

	}

/**
 * testEdit method
 *
 * @return void
 */
	public function testEdit() {

	}

/**
 * testDelete method
 *
 * @return void
 */
	public function testDelete() {

	}

}
