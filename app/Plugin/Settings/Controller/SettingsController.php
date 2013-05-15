<?php
class SettingsController extends SettingsAppController {

    /**
     *
     * @property Setting $Setting
     */

    public $paginate = array('limit' => 60);

	public function index() {
        if(!empty($this->request->data)){
            $redirect = array('action' => 'index');
            foreach($this->request->data['Setting'] as $k => $v){
                if(!empty($v)){
                    $redirect[$k] = $v;
                }
            }
			$this->redirect($redirect);
		}
        if(!empty($this->passedArgs['key'])){
            $this->paginate['conditions'] = array('Setting.key LIKE' => '%'.$this->passedArgs['key'].'%');
        }

		$this->set('settings', $this->paginate());
	}

	public function add() {
		if (!empty($this->request->data)) {
			$this->Setting->create();
			if ($this->Setting->save($this->request->data)) {

				$this->Session->setFlash(__('The setting has been saved'), 'default', array('class' => 'message success close'));
				$this->redirect(array('action' => 'index', 'page' => $this->passedArgs['page'], 'admin' => false, 'plugin' => 'settings'));
			} else {
				$this->Session->setFlash(__('The setting could not be saved. Please, try again.'), 'default', array('class' => 'message errorm close'));
			}
		}
	}

	public function edit($id = null) {
		/*if (!$id) {
            $this->Session->setFlash(__('Invalid setting'), 'default', array('class' => 'message errorm close'));
            $this->redirect(array('action' => 'index', 'page' => $this->passedArgs['page']));
		}*/
		if (!empty($this->request->data)) {
			if ($this->Setting->save($this->request->data)) {
				$this->Session->setFlash(__('The setting has been saved'), 'default', array('class' => 'message success close'));
				$this->redirect(array('action' => 'index', 'page' => $this->passedArgs['page'], 'plugin' => 'settings'));
			} else {
				$this->Session->setFlash(__('The setting could not be saved. Please, try again.'), 'default', array('class' => 'message errorm close'));
			}
		} else {
			$this->request->data = $this->Setting->read(null, $id);
		}
	}

	public function delete($id = null) {
        $this->Setting->id = $id;
        if (!$this->Setting->exists()) {
            throw new NotFoundException(__('Invalid organisation'));
        }
		if (!$id) {
			$this->Session->setFlash(__('Invalid setting'), 'default', array('class' => 'message errorm close'));
            $this->redirect(array('controller' => 'settings', 'action' => 'index',  'page' => $this->passedArgs['page']));
		}
		if ($this->Setting->delete()) {
			$this->Session->setFlash(__('Setting deleted'), 'default', array('class' => 'message success close'));
			$this->redirect(array('action' => 'index', 'page' => $this->passedArgs['page']));
		}
		$this->Session->setFlash(__('Setting was not deleted'), 'default', array('class' => 'message errorm close'));
		$this->redirect(array('action' => 'index', 'page' => $this->passedArgs['page']));
	}

    public function clear_cache() {
        $cachePaths = array('js', 'css', 'menus', 'views', 'persistent', 'models');
        foreach($cachePaths as $config) {
            Cache::config($config, array('path' => CACHE.$config.DS, 'prefix'=>'', 'engine'=>'File'));
            Cache::clear(false, $config);
        }
        $this->Session->setFlash(__('Cache cleared'), 'default', array('class' => 'message success close'));
        $this->redirect($this->referer());

    }
}
