<?php
class LoadSettingsComponent extends Component{

    public function initialize(Controller $controller, $settings=array()){
        $this->controller = $controller;
        $SA = ClassRegistry::init('Setting')->find('all');
        $settings = Set::combine($SA, "{n}.Setting.key", "{n}.Setting.value");
        Configure::write($settings);
    }

}
?>