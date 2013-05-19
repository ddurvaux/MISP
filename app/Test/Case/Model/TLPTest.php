<?php
App::uses('TLP', 'Model');

/**
 * TLP Test Case
 *
 */
class TLPTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.t_l_p'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TLP = ClassRegistry::init('TLP');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TLP);

		parent::tearDown();
	}

}
