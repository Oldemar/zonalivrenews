<?php
App::uses('AppController', 'Controller');
/**
 * Media Controller
 *
 * @property Media $Media
 * @property PaginatorComponent $Paginator
 */
class MediaController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index($id = null) {
		$this->Media->recursive = 0;
		$arrCond = $id != null ? array('Media.user_id'=>$id) : '';
		$this->set('media', $this->Paginator->paginate($arrCond));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function showmedia($id = null) {
		if (!$this->Media->exists($id)) {
			throw new NotFoundException(__('Invalid media'));
		}
		$options = array('conditions' => array('Media.' . $this->Media->primaryKey => $id));
		$this->set('media', $this->Media->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Media->create();
			if ($this->Media->save($this->request->data)) {
				$this->Session->setFlash(__('The media has been saved.'));
				return $this->redirect(array('action' => 'add'));
			} else {
				$errorMessage = 'O arquivo de mídia não pode ser salvo, tente novamente.';
				if ($this->Media->errorMessage) {
					$errorMessage = $this->Media->errorMessage;
				}
				$this->Session->setFlash(__($errorMessage));
			}
		}
		$users = $this->Media->User->find('list');
		$news = $this->Media->News->find('list');
		$this->set(compact('users', 'news'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Media->exists($id)) {
			throw new NotFoundException(__('Invalid media'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Media->save($this->request->data)) {
				$this->Session->setFlash(__('The media has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The media could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Media.' . $this->Media->primaryKey => $id));
			$this->request->data = $this->Media->find('first', $options);
		}
		$users = $this->Media->User->find('list');
		$news = $this->Media->News->find('list');
		$this->set(compact('users', 'news'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Media->id = $id;
		if (!$this->Media->exists()) {
			throw new NotFoundException(__('Invalid media'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Media->delete()) {
			$this->Session->setFlash(__('The media has been deleted.'));
		} else {
			$this->Session->setFlash(__('The media could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
