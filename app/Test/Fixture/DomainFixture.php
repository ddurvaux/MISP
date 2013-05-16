<?php
/**
 * DomainFixture
 *
 */
class DomainFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 1, 'key' => 'primary'),
		'domain' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 13, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'domain' => 'Constituency'
		),
		array(
			'id' => '2',
			'domain' => 'EU-Centric'
		),
		array(
			'id' => '3',
			'domain' => 'EU-nearby'
		),
		array(
			'id' => '4',
			'domain' => 'World-class'
		),
		array(
			'id' => '5',
			'domain' => 'Unknown'
		),
		array(
			'id' => '6',
			'domain' => 'Outside World'
		),
	);

}
