<?php
/**
 * OrganisationCategoryFixture
 *
 */
class OrganisationCategoryFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 1, 'key' => 'primary'),
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
			'name' => 'CERT (EU)'
		),
		array(
			'id' => '2',
			'name' => 'CERT (non EU)'
		),
		array(
			'id' => '3',
			'name' => 'Constituent'
		),
		array(
			'id' => '4',
			'name' => 'Monitoring & alerting service'
		),
		array(
			'id' => '5',
			'name' => 'News collector'
		),
		array(
			'id' => '6',
			'name' => 'IT-security partner'
		),
		array(
			'id' => '7',
			'name' => 'IT-security vendor'
		),
		array(
			'id' => '8',
			'name' => 'LE / Forensic body'
		),
		array(
			'id' => '9',
			'name' => 'Unknown'
		),
	);

}
