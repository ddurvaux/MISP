<?php
App::uses('AppModel', 'Model');
/**
 * CIMBL Model
 *
 * @property Sensitivity $Sensitivity
 * @property TLP $TLP
 */
class CIMBL extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'CIMBL';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';

	public $order = array('CIMBL.id' => 'DESC');

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'CIMBL' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'sensitivity_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'TLP_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Sensitivity' => array(
			'className' => 'Sensitivity',
			'foreignKey' => 'sensitivity_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'TLP' => array(
			'className' => 'TLP',
			'foreignKey' => 'TLP_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	public $hasMany = array(
        'Event' => array(
            'className' => 'Event',
            'foreignKey' => 'CIMBL_id'
        )
    );
}
