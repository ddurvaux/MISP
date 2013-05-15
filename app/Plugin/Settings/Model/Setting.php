<?php
class Setting extends SettingsAppModel {

	public $order = array('key');

    public $validate = array(
		'key' => array(
			'notempty' => array(
				'rule' => array('notempty'),
			),
		),
        'value' => array(
			'notempty' => array(
				'rule' => array('notempty'),
			),
		)
	);

}
?>
