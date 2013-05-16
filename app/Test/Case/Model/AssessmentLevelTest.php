<?php
App::uses('AssessmentLevel', 'Model');

/**
 * AssessmentLevel Test Case
 *
 */
class AssessmentLevelTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.assessment_level',
		'app.event',
		'app.user',
		'app.role',
		'app.reporting_channel',
		'app.organisation',
		'app.organisation_category',
		'app.organisation_type',
		'app.country',
		'app.domain',
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
		$this->AssessmentLevel = ClassRegistry::init('AssessmentLevel');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AssessmentLevel);

		parent::tearDown();
	}

}
