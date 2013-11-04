<?php
/* GameSummaries Test cases generated on: 2012-01-18 20:26:39 : 1326936399*/
App::uses('GameSummariesController', 'Controller');

/**
 * TestGameSummariesController *
 */
class TestGameSummariesController extends GameSummariesController {
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
 * GameSummariesController Test Case
 *
 */
class GameSummariesControllerTestCase extends CakeTestCase {
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

		$this->GameSummaries = new TestGameSummariesController();
		$this->GameSummaries->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GameSummaries);

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
