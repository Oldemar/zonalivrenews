<?php
App::uses('AppModel', 'Model');
/**
 * Tag Model
 *
 * @property Classified $Classified
 * @property News $News
 */
class Tag extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Classified' => array(
			'className' => 'Classified',
			'joinTable' => 'classifieds_tags',
			'foreignKey' => 'tag_id',
			'associationForeignKey' => 'classified_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		),
		'News' => array(
			'className' => 'News',
			'joinTable' => 'news_tags',
			'foreignKey' => 'tag_id',
			'associationForeignKey' => 'news_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

}
