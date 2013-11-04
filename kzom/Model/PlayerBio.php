<?php
App::uses('AppModel', 'Model');
/**
 * PlayerBio Model
 *
 * @property Player $Player
 */
class PlayerBio extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'bio';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Player' => array(
			'className' => 'Player',
			'foreignKey' => 'player_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
