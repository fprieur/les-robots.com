<?php
App::uses('AppController', 'Controller');
/**
 * PlayerBios Controller
 *
 * @property PlayerBio $PlayerBio
 */
class PlayerBiosController extends AppController {
	
	public $components = array('RequestHandler');
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->PlayerBio->recursive = 0;
		$this->set('playerBios', $this->paginate());
	}
	
	public function indexjson(){
		$playersBios = $this->Team->find('all');
		$this->set('playerBios', $playersBios);
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->PlayerBio->id = $id;
		if (!$this->PlayerBio->exists()) {
			throw new NotFoundException(__('Invalid player bio'));
		}
		$this->set('playerBio', $this->PlayerBio->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PlayerBio->create();
			if ($this->PlayerBio->save($this->request->data)) {
				$this->Session->setFlash(__('The player bio has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The player bio could not be saved. Please, try again.'));
			}
		}
		$players = $this->PlayerBio->Player->find('list');
		$this->set(compact('players'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->PlayerBio->id = $id;
		if (!$this->PlayerBio->exists()) {
			throw new NotFoundException(__('Invalid player bio'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PlayerBio->save($this->request->data)) {
				$this->Session->setFlash(__('The player bio has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The player bio could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->PlayerBio->read(null, $id);
		}
		$players = $this->PlayerBio->Player->find('list');
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
		$this->PlayerBio->id = $id;
		if (!$this->PlayerBio->exists()) {
			throw new NotFoundException(__('Invalid player bio'));
		}
		if ($this->PlayerBio->delete()) {
			$this->Session->setFlash(__('Player bio deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Player bio was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
