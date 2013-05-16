<?php
App::uses('Orgasation', 'Model');

/**
 * Orgasation Test Case
 *
 */
class OrgasationTest extends CakeTestCase {

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Orgasation = ClassRegistry::init('Orgasation');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Orgasation);

		parent::tearDown();
	}

}
