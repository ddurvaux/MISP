<?php
/**
 * CountryFixture
 *
 */
class CountryFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'name' => 'Afghanistan'
		),
		array(
			'id' => '2',
			'name' => 'Albania'
		),
		array(
			'id' => '3',
			'name' => 'Algeria'
		),
		array(
			'id' => '4',
			'name' => 'Andorra'
		),
		array(
			'id' => '5',
			'name' => 'Angola'
		),
		array(
			'id' => '6',
			'name' => 'Antigua and Barbuda'
		),
		array(
			'id' => '7',
			'name' => 'Argentina'
		),
		array(
			'id' => '8',
			'name' => 'Armenia'
		),
		array(
			'id' => '9',
			'name' => 'Australia'
		),
		array(
			'id' => '10',
			'name' => 'Austria'
		),
	);

}
