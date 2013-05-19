<?php
App::uses('AppController', 'Controller');
/**
 * TLPs Controller
 *
 * @property TLP $TLP
 */
class TLPsController extends AppController {

/**
 * index method
 *
 * @return void
 */
    public function index() {
        $this->set('tLPs', $this->paginate());
    }

/**
 * add method
 *
 * @return void
 */
    public function add() {
        if ($this->request->is('post')) {
            $this->TLP->create();
            if ($this->TLP->save($this->request->data)) {
                $this->Session->setFlash(__('The t l p has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The t l p could not be saved. Please, try again.'));
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
        if (!$this->TLP->exists($id)) {
            throw new NotFoundException(__('Invalid t l p'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->TLP->save($this->request->data)) {
                $this->Session->setFlash(__('The t l p has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The t l p could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('TLP.' . $this->TLP->primaryKey => $id));
            $this->request->data = $this->TLP->find('first', $options);
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
        $this->TLP->id = $id;
        if (!$this->TLP->exists()) {
            throw new NotFoundException(__('Invalid t l p'));
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->TLP->delete()) {
            $this->Session->setFlash(__('T l p deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('T l p was not deleted'));
        $this->redirect(array('action' => 'index'));
    }
}
