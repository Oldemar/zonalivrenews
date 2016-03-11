<?php
App::uses('AppModel', 'Model');
/**
 * Adimage Model
 *
 * @property User $User
 * @property Ad $Ad
 */
class Adimage extends AppModel {


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Ad' => array(
			'className' => 'Ad',
			'foreignKey' => 'ad_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Classified' => array(
			'className' => 'Classified',
			'foreignKey' => 'classified_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
