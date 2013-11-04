<?php
App::uses('AppController', 'Controller');
/**
 * PlayerPlayedGames Controller
 *
 * @property PlayerPlayedGame $PlayerPlayedGame
 */
class PlayerPlayedGamesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->PlayerPlayedGame->recursive = 0;
		$this->set('playerPlayedGames', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->PlayerPlayedGame->id = $id;
		if (!$this->PlayerPlayedGame->exists()) {
			throw new NotFoundException(__('Invalid player played game'));
		}
		$this->set('playerPlayedGame', $this->PlayerPlayedGame->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PlayerPlayedGame->create();
			if ($this->PlayerPlayedGame->save($this->request->data)) {
				$this->Session->setFlash(__('The player played game has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The player played game could not be saved. Please, try again.'));
			}
		}
		$players = $this->PlayerPlayedGame->Player->find('list');
		$games = $this->PlayerPlayedGame->Game->find('list');
		$this->set(compact('players', 'games'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->PlayerPlayedGame->id = $id;
		if (!$this->PlayerPlayedGame->exists()) {
			throw new NotFoundException(__('Invalid player played game'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PlayerPlayedGame->save($this->request->data)) {
				$this->Session->setFlash(__('The player played game has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The player played game could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->PlayerPlayedGame->read(null, $id);
		}
		$players = $this->PlayerPlayedGame->Player->find('list');
		$games = $this->PlayerPlayedGame->Game->find('list');
		$this->set(compact('players', 'games'));
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
		$this->PlayerPlayedGame->id = $id;
		if (!$this->PlayerPlayedGame->exists()) {
			throw new NotFoundException(__('Invalid player played game'));
		}
		if ($this->PlayerPlayedGame->delete()) {
			$this->Session->setFlash(__('Player played game deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Player played game was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
