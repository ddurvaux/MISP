<?php
App::uses('AppController', 'Controller');
/**
 * AssessmentLevels Controller
 *
 * @property AssessmentLevel $AssessmentLevel
 */
class AssessmentLevelsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->AssessmentLevel->recursive = 0;
		$this->set('assessmentLevels', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->AssessmentLevel->exists($id)) {
			throw new NotFoundException(__('Invalid assessment level'));
		}
		$options = array('conditions' => array('AssessmentLevel.' . $this->AssessmentLevel->primaryKey => $id));
		$this->set('assessmentLevel', $this->AssessmentLevel->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->AssessmentLevel->create();
			if ($this->AssessmentLevel->save($this->request->data)) {
				$this->Session->setFlash(__('The assessment level has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The assessment level could not be saved. Please, try again.'));
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
		if (!$this->AssessmentLevel->exists($id)) {
			throw new NotFoundException(__('Invalid assessment level'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->AssessmentLevel->save($this->request->data)) {
				$this->Session->setFlash(__('The assessment level has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The assessment level could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('AssessmentLevel.' . $this->AssessmentLevel->primaryKey => $id));
			$this->request->data = $this->AssessmentLevel->find('first', $options);
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
		$this->AssessmentLevel->id = $id;
		if (!$this->AssessmentLevel->exists()) {
			throw new NotFoundException(__('Invalid assessment level'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->AssessmentLevel->delete()) {
			$this->Session->setFlash(__('Assessment level deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Assessment level was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
