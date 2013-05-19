<?php
App::uses('AppController', 'Controller');
App::uses('Xml', 'Utility');
/**
 * CIMBLs Controller
 *
 * @property CIMBL $CIMBL
 */
class CIMBLsController extends AppController {

    //public $helpers = array('Xml');
    public $paginate = array();
    public $components = array('RequestHandler');

/**
 * index method
 *
 * @return void
 */
    public function index() {
        $this->paginate = array('contain' => array('TLP', 'Sensitivity'));
        $this->set('cIMBLs', $this->paginate());
    }

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
    public function view($id = null) {
        if (!$this->CIMBL->exists($id)) {
            throw new NotFoundException(__('Invalid c i m b l'));
        }
        $options = array('conditions' => array('CIMBL.' . $this->CIMBL->primaryKey => $id));
        $this->set('cIMBL', $this->CIMBL->find('first', $options));
    }

/**
 * add method
 *
 * @return void
 */
    public function add() {
        if ($this->request->is('post')) {
            $this->CIMBL->create();
            if ($this->CIMBL->save($this->request->data)) {
                $this->Session->setFlash(__('The c i m b l has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The c i m b l could not be saved. Please, try again.'));
            }
        }
        $sensitivities = $this->CIMBL->Sensitivity->find('list');
        $tLPs = $this->CIMBL->TLP->find('list');
        $this->set(compact('sensitivities', 'tLPs'));
    }

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
    public function edit($id = null) {
        if (!$this->CIMBL->exists($id)) {
            throw new NotFoundException(__('Invalid c i m b l'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->CIMBL->save($this->request->data)) {
                $this->Session->setFlash(__('The c i m b l has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The c i m b l could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('CIMBL.' . $this->CIMBL->primaryKey => $id));
            $this->request->data = $this->CIMBL->find('first', $options);
        }
        $sensitivities = $this->CIMBL->Sensitivity->find('list');
        $tLPs = $this->CIMBL->TLP->find('list');
        $this->set(compact('sensitivities', 'tLPs'));
    }

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
    public function delete($id = null) {
        $this->CIMBL->id = $id;
        if (!$this->CIMBL->exists()) {
            throw new NotFoundException(__('Invalid c i m b l'));
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->CIMBL->delete()) {
            $this->Session->setFlash(__('C i m b l deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('C i m b l was not deleted'));
        $this->redirect(array('action' => 'index'));
    }

    public function download($id){
        $c = $this->CIMBL->find('first', array(
            'conditions' => array('CIMBL.id' => $id),
            'contain' => array(
                'TLP' => array('fields' => array('tlp')),
                'Sensitivity' => array('fields' => array('name')),
                'Event' => array(
                    'fields' => array(
                        'Event.date' => 'detect_time',
                        'ThreatType', 'start_time', 'end_time', 'report_notes'
                    ),
                    'TargetedDomain',
                    'ThreatLevel',
                    'Attribute' => array(
                        'fields' => array(
                            'category', 'type', 'value1' => 'value', 'time_start', 'time_end',
                            'notes', 'blacklist', 'log_review', 'malware_eradication',
                            'vulnerability_management'
                        ),
                        'KillChain'
                    )
                )
            ),
            'fields' => array(
                'id', 'local_date' => 'date', 'notes', 'name'
            )
        ));
        // idiotic way of doing it
        foreach($c['Event'] as $k => &$e){
            $e['Targeted_domain'] = $c['Event'][$k]['TargetedDomain']['domain'];
            $e['Threat_level'] = $c['Event'][$k]['ThreatLevel']['name'];
            unset($c['Event'][$k]['TargetedDomain'], $c['Event'][$k]['ThreatLevel']);
            unset($c['Event'][$k]['targeted_domain_id'], $c['Event'][$k]['threat_level_id'],
                $c['Event'][$k]['CIMBL_id'], $c['Event'][$k]['id']
            );
            foreach($e['Attribute'] as $ak => &$a){
                $a['Kill_chain'] = $e['Attribute'][$ak]['KillChain']['kill_chain'];
                unset($e['Attribute'][$ak]['KillChain']);
                unset($e['Attribute'][$ak]['id'], $e['Attribute'][$ak]['kill_chain_id'],
                    $e['Attribute'][$ak]['event_id']
                );
            }
        }
        //die(debug($c));
        $cimbl = $c['CIMBL'];
        $cimbl['sensitivity'] = $c['Sensitivity']['name'];
        $cimbl['TLP'] = $c['TLP']['tlp'];
        unset($c['CIMBL'], $c['Sensitivity'], $c['TLP']);
        $cimbl += $c;
        $this->set('cimbl', $cimbl);
        $this->response->download($cimbl['name'].'.xml');
    }
}
