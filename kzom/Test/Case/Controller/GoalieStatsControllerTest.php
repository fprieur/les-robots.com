<?php
/* GoalieStats Test cases generated on: 2012-02-07 12:49:47 : 1328636987*/
App::uses('GoalieStatsController', 'Controller');

/**
 * TestGoalieStatsController *
 */
class TestGoalieStatsController extends GoalieStatsController {
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
 * GoalieStatsController Test Case
 *
 */
class GoalieStatsControllerTestCase extends CakeTestCase {
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

		$this->GoalieStats = new TestGoalieStatsController();
		$this->GoalieStats->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GoalieStats);

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
