<?php
App::uses('AppModel', 'Model');
/**
 * Media Model
 *
 * @property User $User
 * @property News $News
 */
class Media extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'medias';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'title';


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
		)
	);

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'News' => array(
			'className' => 'News',
			'joinTable' => 'news_medias',
			'foreignKey' => 'media_id',
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

	public function beforeSave( $options = array() ) {

		if ($this->data['Media']['File']['error'] != 0) {
			$this->errorMessage = 'Falha no upload('.$this->data['Media']['File']['error'].'), tente novamente...';
			return false;
		}

		$arrMediaType = explode('/',$this->data['Media']['File']['type']);
		
		if ($arrMediaType[0] == 'image') {
			$mediatype = '0';
		} elseif ($arrMediaType[0] == 'video') {
			$mediatype = '1';
		} elseif ($arrMediaType[0] == 'audio') {
			$mediatype = '2';
		} else {
			$this->errorMessage = 'Somente imagens,videos ou audios, tente novamente...';
			return false;
		}

		$fileName = md5($this->data['Media']['File']['name'].date('Y-m-d-H:i:s')).'.'.$arrMediaType[1];
		$this->data['Media']['mediatype'] = $mediatype;
		$this->data['Media']['source'] = $fileName;

		move_uploaded_file($this->data['Media']['File']['tmp_name'], $this->webroot.'img/'.$fileName);
		
		return true;
	}

}

