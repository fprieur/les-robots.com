<?php
App::uses('AppController', 'Controller');
/**
 * GameSummaries Controller
 *
 * @property GameSummary $GameSummary
 */
class PlayerGameSummariesController extends AppController {

	public $components = array('RequestHandler');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->paginate = array(
			'order' => 'PlayerGameSummary.game_id DESC, PlayerGameSummary.goal_period DESC,  PlayerGameSummary.goal_time DESC');
		$this->set('playerGameSummaries', $this->paginate());
	}
	
	public function allstats() {
		$playerGameSummaries = $this->PlayerGameSummary->find('all');
		$this->set(compact('playerGameSummaries'));
	}
	

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->PlayerGameSummary->id = $id;
		if (!$this->PlayerGameSummary->exists()) {
			throw new NotFoundException(__('Invalid game summary'));
		}
		$this->set('playerGameSummary', $this->PlayerGameSummary->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PlayerGameSummary->create();
			if ($this->PlayerGameSummary->save($this->request->data)) {
				$this->Session->setFlash(__('The player game summary has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The game summary could not be saved. Please, try again.'));
			}
		}
		$games = $this->PlayerGameSummary->Game->find('list');
		$teams = $this->PlayerGameSummary->Team->find('list');
		$goalPlayers = $this->PlayerGameSummary->GoalPlayer->find('list');
		$assistPlayers = $this->PlayerGameSummary->AssistPlayer->find('list');
		$this->set(compact('games', 'teams', 'goalPlayers', 'assistPlayers'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->PlayerGameSummary->id = $id;
		if (!$this->PlayerGameSummary->exists()) {
			throw new NotFoundException(__('Invalid game summary'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PlayerGameSummary->save($this->request->data)) {
				$this->Session->setFlash(__('The player game summary has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The player game summary could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->PlayerGameSummary->read(null, $id);
		}
		$games = $this->PlayerGameSummary->Game->find('list');
		$teams = $this->PlayerGameSummary->Team->find('list');
		$goalPlayers = $this->PlayerGameSummary->GoalPlayer->find('list');
		$assistPlayers = $this->PlayerGameSummary->AssistPlayer->find('list');
		$this->set(compact('games', 'teams', 'goalPlayers', 'assistPlayers'));
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->PlayerGameSummary->id = $id;
		if (!$this->PlayerGameSummary->exists()) {
			throw new NotFoundException(__('Invalid game summary'));
		}
		if ($this->PlayerGameSummary->delete()) {
			$this->Session->setFlash(__('Game summary deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Game summary was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
