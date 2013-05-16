<?php
App::uses('DetectMethod', 'Model');

/**
 * DetectMethod Test Case
 *
 */
class DetectMethodTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.detect_method'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DetectMethod = ClassRegistry::init('DetectMethod');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DetectMethod);

		parent::tearDown();
	}

}
