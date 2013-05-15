<?php
App::uses('AppController', 'Controller');
/**
 * OrganisationTypes Controller
 *
 * @property OrganisationType $OrganisationType
 */
class OrganisationTypesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->OrganisationType->recursive = 0;
		$this->set('organisationTypes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->OrganisationType->exists($id)) {
			throw new NotFoundException(__('Invalid organisation type'));
		}
		$options = array('conditions' => array('OrganisationType.' . $this->OrganisationType->primaryKey => $id));
		$this->set('organisationType', $this->OrganisationType->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->OrganisationType->create();
			if ($this->OrganisationType->save($this->request->data)) {
				$this->Session->setFlash(__('The organisation type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The organisation type could not be saved. Please, try again.'));
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
		if (!$this->OrganisationType->exists($id)) {
			throw new NotFoundException(__('Invalid organisation type'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->OrganisationType->save($this->request->data)) {
				$this->Session->setFlash(__('The organisation type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The organisation type could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('OrganisationType.' . $this->OrganisationType->primaryKey => $id));
			$this->request->data = $this->OrganisationType->find('first', $options);
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
		$this->OrganisationType->id = $id;
		if (!$this->OrganisationType->exists()) {
			throw new NotFoundException(__('Invalid organisation type'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->OrganisationType->delete()) {
			$this->Session->setFlash(__('Organisation type deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Organisation type was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
