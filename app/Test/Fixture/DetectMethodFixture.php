<?php
/**
 * DetectMethodFixture
 *
 */
class DetectMethodFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'updated' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '1',
			'name' => 'User reported
',
			'created' => '2013-05-13 16:17:37',
			'updated' => '2013-05-13 16:17:37'
		),
		array(
			'id' => '2',
			'name' => 'Malevolent monitoring service
',
			'created' => '2013-05-13 16:17:37',
			'updated' => '2013-05-13 16:17:37'
		),
		array(
			'id' => '3',
			'name' => 'Press release
',
			'created' => '2013-05-13 16:17:37',
			'updated' => '2013-05-13 16:17:37'
		),
		array(
			'id' => '4',
			'name' => 'IDS
',
			'created' => '2013-05-13 16:17:37',
			'updated' => '2013-05-13 16:17:37'
		),
		array(
			'id' => '5',
			'name' => 'Log analysis and/or review process
',
			'created' => '2013-05-13 16:17:37',
			'updated' => '2013-05-13 16:17:37'
		),
		array(
			'id' => '6',
			'name' => 'IT-security partner reported
',
			'created' => '2013-05-13 16:17:37',
			'updated' => '2013-05-13 16:17:37'
		),
		array(
			'id' => '7',
			'name' => 'Law enforcement notification
',
			'created' => '2013-05-13 16:17:37',
			'updated' => '2013-05-13 16:17:37'
		),
		array(
			'id' => '8',
			'name' => 'Fraud detection
',
			'created' => '2013-05-13 16:17:37',
			'updated' => '2013-05-13 16:17:37'
		),
		array(
			'id' => '9',
			'name' => 'Security audit or scan
',
			'created' => '2013-05-13 16:17:37',
			'updated' => '2013-05-13 16:17:37'
		),
		array(
			'id' => '10',
			'name' => 'Brag, blackmail, or public disclosure by perpetrator
',
			'created' => '2013-05-13 16:17:37',
			'updated' => '2013-05-13 16:17:37'
		),
	);

}
