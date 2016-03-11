<?php
App::uses('AppController', 'Controller');
/**
 * Adimages Controller
 *
 * @property Adimage $Adimage
 * @property PaginatorComponent $Paginator
 */
class AdimagesController extends AppController {

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
	public function index() {
		$this->Adimage->recursive = 0;
		$this->set('adimages', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Adimage->exists($id)) {
			throw new NotFoundException(__('Invalid adimage'));
		}
		$options = array('conditions' => array('Adimage.' . $this->Adimage->primaryKey => $id));
		$this->set('adimage', $this->Adimage->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Adimage->create();
			if ($this->Adimage->save($this->request->data)) {
				$this->Flash->success(__('The adimage has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The adimage could not be saved. Please, try again.'));
			}
		}
		$users = $this->Adimage->User->find('list');
		$ads = $this->Adimage->Ad->find('list');
		$this->set(compact('users', 'ads'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Adimage->exists($id)) {
			throw new NotFoundException(__('Invalid adimage'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Adimage->save($this->request->data)) {
				$this->Flash->success(__('The adimage has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The adimage could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Adimage.' . $this->Adimage->primaryKey => $id));
			$this->request->data = $this->Adimage->find('first', $options);
		}
		$users = $this->Adimage->User->find('list');
		$ads = $this->Adimage->Ad->find('list');
		$this->set(compact('users', 'ads'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Adimage->id = $id;
		if (!$this->Adimage->exists()) {
			throw new NotFoundException(__('Invalid adimage'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Adimage->delete()) {
			$this->Flash->success(__('The adimage has been deleted.'));
		} else {
			$this->Flash->error(__('The adimage could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
