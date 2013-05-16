<?php
/**
 * SharingGroupFixture
 *
 */
class SharingGroupFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'category' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'description' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'id' => array('column' => 'id', 'unique' => 0)
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
			'name' => 'CERT-EU',
			'category' => '',
			'description' => ''
		),
		array(
			'id' => '2',
			'name' => 'Impacted constituent',
			'category' => 'Constituent',
			'description' => ''
		),
		array(
			'id' => '3',
			'name' => 'Constituents',
			'category' => 'Constituent',
			'description' => ''
		),
		array(
			'id' => '4',
			'name' => 'MAHWG',
			'category' => 'Group 1',
			'description' => 'Sub-set of group 1 participating in MISP'
		),
		array(
			'id' => '5',
			'name' => 'Trusted EU CERTs',
			'category' => 'Group 1',
			'description' => 'Members of EGC (GovCERT.AT, Danish GovCERT, CERT-FI, CERTA, CERT-Bund, CERT-Hungary, NCSC-NL, NorCERT, CCN-CERT, CERT-SE, GovCERT.ch, CSIRTUK, GovCertUK)'
		),
		array(
			'id' => '6',
			'name' => 'Trusted non-EU CERTs',
			'category' => 'Group 2',
			'description' => 'US-CERT, NCIRC'
		),
		array(
			'id' => '7',
			'name' => 'Trusted ITSec / intelligence Partners',
			'category' => 'Group 3',
			'description' => 'IT or Cyber threat intelligence firms / organisations (ONA, Detica, Mandiant, RSA, etc)'
		),
		array(
			'id' => '8',
			'name' => 'Trusted private sector partners',
			'category' => 'Group 4',
			'description' => 'CERT or SOC of private sector'
		),
		array(
			'id' => '9',
			'name' => 'FIRST',
			'category' => '',
			'description' => ''
		),
		array(
			'id' => '10',
			'name' => 'Public',
			'category' => '',
			'description' => ''
		),
	);

}
