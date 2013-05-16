<?php
/**
 * SettingFixture
 *
 */
class SettingFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'key' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'value' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'updated' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'description' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
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
			'key' => 'CyDefSIG.baseurl',
			'value' => 'http://localhost',
			'created' => '2013-04-22 11:48:12',
			'updated' => '2013-04-22 11:57:40',
			'description' => ''
		),
		array(
			'id' => '2',
			'key' => 'CyDefSIG.name',
			'value' => 'MISP',
			'created' => '2013-04-22 11:49:02',
			'updated' => '2013-04-22 11:49:02',
			'description' => ''
		),
		array(
			'id' => '3',
			'key' => 'GnuPG.onlyencrypted',
			'value' => '1',
			'created' => '2013-04-22 11:57:57',
			'updated' => '2013-04-22 11:57:57',
			'description' => ''
		),
		array(
			'id' => '4',
			'key' => 'GnuPG.email',
			'value' => 'email@address.com',
			'created' => '2013-04-22 11:58:13',
			'updated' => '2013-04-22 11:58:13',
			'description' => ''
		),
		array(
			'id' => '5',
			'key' => 'GnuPG.password',
			'value' => 'yourpassword',
			'created' => '2013-04-22 11:58:34',
			'updated' => '2013-04-22 11:58:34',
			'description' => ''
		),
		array(
			'id' => '6',
			'key' => 'GnuPG.homedir',
			'value' => '/path/to/your/.gnupg/',
			'created' => '2013-04-22 11:58:53',
			'updated' => '2013-04-22 11:58:53',
			'description' => ''
		),
		array(
			'id' => '7',
			'key' => 'CyDefSIG.CTI',
			'value' => 'true',
			'created' => '2013-05-14 14:52:15',
			'updated' => '2013-05-14 14:52:15',
			'description' => ''
		),
	);

}
