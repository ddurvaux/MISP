<?php
App::uses('OrgasationPgpKey', 'Model');

/**
 * OrgasationPgpKey Test Case
 *
 */
class OrgasationPgpKeyTest extends CakeTestCase {

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->OrgasationPgpKey = ClassRegistry::init('OrgasationPgpKey');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->OrgasationPgpKey);

		parent::tearDown();
	}

}
