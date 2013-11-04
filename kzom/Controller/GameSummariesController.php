<?php
App::uses('AppController', 'Controller');
/**
 * GameSummaries Controller
 *
 * @property GameSummary $GameSummary
 */
class GameSummariesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->GameSummary->recursive = 0;
		$this->set('gameSummaries', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->GameSummary->id = $id;
		if (!$this->GameSummary->exists()) {
			throw new NotFoundException(__('Invalid game summary'));
		}
		$this->set('gameSummary', $this->GameSummary->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->GameSummary->create();
			if ($this->GameSummary->save($this->request->data)) {
				$this->Session->setFlash(__('The game summary has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The game summary could not be saved. Please, try again.'));
			}
		}
		$games = $this->GameSummary->Game->find('list');
		$this->set(compact('games'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->GameSummary->id = $id;
		if (!$this->GameSummary->exists()) {
			throw new NotFoundException(__('Invalid game summary'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->GameSummary->save($this->request->data)) {
				$this->Session->setFlash(__('The game summary has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The game summary could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->GameSummary->read(null, $id);
		}
		$games = $this->GameSummary->Game->find('list');
		$this->set(compact('games'));
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
		$this->GameSummary->id = $id;
		if (!$this->GameSummary->exists()) {
			throw new NotFoundException(__('Invalid game summary'));
		}
		if ($this->GameSummary->delete()) {
			$this->Session->setFlash(__('Game summary deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Game summary was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
