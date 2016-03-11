<?php
App::uses('AppModel', 'Model');
App::uses('SimplePasswordHasher', 'Controller/Component/Auth');

/**
 * User Model
 *
 * @property Newsletter $Newsletter
 * @property Profile $Profile
 * @property News $News
 * @property Role $Role
 */
class User extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'username';


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasOne associations
 *
 * @var array
 */
	public $hasOne = array(
		'Newsletter' => array(
			'className' => 'Newsletter',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'News' => array(
			'className' => 'News',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Picture' => array(
			'className' => 'Picture',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);


/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Role' => array(
			'className' => 'Role',
			'joinTable' => 'users_roles',
			'foreignKey' => 'user_id',
			'associationForeignKey' => 'role_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

	public $validate = array(
		'username' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
			),
		),
		'password' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'Entre com uma senha.',
			),
			'matchPasswords' => array(
				'rule' => array('matchPasswords'),
				'message' => 'Senhas diferentes'
			)
		)
	);

	public function matchPasswords($data){
		if ($data['password'] == $this->data['User']['senha']){
			return true;
		}
		return false;
	}

    public function beforeSave($options = array()) {
        if (!empty($this->data[$this->alias]['password'])) {
            $passwordHasher = new SimplePasswordHasher(array('hashType' => 'sha256'));
            $this->data[$this->alias]['password'] = $passwordHasher->hash(
                $this->data[$this->alias]['password']
            );
        }
        if (isset($this->data['User']['Foto'])) {
	        $arrTmpPict = explode('.',$this->data['User']['Foto']['name']);

			$pictureName = md5('P_'.$this->data['User']['username'].'_'.$arrTmpPict[0].'_'.date('Y-m-d H:i:s')).'.'.$arrTmpPict[1];
			$picturePath = $this->webroot.'img/Pictures';
		    if ( $this->data['User']['Foto']['error'] == 0 && is_uploaded_file($this->data['User']['Foto']['tmp_name']) &&
		    		 move_uploaded_file($this->data['User']['Foto']['tmp_name'], "$picturePath/$pictureName" ) ) {
				$this->data['Picture']['name'] = $pictureName;
				$this->data['Picture']['url'] = $picturePath.'/';
				$this->data['Picture']['active'] = true;
		    } else {
		    	return false;
		    }
        }
//	    echo '<pre>'.print_r($this->data,true).'</pre>';
//	    die;
        return true;
    }

    public function afterSave($created, $options= array()){
    }

	/**
	 * Activate the user changing his status to 1
	 */
	public function activate(){
		if($this->getID()){
			$this->data['User']['active']='1';
			$this->saveField('active','1');
			return true;
		}

		return false;

	}

	/**
	 * Returns true if the user is active
	 * Returns false if not
	 */
	public function isActive(){
		if ($this->getAttr('active') == '1')
			return true;
		return false;
	}


}
