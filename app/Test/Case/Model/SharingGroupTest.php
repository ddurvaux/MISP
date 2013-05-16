<?php
App::uses('SharingGroup', 'Model');

/**
 * SharingGroup Test Case
 *
 */
class SharingGroupTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.sharing_group'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SharingGroup = ClassRegistry::init('SharingGroup');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SharingGroup);

		parent::tearDown();
	}

}
