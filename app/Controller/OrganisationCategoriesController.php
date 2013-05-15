<?php
App::uses('AppController', 'Controller');
/**
 * OrganisationCategories Controller
 *
 * @property OrganisationCategory $OrganisationCategory
 */
class OrganisationCategoriesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->OrganisationCategory->recursive = 0;
		$this->set('organisationCategories', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->OrganisationCategory->exists($id)) {
			throw new NotFoundException(__('Invalid organisation category'));
		}
		$options = array('conditions' => array('OrganisationCategory.' . $this->OrganisationCategory->primaryKey => $id));
		$this->set('organisationCategory', $this->OrganisationCategory->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->OrganisationCategory->create();
			if ($this->OrganisationCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The organisation category has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The organisation category could not be saved. Please, try again.'));
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
		if (!$this->OrganisationCategory->exists($id)) {
			throw new NotFoundException(__('Invalid organisation category'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->OrganisationCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The organisation category has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The organisation category could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('OrganisationCategory.' . $this->OrganisationCategory->primaryKey => $id));
			$this->request->data = $this->OrganisationCategory->find('first', $options);
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
		$this->OrganisationCategory->id = $id;
		if (!$this->OrganisationCategory->exists()) {
			throw new NotFoundException(__('Invalid organisation category'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->OrganisationCategory->delete()) {
			$this->Session->setFlash(__('Organisation category deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Organisation category was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
