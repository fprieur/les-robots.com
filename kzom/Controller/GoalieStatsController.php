<?php
App::uses('AppController', 'Controller');
/**
 * GoalieStats Controller
 *
 * @property GoalieStat $GoalieStat
 */
class GoalieStatsController extends AppController {

	public $components = array('RequestHandler');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->GoalieStat->recursive = 0;
		$this->set('goalieStats', $this->paginate());
	}
	
	public function allstats() {
		$goalieStats = $this->GoalieStat->find('all',array(
			'order' => ('(GoalieStat.wins + GoalieStat.wins_shootout) DESC, GoalieStat.wins DESC, GoalieStat.efficacity_percentage DESC, GoalieStat.average DESC'),
		));
		$this->set(compact('goalieStats'));
	}
	

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->GoalieStat->id = $id;
		if (!$this->GoalieStat->exists()) {
			throw new NotFoundException(__('Invalid goalie stat'));
		}
		$this->set('goalieStat', $this->GoalieStat->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->GoalieStat->create();
			if ($this->GoalieStat->save($this->request->data)) {
				$this->Session->setFlash(__('The goalie stat has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The goalie stat could not be saved. Please, try again.'));
			}
		}
		$players = $this->GoalieStat->Player->find('list', array(
			'conditions' => ('Player.position = "g"'),
		));
		$this->set(compact('players'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->GoalieStat->id = $id;
		if (!$this->GoalieStat->exists()) {
			throw new NotFoundException(__('Invalid goalie stat'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->GoalieStat->save($this->request->data)) {
				$this->Session->setFlash(__('The goalie stat has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The goalie stat could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->GoalieStat->read(null, $id);
		}
		$players = $this->GoalieStat->Player->find('list');
		$this->set(compact('players'));
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
		$this->GoalieStat->id = $id;
		if (!$this->GoalieStat->exists()) {
			throw new NotFoundException(__('Invalid goalie stat'));
		}
		if ($this->GoalieStat->delete()) {
			$this->Session->setFlash(__('Goalie stat deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Goalie stat was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
