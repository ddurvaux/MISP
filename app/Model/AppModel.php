<?php
/**
 * Application model for Cake.
 *
 * This file is application-wide model file. You can put all
 * application-wide model-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Model
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('Model', 'Model');
App::uses('LogableBehavior', 'Assets.models/behaviors');

/**
 * Application model for Cake.
 *
 * Add your application-wide methods in the class below, your models
 * will inherit them.
 *
 * @package       app.Model
 */
class AppModel extends Model {

/**
 * Model Name
 *
 * @var string
 */
	public $name;

	public $recursive = -1;
    public $actsAs = array('Containable');

	public function __construct($id = false, $table = null, $ds = null) {
		parent::__construct($id, $table, $ds);

		$this->name = get_class($this);
	}

	/**
     * Custom Model::find() for Ad-Hoc joins
     *
     */
    public function find($type = null, $options = array()) {
        if (!isset($options['joins'])) {
            $options['joins'] = array();
        }

        switch ($type) {
            case 'matches':
                if (!isset($options['model']) || !isset($options['scope'])) {
                    break;
                }
                $type = isset($options['operation']) ? $options['operation'] : 'all';

                $assoc = $this->hasAndBelongsToMany[$options['model']];
                $bind = "{$assoc['with']}.{$assoc['foreignKey']} = {$this->alias}.{$this->primaryKey}";

                $options['joins'][] = array(
                    'table' => $assoc['joinTable'],
                    'alias' => $assoc['with'],
                    'type' => 'inner',
                    'foreignKey' => false,
                    'conditions'=> array($bind)
                );

                $bind = $options['model'] . '.' . $this->{$options['model']}->primaryKey . ' = ';
                $bind .= "{$assoc['with']}.{$assoc['associationForeignKey']}";

                $options['joins'][] = array(
                    'table' => $this->{$options['model']}->table,
                    'alias' => $options['model'],
                    'type' => 'inner',
                    'foreignKey' => false,
                    'conditions'=> array($bind) + (array)$options['scope'],
                );
                unset($options['model'], $options['scope']);
                break;
        }
        return parent::find($type, $options);
    }

/**
 * generateAllFor<FieldName>
 **/
	public function generateAllFor($field, $newValvue, $oldValue, $recursive = -1) {
		App::uses('CamelCase', 'Lib');
		$camelCase = new CamelCase();
		$fieldFromCamelCase = $camelCase->fromCamelCase($field);
		$succes = $this->generateSomethings($this->name . '.' . $fieldFromCamelCase, $newValvue, $oldValue, $recursive);
		return $succes;
	}

	public function generateSomethings($theThing, $newValue, $oldValue, $recursive) {
		$successes = array();
		$this->recursive = $recursive;
		$result = $this->updateAll(
			array($theThing => $newValue),
			array($theThing => $oldValue == 'null' ? null : $oldValue)
		);
		return $result;
	}

	public function notUsedCall($method, $params) {
		// Notice (8): Undefined index: Id [CORE/Cake/Model/Model.php, line 2673]
		// Notice (8): Undefined index: Id [CORE/Cake/Model/Model.php, line 2650]

		if (strpos($method, 'findBy') === 0) {
			debug($method);
			parent::__call($method, $params);
			debug($methodArgs);
		}

		if (strpos ($method, 'generateAllFor') === 0) {
			// massage the args
			$methodArgs = $params;
			$methodArgs[0] = str_replace('generateAllFor', '', $method); // TODO
			//array_unshift($methodArgs, str_replace('generateAllFor', '', $method));
			// do the actual call
			return call_user_func_array(array($this, 'generateAllFor'), $methodArgs);
		}

		return false;
	}
}
