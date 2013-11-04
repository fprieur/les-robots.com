<?php
App::uses('AppController', 'Controller');
/**
 * TeamStandings Controller
 *
 * @property TeamStanding $TeamStanding
 */
class TeamStandingsController extends AppController {

	public $components = array('RequestHandler');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->TeamStanding->recursive = 0;
		$this->set('teamStandings', $this->paginate());
	}
	
	public function amical() {
		$amical = $this->TeamStanding->find('all', array('conditions' => array(
    								 				'TeamStanding.conference_id = ? OR  TeamStanding.conference_id = ?' => array(7, 8),
													),
													'order' => array(            
														'TeamStanding.total_points' => 'desc',
														'TeamStanding.wins' => 'desc',
														'(TeamStanding.goals_for)-(TeamStanding.goals_against)' => 'desc'       
													)
												   ));
		$this->set(compact('amical'));
	}
	
	public function maison() {
		$maison = $this->TeamStanding->find('all', array('conditions' => array(
    								 			'Team.conference_id = ? OR  Team.conference_id = ?' => array(9, 10),
    											),
												'order' => array(            
														'TeamStanding.total_points' => 'desc',
														'TeamStanding.wins' => 'desc',
														'TeamStanding.goals_for' => 'desc'       
												)
											));
		$this->set(compact('maison'));
	}
	
/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->TeamStanding->id = $id;
		if (!$this->TeamStanding->exists()) {
			throw new NotFoundException(__('Invalid team standing'));
		}
		$this->set('teamStanding', $this->TeamStanding->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TeamStanding->create();
			if ($this->TeamStanding->save($this->request->data)) {
				$this->Session->setFlash(__('The team standing has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The team standing could not be saved. Please, try again.'));
			}
		}
		$teams = $this->TeamStanding->Team->find('list');
		$conferences = $this->TeamStanding->Conference->find('list');
		$this->set(compact('teams', 'conferences'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->TeamStanding->id = $id;
		if (!$this->TeamStanding->exists()) {
			throw new NotFoundException(__('Invalid team standing'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->TeamStanding->save($this->request->data)) {
				$this->Session->setFlash(__('The team standing has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The team standing could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->TeamStanding->read(null, $id);
		}
		$teams = $this->TeamStanding->Team->find('list');
		$conferences = $this->TeamStanding->Conference->find('list');
		$this->set(compact('teams', 'conferences'));
		
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
		$this->TeamStanding->id = $id;
		if (!$this->TeamStanding->exists()) {
			throw new NotFoundException(__('Invalid team standing'));
		}
		if ($this->TeamStanding->delete()) {
			$this->Session->setFlash(__('Team standing deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Team standing was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
