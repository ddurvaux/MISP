<?php
App::uses('AppController', 'Controller');
/**
 * Sensitivities Controller
 *
 * @property Sensitivity $Sensitivity
 */
class SensitivitiesController extends AppController {

/**
 * index method
 *
 * @return void
 */
    public function index() {
        $this->set('sensitivities', $this->paginate());
    }

/**
 * add method
 *
 * @return void
 */
    public function add() {
        if ($this->request->is('post')) {
            $this->Sensitivity->create();
            if ($this->Sensitivity->save($this->request->data)) {
                $this->Session->setFlash(__('The sensitivity has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The sensitivity could not be saved. Please, try again.'));
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
        if (!$this->Sensitivity->exists($id)) {
            throw new NotFoundException(__('Invalid sensitivity'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Sensitivity->save($this->request->data)) {
                $this->Session->setFlash(__('The sensitivity has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The sensitivity could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Sensitivity.' . $this->Sensitivity->primaryKey => $id));
            $this->request->data = $this->Sensitivity->find('first', $options);
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
        $this->Sensitivity->id = $id;
        if (!$this->Sensitivity->exists()) {
            throw new NotFoundException(__('Invalid sensitivity'));
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->Sensitivity->delete()) {
            $this->Session->setFlash(__('Sensitivity deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Sensitivity was not deleted'));
        $this->redirect(array('action' => 'index'));
    }
}
