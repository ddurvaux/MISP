<?php
App::uses('AppModel', 'Model');
/**
 * TLP Model
 *
 */
class TLP extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'TLP';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'tlp';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'tlp' => array(
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
