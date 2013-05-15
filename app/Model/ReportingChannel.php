<?php
App::uses('AppModel', 'Model');
/**
 * ReportingChannel Model
 *
 */
class ReportingChannel extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'reporting_channel';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'reporting_channel' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
}
