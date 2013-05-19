<?php
App::uses('AppController', 'Controller');
/**
 * ThreatLevels Controller
 *
 * @property ThreatLevel $ThreatLevel
 */
class ThreatLevelsController extends AppController {

/**
 * index method
 *
 * @return void
 */
    public function index() {
        $this->set('threatLevels', $this->paginate());
    }

/**
 * add method
 *
 * @return void
 */
    public function add() {
        if ($this->request->is('post')) {
            $this->ThreatLevel->create();
            if ($this->ThreatLevel->save($this->request->data)) {
                $this->Session->setFlash(__('The threat level has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The threat level could not be saved. Please, try again.'));
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
        if (!$this->ThreatLevel->exists($id)) {
            throw new NotFoundException(__('Invalid threat level'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->ThreatLevel->save($this->request->data)) {
                $this->Session->setFlash(__('The threat level has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The threat level could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('ThreatLevel.' . $this->ThreatLevel->primaryKey => $id));
            $this->request->data = $this->ThreatLevel->find('first', $options);
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
        $this->ThreatLevel->id = $id;
        if (!$this->ThreatLevel->exists()) {
            throw new NotFoundException(__('Invalid threat level'));
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->ThreatLevel->delete()) {
            $this->Session->setFlash(__('Threat level deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Threat level was not deleted'));
        $this->redirect(array('action' => 'index'));
    }
}
