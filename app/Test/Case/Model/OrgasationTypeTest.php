<?php
App::uses('OrgasationType', 'Model');

/**
 * OrgasationType Test Case
 *
 */
class OrgasationTypeTest extends CakeTestCase {

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->OrgasationType = ClassRegistry::init('OrgasationType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->OrgasationType);

		parent::tearDown();
	}

}
