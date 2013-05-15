<?php
App::uses('AppController', 'Controller');
/**
 * ReportingChannels Controller
 *
 * @property ReportingChannel $ReportingChannel
 */
class ReportingChannelsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ReportingChannel->recursive = 0;
		$this->set('reportingChannels', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ReportingChannel->exists($id)) {
			throw new NotFoundException(__('Invalid reporting channel'));
		}
		$options = array('conditions' => array('ReportingChannel.' . $this->ReportingChannel->primaryKey => $id));
		$this->set('reportingChannel', $this->ReportingChannel->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ReportingChannel->create();
			if ($this->ReportingChannel->save($this->request->data)) {
				$this->Session->setFlash(__('The reporting channel has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The reporting channel could not be saved. Please, try again.'));
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
		if (!$this->ReportingChannel->exists($id)) {
			throw new NotFoundException(__('Invalid reporting channel'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ReportingChannel->save($this->request->data)) {
				$this->Session->setFlash(__('The reporting channel has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The reporting channel could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ReportingChannel.' . $this->ReportingChannel->primaryKey => $id));
			$this->request->data = $this->ReportingChannel->find('first', $options);
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
		$this->ReportingChannel->id = $id;
		if (!$this->ReportingChannel->exists()) {
			throw new NotFoundException(__('Invalid reporting channel'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ReportingChannel->delete()) {
			$this->Session->setFlash(__('Reporting channel deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Reporting channel was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
