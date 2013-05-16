<?php
App::uses('ReportingChannel', 'Model');

/**
 * ReportingChannel Test Case
 *
 */
class ReportingChannelTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.reporting_channel'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ReportingChannel = ClassRegistry::init('ReportingChannel');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ReportingChannel);

		parent::tearDown();
	}

}
