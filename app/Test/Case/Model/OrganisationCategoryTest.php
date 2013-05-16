<?php
App::uses('OrganisationCategory', 'Model');

/**
 * OrganisationCategory Test Case
 *
 */
class OrganisationCategoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.organisation_category',
		'app.organisation',
		'app.organisation_type',
		'app.country'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->OrganisationCategory = ClassRegistry::init('OrganisationCategory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->OrganisationCategory);

		parent::tearDown();
	}

}
