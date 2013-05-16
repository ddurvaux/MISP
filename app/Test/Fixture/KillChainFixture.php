<?php
/**
 * KillChainFixture
 *
 */
class KillChainFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 1, 'key' => 'primary'),
		'kill_chain' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 22, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'MyISAM')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '1',
			'kill_chain' => 'Reconnaissance'
		),
		array(
			'id' => '2',
			'kill_chain' => 'Weaponization'
		),
		array(
			'id' => '3',
			'kill_chain' => 'Delivery'
		),
		array(
			'id' => '4',
			'kill_chain' => 'Exploitation'
		),
		array(
			'id' => '5',
			'kill_chain' => 'Installation'
		),
		array(
			'id' => '6',
			'kill_chain' => 'Command and Control'
		),
		array(
			'id' => '7',
			'kill_chain' => 'Actions on Objectives'
		),
		array(
			'id' => '8',
			'kill_chain' => 'Other'
		),
	);

}
