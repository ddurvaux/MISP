<?php
class Setting extends SettingsAppModel {

	public $order = array('key');

    public $validate = array(
		'key' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'required' => true
			)
		),
        'value' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'required' => true
			)
		)
	);

}
