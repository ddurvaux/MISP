<?php
/**
 * AssessmentLevelFixture
 *
 */
class AssessmentLevelFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 1, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 15, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'definition' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 90, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			
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
			'name' => 'Not assessed',
			'definition' => ''
		),
		array(
			'id' => '2',
			'name' => 'Internal/Basic',
			'definition' => 'assessment by CERT-EU with VirusTotal-like tool'
		),
		array(
			'id' => '3',
			'name' => 'Internal/Medium',
			'definition' => 'assessment by CERT-EU signature based tools'
		),
		array(
			'id' => '4',
			'name' => 'Internal/High',
			'definition' => 'assessment by CERT-EU with behavior-based tools'
		),
		array(
			'id' => '5',
			'name' => 'Partner/Trusted',
			'definition' => 'assessment by a trusted partner of CERT-EU'
		),
		array(
			'id' => '6',
			'name' => 'Public',
			'definition' => 'information released by public entity (news paper, etc) without indication of assessment'
		),
		array(
			'id' => '7',
			'name' => 'Public/Serious',
			'definition' => 'information released by \'serious\' public entity (e.g. Microsoft, Symantec, Kaspersky, etc)'
		),
		array(
			'id' => '8',
			'name' => 'Other',
			'definition' => ''
		),
		array(
			'id' => '9',
			'name' => 'Unknown',
			'definition' => ''
		),
	);

}
