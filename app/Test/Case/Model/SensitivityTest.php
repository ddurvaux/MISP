<?php
App::uses('Sensitivity', 'Model');

/**
 * Sensitivity Test Case
 *
 */
class SensitivityTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.sensitivity',
		'app.app_model'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Sensitivity = ClassRegistry::init('Sensitivity');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Sensitivity);

		parent::tearDown();
	}

}
