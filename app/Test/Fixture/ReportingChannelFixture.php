<?php
/**
 * ReportingChannelFixture
 *
 */
class ReportingChannelFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'reporting_channel' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'reporting_channel' => 'Email'
		),
		array(
			'id' => '2',
			'reporting_channel' => 'Website'
		),
		array(
			'id' => '3',
			'reporting_channel' => 'Phone call'
		),
		array(
			'id' => '4',
			'reporting_channel' => 'Meeting'
		),
		array(
			'id' => '5',
			'reporting_channel' => 'Other'
		),
		array(
			'id' => '6',
			'reporting_channel' => 'Unknown'
		),
	);

}
