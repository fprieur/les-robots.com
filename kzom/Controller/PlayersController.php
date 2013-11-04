<?php
App::uses('AppController', 'Controller');
/**
 * Players Controller
 *
 * @property Player $Player
 */
class PlayersController extends AppController {

	public $components = array('RequestHandler');

/**
 * index method
 *
 * @return void
 */
	public function index() {
				$this->Player->recursive = 0;
				$this->set('players', $this->paginate());
			}
			
	public function indexjson(){
		$players = $this->Player->find('all');
		$this->set('players', $players);
	}
	
	public function allplayers() {
		$players = $this->Player->find('all');
		$this->set(compact('players'));
	}

	public function automne2012() {
		//$conditions = array("Player.season_id" => 3);
		$this->paginate = array(        
			'conditions' => array('Player.season_id' => 3),        
			'limit' => 200,
			'order' => array(            
				'Player.season_id' => 'asc'        
			)    
		);
		//$players = $this->Player->find('all', array(
		//	'conditions' => $conditions));
		$players = $this->paginate('Player');
		$this->set(compact('players'));
	}		
/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Player->id = $id;
		if (!$this->Player->exists()) {
			throw new NotFoundException(__('Invalid player'));
		}
		$this->set('player', $this->Player->read(null, $id));	
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Player->create();
			if ($this->Player->save($this->request->data)) {
				$this->Session->setFlash(__('The player has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The player could not be saved. Please, try again.'));
			}
		}
		$seasons = $this->Player->Season->find('list');
		$teams = $this->Player->Team->find('list');
		$this->set(compact('seasons', 'teams'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Player->id = $id;
		if (!$this->Player->exists()) {
			throw new NotFoundException(__('Invalid player'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Player->save($this->request->data)) {
				$this->Session->setFlash(__('The player has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The player could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Player->read(null, $id);
		}
		$seasons = $this->Player->Season->find('list');
		$teams = $this->Player->Team->find('list');
		$this->set(compact('seasons', 'teams'));
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
		$this->Player->id = $id;
		if (!$this->Player->exists()) {
			throw new NotFoundException(__('Invalid player'));
		}
		if ($this->Player->delete()) {
			$this->Session->setFlash(__('Player deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Player was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
