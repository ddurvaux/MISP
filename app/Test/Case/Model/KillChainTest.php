<?php
App::uses('KillChain', 'Model');

/**
 * KillChain Test Case
 *
 */
class KillChainTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.kill_chain',
		'app.attribute',
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
		'app.sharing_group',
		'app.app_model',
		'app.shadow_attribute'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->KillChain = ClassRegistry::init('KillChain');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->KillChain);

		parent::tearDown();
	}

}
