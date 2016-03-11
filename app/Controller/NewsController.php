<?php
App::uses('AppController', 'Controller');
/**
 * News Controller
 *
 * @property News $News
 * @property PaginatorComponent $Paginator
 */
class NewsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * beforeFilter method
 *
 * @return void
 */
    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('catnews','subcatnews','thenews');
    }

/**
 * index method
 *
 * @return void
 */
	public function index($cid = null) {

		$this->News->recursive = 0;
		$arrCond = $cid != null ? array('News.category_id'=>$cid,'News.user_id'=>$this->objLoggedUser->getID()) : '';
		$this->set('news', $this->Paginator->paginate($arrCond));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->News->exists($id)) {
			throw new NotFoundException(__('Invalid news'));
		}
		$options = array('conditions' => array('News.' . $this->News->primaryKey => $id));
		$this->set('news', $this->News->find('first', $options));
	}

/**
 * thenews method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function thenews($id = null) {
		if (!$this->News->exists($id)) {
			/*
			* 		Caso nao exista a noticia pesquisada arbitrar essa noticia engracada
			*/
			$id = 2;
		}
		$options = array('conditions' => array('News.' . $this->News->primaryKey => $id));
		$this->set('thenews', $this->News->find('first', $options));
	}

/**
 * subcatnews method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function subcatnews($cat) {
		$options = array(
			'conditions' => array(
				'News.category_id' => $cat,
				'News.active'=>true,
				'News.revised'=>true
				),
			'order'=>array(
				'News.created'=>'DESC'
				));
		$this->set('subCatLastNews', $this->News->find('first', $options));

		$options = array(
			'conditions' => array(
				'News.category_id' => $cat,
				'News.active'=>true,
				'News.revised'=>true
				),
			'order'=>array(
				'News.created'=>'DESC'
				),
			'limit'=>13,
			'offset'=>1
			);
		$this->set('subCatHotNews', $this->News->find('all', $options));
	}

/**
 * catnews method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function catnews($cat) {

		$childrenIds = Hash::extract($this->Category->children($cat), '{n}.Category.id');
		$childrenIds[]=$cat;
		$options = array(
			'conditions' => array(
				'News.category_id' => $childrenIds,
				'News.active'=>true,
				'News.revised'=>true
				),
			'order'=>array(
				'News.created'=>'DESC'
				));
		$this->set('catLastNews', $this->News->find('first', $options));

		$options = array(
			'conditions' => array(
				'News.category_id' => $childrenIds,
				'News.active'=>true,
				'News.revised'=>true
				),
			'order'=>array(
				'News.created'=>'DESC'
				),
			'limit'=>13,
			'offset'=>1
			);
		$this->set('catHotNews', $this->News->find('all', $options));

	}

/**
 * gallery method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function gallery($id = null) {
		if (!$this->News->exists($id)) {
			/*
			* 		Caso nao exista a noticia pesquisada arbitrar essa noticia engracada
			*/
			$id = 2;
		}
		$options = array('conditions' => array('News.' . $this->News->primaryKey => $id));
		$this->set('gallery', $this->News->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->News->create();
			if ($this->News->save($this->request->data)) {
				$this->Session->setFlash(__('The news has been saved.'));
				$cid = $canPostOpinion ? '33' : '';
				return $this->redirect(array('controller'=>'media','action' => 'add'));
			} else {
				$errorMsg = 'Materia nao pode ser salva...';
				if ($this->News->errorMessage){
					$errorMsg = $this->News->errorMessage;
				}
				$this->Session->setFlash(__($errorMsg));
			}
		}

		$users = $this->News->User->find('list');
		$categoryIds = $this->News->Category->children('31',false);
		$catIds = Hash::extract($categoryIds, '{n}.Category.id');
		$catIds[] = '31';
		$catIds[] = '1';

		$categories = $this->News->Category->find('list',array(
			'conditions'=>array(
				'Category.id !='=> $catIds
				)));
		$media = $this->News->Media->find('list',array(
			'conditions'=>array(
				'Media.user_id'=>$this->objLoggedUser->getID(),
				'Media.share'=>true)));
		$this->set(compact('users', 'categories', 'media'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->News->exists($id)) {
			throw new NotFoundException(__('Invalid news'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->News->save($this->request->data)) {
				$this->Session->setFlash(__('The news has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The news could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('News.' . $this->News->primaryKey => $id));
			$this->request->data = $this->News->find('first', $options);
		}
		$users = $this->News->User->find('list');
		$categories = $this->News->Category->find('list');
		$media = $this->News->Media->find('list');
		$this->set(compact('users', 'categories', 'media'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->News->id = $id;
		if (!$this->News->exists()) {
			throw new NotFoundException(__('Invalid news'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->News->delete()) {
			$this->Session->setFlash(__('The news has been deleted.'));
		} else {
			$this->Session->setFlash(__('The news could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

}
