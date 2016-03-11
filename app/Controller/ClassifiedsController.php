<?php
App::uses('AppController', 'Controller');
/**
 * Classifieds Controller
 *
 * @property Classified $Classified
 * @property PaginatorComponent $Paginator
 */
class ClassifiedsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator','RequestHandler');
	public $helpers = array('Js');
/**
 * beforeFilter method
 *
 * @return void
 */
    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('index','view','listads','listclassifiedsajax');
    }

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Classified->recursive = 0;
		$this->set('classifieds', $this->Paginator->paginate());
	}

/**
 * listads method
 *
 * @return void
 */
	public function listads() {
		$categoryIds = $this->Classified->Category->children('31',false);
		$categoryIds = Hash::extract($categoryIds, '{n}.Category.id');
		$conditions['Category.id'] = $categoryIds;
		$categs = $this->Classified->Category->find('threaded',array(
			'contain'=>array(
				'ChildCategory'
				),
			'conditions'=> $conditions,
			'order'=>array(
				'Category.id'=>'ASC')));

		$catOptions = array();
		$classifieds = $this->Classified->find('threaded', array(
			'conditions'=>array(
				'Classified.category_id'=>$categoryIds,
				),
			'order'=>array(
				'Classified.featured'=>'DESC',
				'Classified.created'=>'DESC'
				)));
		foreach ($categs as $key => $parent) {
			if ($parent['Category']['parent_id'] == '31'){				
				$catOptions[$parent['Category']['id']] = $parent['Category']['name'];
				if (count($parent['children']) > 0) {
					foreach ($parent['children'] as $keyChild => $child) {
						$catOptions[$child['Category']['id']] = '... '.$child['Category']['name'];
						if (count($child['children'] > 0)) {
							foreach ($child['children'] as $keyChild => $grandChild) {
								$catOptions[$grandChild['Category']['id']] = '> > '.$grandChild['Category']['name'];
							}
						}
					}
				}
			}
		}
		
		$this->set('classifieds', $classifieds);
		$this->set('catOptions', $catOptions);
		$this->set('categs', $categs);
	}

/**
 * listclassifieds ajax method
 *
 * @throws NotFoundException
 * @param string $id
 * @return json
 */

	public function listclassifiedsajax(){

		$this->autoRender = false;
		$this->layout = 'ajax';
		$cid = $this->data['id'];
		$categoryIds = $this->Classified->Category->children($cid,$cid=='31'?false:true);
		$categoryIds = Hash::extract($categoryIds, '{n}.Category.id');
		$categoryIds[] = $cid;
		$classifieds = $this->Classified->find('threaded', array(
			'conditions'=>array(
				'Classified.category_id'=>$categoryIds,
				),
			'order'=>array(
				'Classified.featured'=>'DESC',
				'Classified.created'=>'DESC'
				),
			'limit'=>$this->data['limit'],
			'offset'=>$this->data['offset']));
		$tmpElement['html'] = $this->element('Classifieds/classifiedlist', array('classifieds'=>$classifieds));
		$tmpElement['data'] = $classifieds;
		echo json_encode($tmpElement);
		exit;
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Classified->exists($id)) {
			throw new NotFoundException(__('Invalid classified'));
		}
		$options = array('conditions' => array('Classified.' . $this->Classified->primaryKey => $id));
		$this->set('classified', $this->Classified->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$categoryIds = $this->Classified->Category->children('31',false);
		$categoryIds = Hash::extract($categoryIds, '{n}.Category.id');
		$conditions['Category.id'] = $categoryIds;
		$categs = $this->Classified->Category->find('threaded',array(
			'contain'=>array(
				'ChildCategory'
				),
			'conditions'=> $conditions,
			'order'=>array(
				'Category.name'=>'ASC')));

		if ($this->request->is('post')) {
			$this->Classified->create();
			if ($this->Classified->save($this->request->data)) {
//				$this->Flash->success(__('The classified has been saved.'));
				return $this->redirect(array('action' => 'listads'));
			} else {
				$this->Flash->error(__('The classified could not be saved. Please, try again.'));
			}
		}

		foreach ($categs as $key => $parent) {
			if ($parent['Category']['parent_id'] == '31') {
				if ( count($parent['children']) > 0 ) {
					$categories[$parent['Category']['name']] = array();
					foreach ($parent['children'] as $keyChild => $child) {
						if ( count($child['children']) > 0 ) {
							$categories[ $parent[ 'Category' ][ 'name' ] ][ $child[ 'Category' ][ 'name' ] ] = array();
							foreach ($child['children'] as $keyGrandChild => $grandchild) {
								$categories[ $parent[ 'Category' ][ 'name' ] ][ $child[ 'Category' ][ 'name' ] ][ $grandchild[ 'Category' ] [ 'id' ] ] = $grandchild[ 'Category' ] [ 'name' ];
														}
						} else {
							$categories[ $parent[ 'Category' ][ 'name' ] ][ $child[ 'Category' ][ 'id' ] ] = $child['Category']['name'];
						}
					}
				} else {
					$categories[ $parent[ 'Category' ][ 'id' ] ] = $parent[ 'Category' ][ 'name' ];
				}
			}
		}
		$users = $this->Classified->User->find('list');
		$adimages = $this->Classified->Adimages->find('list');
		$tags = $this->Classified->Tag->find('list');
		$this->set(compact('users', 'categories', 'brands', 'adimages', 'tags'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Classified->exists($id)) {
			throw new NotFoundException(__('Invalid classified'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Classified->save($this->request->data)) {
				$this->Flash->success(__('The classified has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The classified could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Classified.' . $this->Classified->primaryKey => $id));
			$this->request->data = $this->Classified->find('first', $options);
		}
		$users = $this->Classified->User->find('list');
		$categories = $this->Classified->Category->find('list');
		$brands = $this->Classified->Brand->find('list');
		$adimages = $this->Classified->Adimage->find('list');
		$tags = $this->Classified->Tag->find('list');
		$this->set(compact('users', 'categories', 'brands', 'adimages', 'tags'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Classified->id = $id;
		if (!$this->Classified->exists()) {
			throw new NotFoundException(__('Invalid classified'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Classified->delete()) {
			$this->Flash->success(__('The classified has been deleted.'));
		} else {
			$this->Flash->error(__('The classified could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
