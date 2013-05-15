<?php
App::uses('AppController', 'Controller');
/**
 * SharingGroups Controller
 *
 * @property SharingGroup $SharingGroup
 */
class SharingGroupsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->SharingGroup->recursive = 0;
		$this->set('sharingGroups', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->SharingGroup->exists($id)) {
			throw new NotFoundException(__('Invalid sharing group'));
		}
		$options = array('conditions' => array('SharingGroup.' . $this->SharingGroup->primaryKey => $id));
		$this->set('sharingGroup', $this->SharingGroup->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SharingGroup->create();
			if ($this->SharingGroup->save($this->request->data)) {
				$this->Session->setFlash(__('The sharing group has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sharing group could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->SharingGroup->exists($id)) {
			throw new NotFoundException(__('Invalid sharing group'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->SharingGroup->save($this->request->data)) {
				$this->Session->setFlash(__('The sharing group has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sharing group could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('SharingGroup.' . $this->SharingGroup->primaryKey => $id));
			$this->request->data = $this->SharingGroup->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->SharingGroup->id = $id;
		if (!$this->SharingGroup->exists()) {
			throw new NotFoundException(__('Invalid sharing group'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->SharingGroup->delete()) {
			$this->Session->setFlash(__('Sharing group deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Sharing group was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
