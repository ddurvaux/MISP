<?php
App::uses('Event', 'Model');

/**
 * Event Test Case
 *
 */
class EventTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.event',
		'app.user',
		'app.role',
		'app.reporting_channel',
		'app.organisation',
		'app.organisation_category',
		'app.organisation_type',
		'app.country',
		'app.domain',
		'app.assessment_level',
		'app.detect_method',
		'app.attribute',
		'app.kill_chain',
		'app.shadow_attribute',
		'app.sharing_group',
		'app.app_model'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Event = ClassRegistry::init('Event');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Event);

		parent::tearDown();
	}

/**
 * testDestroyDir method
 *
 * @return void
 */
	public function testDestroyDir() {
	}

/**
 * testIsOwnedByOrg method
 *
 * @return void
 */
	public function testIsOwnedByOrg() {
	}

/**
 * testGetRelatedEvents method
 *
 * @return void
 */
	public function testGetRelatedEvents() {
	}

/**
 * testGetRelatedAttributes method
 *
 * @return void
 */
	public function testGetRelatedAttributes() {
	}

/**
 * testCleanupEventArrayFromXML method
 *
 * @return void
 */
	public function testCleanupEventArrayFromXML() {
	}

/**
 * testUploadEventToServer method
 *
 * @return void
 */
	public function testUploadEventToServer() {
	}

/**
 * testRestfullEventToServer method
 *
 * @return void
 */
	public function testRestfullEventToServer() {
	}

/**
 * testDeleteEventFromServer method
 *
 * @return void
 */
	public function testDeleteEventFromServer() {
	}

/**
 * testDownloadEventFromServer method
 *
 * @return void
 */
	public function testDownloadEventFromServer() {
	}

/**
 * testGetEventIdsFromServer method
 *
 * @return void
 */
	public function testGetEventIdsFromServer() {
	}

}
