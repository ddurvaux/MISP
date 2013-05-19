<?php
/**
 * CIMBLFixture
 *
 */
class CIMBLFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'CIMBL';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'CIMBL' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'date' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 18, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'notes' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 32, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'sensitivity_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'TLP_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'event_number' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'IOC_number' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'id' => 1,
			'CIMBL' => 'Lorem ipsum dolor sit amet',
			'date' => 'Lorem ipsum dolo',
			'notes' => 'Lorem ipsum dolor sit amet',
			'sensitivity_id' => 1,
			'TLP_id' => 1,
			'event_number' => '',
			'IOC_number' => 'Lo'
		),
	);

}
