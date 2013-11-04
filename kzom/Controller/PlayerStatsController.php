<?php
App::uses('AppController', 'Controller');
/**
 * PlayerStats Controller
 *
 * @property PlayerStat $PlayerStat
 */
class PlayerStatsController extends AppController {

	public $components = array('RequestHandler');
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->PlayerStat->recursive = 0;
		$this->set('playerStats', $this->paginate());
	}
	
	public function indexjson(){
		$playerStats = $this->PlayerStat->find('all');
		$this->set('playerStat', $playerStats);
	}
	

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->PlayerStat->id = $id;
		if (!$this->PlayerStat->exists()) {
			throw new NotFoundException(__('Invalid player stat'));
		}
		$this->set('playerStat', $this->PlayerStat->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PlayerStat->create();
			if ($this->PlayerStat->save($this->request->data)) {
				$this->Session->setFlash(__('The player stat has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The player stat could not be saved. Please, try again.'));
			}
		}
		$players = $this->PlayerStat->Player->find('list');
		$this->set(compact('players'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->PlayerStat->id = $id;
		if (!$this->PlayerStat->exists()) {
			throw new NotFoundException(__('Invalid player stat'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PlayerStat->save($this->request->data)) {
				$this->Session->setFlash(__('The player stat has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The player stat could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->PlayerStat->read(null, $id);
		}
		$players = $this->PlayerStat->Player->find('list');
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
		$this->PlayerStat->id = $id;
		if (!$this->PlayerStat->exists()) {
			throw new NotFoundException(__('Invalid player stat'));
		}
		if ($this->PlayerStat->delete()) {
			$this->Session->setFlash(__('Player stat deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Player stat was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
