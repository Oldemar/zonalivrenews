<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');
App::uses('CakeTime', 'Utility');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

	public $helpers = array(
		'Js', 
		'Html', 
		'Form2', 
		'Session'
	);

	public $components = array(
		'RequestHandler',
		'Session',
	    'Auth' => array(
	        'loginAction' => array(
	            'controller' => 'users',
	            'action' => 'login'
	        ),
	        'authError' => 'Incorrect username/password(1).',
	        'authenticate' => array(
	            'Form' => array(
	                'passwordHasher' => array(
	                    'className' => 'Simple',
	                    'hashType' => 'sha256'
	                ),
	                'fields' => array(
	                	'username' => 'username', //Default is 'username' in the userModel
	                	'password' => 'password'  //Default is 'password' in the userModel
	                )
	            )
	        )
    	)
 	);

	public $objLoggedUser = null;
	public $myPreferences = null;
	public $isMobile = null;
	public $isAdmin;
	public $logged_in = null;
	public $lastNews = null;
	public $classifiedTree = null;
	public $categoryTree = null;
	public $errorMsg = null;


/**
*
*	beforeRender
*
**/	
	public function beforeRender() {
	    $this->layout = ($this->request->is("ajax")) ? "ajax" : "default";
	}

/**
*
*	beforefilter
*
**/	
    public function beforeFilter() {

		if($this->Auth->user('id')){
			$this->loadModel('User');
			$this->loadModel('Preference');
			$this->objLoggedUser = $this->User->findById($this->Auth->user('id'));
		}
		/*
		 * Auth component initial setup
		 */	
		$this->Auth->Allow(array('display')); //This is used to allow users to navigate into the main index page of the site without loggin in.
		
		$this->set('logged_in', $this->_loggedIn());
		$this->set('username', $this->_username());
		$this->set('isAdmin', $this->isAdmin());
		$this->set('isDirMan', $this->isDirMan());
		$this->set('canPostNews', $this->canPostNews());
		$this->set('canPostOpinion', $this->canPostOpinion());
		$this->set('isMobile', $this->_isMobile());
		$this->set('today', $this->_today());
		$this->set('lastNews', $this->lastNews());
		$this->set('dontmiss', $this->dontmiss());
		$this->set('vertads', $this->vertads());
		$this->set('horizads', $this->horizads());
		$this->set('hotNews', $this->hotNews());
		$this->set('sponsored', $this->sponsored());
		$this->set('opinions', $this->opinions());
		$this->set('majorCat', $this->majorCat());
		$this->set('noads', $this->_noads());
		$this->set('classifiedTree', $this->_genMyTree('31'));
		$this->set('categoryTree', $this->_genMyTree('1'));
		$this->set('objLoggedUser', $this->objLoggedUser);
		
    }

	/**
	* This function return true if user is Admin 
	**/
	public function isAdmin() {
	    // Admin and Developers can access every action
		$this->loadModel('UsersRole');
	    if ( $this->UsersRole->find('first', array('conditions'=>array('UsersRole.user_id'=>$this->Auth->user('id'),'UsersRole.role_id'=>'1')))) {
		        return true;
	    }

	    // Default deny
	    return false;
	}

	/**
	* This function return true if user is Director or Magage 
	**/
	public function isDirMan() {
	    // Admin and Developers can access every action
		$this->loadModel('UsersRole');
	    if ( $this->UsersRole->find('first', array('conditions'=>array('UsersRole.user_id'=>$this->Auth->user('id'),'UsersRole.role_id'=>array('2','3')))) ) {
		        return true;
	    }

	    // Default deny
	    return false;
	}

	/**
	* This function return true if user is authorized to Post News
	**/
	public function canPostNews() {
	    // Admin and Developers can access every action
		$this->loadModel('UsersRole');
	    if ( $this->UsersRole->find('first', array('conditions'=>array('UsersRole.user_id'=>$this->Auth->user('id'),'UsersRole.role_id'=>array('4,','5','6'))))) {
		        return true;
	    }

	    // Default deny
	    return false;
	}

	/**
	* This function return true if user is authorized to Post News
	**/
	public function canPostOpinion() {
	    // Admin and Developers can access every action
		$this->loadModel('UsersRole');
	    if ( $this->UsersRole->find('first', array('conditions'=>array('UsersRole.user_id'=>$this->Auth->user('id'),'UsersRole.role_id'=>array('7'))))) {
		        return true;
	    }

	    // Default deny
	    return false;
	}

	/**
	* This function return true if it is a mobile devive
	**/
	public function _isMobile() {
	    // Return true if is a Mobile device
		if ($this->RequestHandler->isMobile()) {
		    return true;
	    }

	    // Default deny
	    return false;
	}

	/**
	* This function return today's date
	**/
	public function _today() {
	    return date("Y-m-d H:i:s");
	}

	/**
	* This function return if there is a user logged in
	**/
	public function _loggedIn(){
		return ($this->Auth->user() ? true : false);
	}
	
	/**
	* This function return the username logged in
	**/
	function _username() {
		$username = null;
		if($this->Auth->user()) {
			$username = $this->Auth->user('username');
		}
		return $username;
		
	}

	/**
	* This function does the same thing as the View::element and return the rendered element.
	* This is useful when you need the html of an element in a controller
	**/
	public function element($name, $data = array(), $options = array()){
		$tmpView = new View();
		$tmpView->helpers = $this->helpers;
		$tmpView->loadHelpers();
		$data['objRequest'] =& $this->request;
		$data['objController'] =& $this;
		$return = $tmpView->element($name, $data, $options);
		unset($tmpView);
		return $return;
	}

	public function hasRole($userID, $roleID) {
		$this->loadModel('UsersRole');
	    if ( $this->UsersRole->find('first', array('conditions'=>array('UsersRole.user_id'=>$userID,'UsersRole.role_id'=>$roleID)))) {
		        return true;
	    }

	    // Default deny
	    return false;

	}

	public function _noads() {
		$tmp = null;
		if($this->Auth->user()) 
			$tmp = $this->objLoggedUser->getAttr('noads');
		return $tmp;
	}

	public function _genMyTree($id = null) {
		$tmp = null;
		$this->LoadModel('Category');
		$this->Category->recursive = 1;
//		$classifieds = $this->Category->generateTreeList(null,null,null,' ');
		$classifieds = $this->Category->children($id,false);
		return $tmp;
	}

	public function lastNews() {

		$this->loadModel('News');
		$tmp = $this->News->find('first', array(
			'conditions'=>array(
				'News.active'=>true,
				'News.revised'=>true,
				'News.category_id !='=>array(
					'30','33')),
			'order'=>array(
				'News.created'=>'DESC'
			)));
		return $tmp;
	}

	public function hotNews() {

		$this->loadModel('News');
		$tmp = $this->News->find('all', array(
			'conditions'=>array(
				'News.active'=>true,
				'News.revised'=>true,
				'News.category_id !='=>array(
					'30','33')),
			'order'=>array(
				'News.created'=>'DESC'),
			'limit'=>13,
			'offset'=>1));
		return $tmp;
	}

	public function dontmiss() {

		$this->loadModel('News');
		$tmp = $this->News->find('all', array(
			'conditions'=>array(
				'News.active'=>true,
				'News.revised'=>true,
				'News.category_id !='=>array(
					'30','33')),
			'order'=>array(
				'News.created'=>'DESC'),
			'limit'=>25,
			'offset'=>14));
		return $tmp;
	}

	public function sponsored() {

		$this->loadModel('News');
		$tmp = $this->News->find('all', array(
			'conditions'=>array(
				'News.active'=>true,
				'News.revised'=>true,
				'News.category_id'=>'30'),
			'order'=>array(
				'News.created'=>'DESC'),
			'limit'=>3
			));
		return $tmp;
	}

	public function opinions() {

		$this->loadModel('News');
		$tmp = $this->News->find('all', array(
			'conditions'=>array(
				'News.active'=>true,
				'News.revised'=>true,
				'News.category_id'=>'33'),
			'order'=>array(
				'News.created'=>'DESC'),
			'limit'=>6
			));
		return $tmp;
	}

	public function vertads($cid = null) {

		$this->loadModel('Ads');
		$conditions = $cid == null 
			? array('Ads.active'=>true, 'Ads.orientation'=>1) 
			: array('Ads.active'=>true, 'Ads.orientation'=>1,'Ads.category_id'=>$cid);
		$tmp = $this->Ads->find('all', array(
			'conditions'=>$conditions,
			'order'=>array(
				'Ads.priority'=>'ASC'
			)));
		return $tmp;
	}

	public function horizads($cid = null) {

		$this->loadModel('Ads');
		$conditions = $cid == null 
			? array('Ads.active'=>true, 'Ads.orientation'=>0) 
			: array('Ads.active'=>true, 'Ads.orientation'=>0,'Ads.category_id'=>$cid);
		$tmp = $this->Ads->find('all', array(
			'conditions'=>$conditions,
			'order'=>array(
				'Ads.priority'=>'ASC'
			)));
		return $tmp;
	}

	public function majorCat() {
		$this->loadModel('Category');
		return $this->Category->children(1, true);

	}

}
