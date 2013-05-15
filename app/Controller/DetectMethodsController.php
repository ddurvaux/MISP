<?php
App::uses('AppController', 'Controller');
/**
 * DetectMethods Controller
 *
 * @property DetectMethod $DetectMethod
 */
class DetectMethodsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->DetectMethod->recursive = 0;
		$this->set('detectMethods', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DetectMethod->exists($id)) {
			throw new NotFoundException(__('Invalid detect method'));
		}
		$options = array('conditions' => array('DetectMethod.' . $this->DetectMethod->primaryKey => $id));
		$this->set('detectMethod', $this->DetectMethod->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DetectMethod->create();
			if ($this->DetectMethod->save($this->request->data)) {
				$this->Session->setFlash(__('The detect method has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The detect method could not be saved. Please, try again.'));
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
		if (!$this->DetectMethod->exists($id)) {
			throw new NotFoundException(__('Invalid detect method'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->DetectMethod->save($this->request->data)) {
				$this->Session->setFlash(__('The detect method has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The detect method could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DetectMethod.' . $this->DetectMethod->primaryKey => $id));
			$this->request->data = $this->DetectMethod->find('first', $options);
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
		$this->DetectMethod->id = $id;
		if (!$this->DetectMethod->exists()) {
			throw new NotFoundException(__('Invalid detect method'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->DetectMethod->delete()) {
			$this->Session->setFlash(__('Detect method deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Detect method was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
