<?php
App::uses('AppController', 'Controller');
/**
 * PlayerPenalties Controller
 *
 * @property PlayerPenalty $PlayerPenalty
 */
class PlayerPenaltiesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->PlayerPenalty->recursive = 0;
		$this->set('playerPenalties', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->PlayerPenalty->id = $id;
		if (!$this->PlayerPenalty->exists()) {
			throw new NotFoundException(__('Invalid player penalty'));
		}
		$this->set('playerPenalty', $this->PlayerPenalty->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PlayerPenalty->create();
			if ($this->PlayerPenalty->save($this->request->data)) {
				$this->Session->setFlash(__('The player penalty has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The player penalty could not be saved. Please, try again.'));
			}
		}
		$players = $this->PlayerPenalty->Player->find('list');
		$this->set(compact('players'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->PlayerPenalty->id = $id;
		if (!$this->PlayerPenalty->exists()) {
			throw new NotFoundException(__('Invalid player penalty'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PlayerPenalty->save($this->request->data)) {
				$this->Session->setFlash(__('The player penalty has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The player penalty could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->PlayerPenalty->read(null, $id);
		}
		$players = $this->PlayerPenalty->Player->find('list');
		$this->set(compact('players'));
	}

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->PlayerPenalty->id = $id;
		if (!$this->PlayerPenalty->exists()) {
			throw new NotFoundException(__('Invalid player penalty'));
		}
		if ($this->PlayerPenalty->delete()) {
			$this->Session->setFlash(__('Player penalty deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Player penalty was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
