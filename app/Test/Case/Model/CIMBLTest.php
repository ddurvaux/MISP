<?php
App::uses('CIMBL', 'Model');

/**
 * CIMBL Test Case
 *
 */
class CIMBLTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.c_i_m_b_l',
		'app.sensitivity',
		'app.t_l_p'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CIMBL = ClassRegistry::init('CIMBL');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CIMBL);

		parent::tearDown();
	}

}
