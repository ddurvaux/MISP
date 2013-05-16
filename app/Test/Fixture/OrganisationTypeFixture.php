<?php
/**
 * OrganisationTypeFixture
 *
 */
class OrganisationTypeFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'notes' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'name' => 'Public',
			'notes' => null
		),
		array(
			'id' => '2',
			'name' => 'Private',
			'notes' => null
		),
		array(
			'id' => '3',
			'name' => 'Country',
			'notes' => null
		),
		array(
			'id' => '4',
			'name' => 'Other',
			'notes' => null
		),
	);

}
