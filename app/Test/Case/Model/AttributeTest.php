<?php
App::uses('Attribute', 'Model');

/**
 * Attribute Test Case
 *
 */
class AttributeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
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
		'app.kill_chain',
		'app.shadow_attribute'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Attribute = ClassRegistry::init('Attribute');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Attribute);

		parent::tearDown();
	}

/**
 * testValueIsUnique method
 *
 * @return void
 */
	public function testValueIsUnique() {
	}

/**
 * testValidateTypeValue method
 *
 * @return void
 */
	public function testValidateTypeValue() {
	}

/**
 * testValidateAttributeValue method
 *
 * @return void
 */
	public function testValidateAttributeValue() {
	}

/**
 * testGetCompositeTypes method
 *
 * @return void
 */
	public function testGetCompositeTypes() {
	}

/**
 * testIsOwnedByOrg method
 *
 * @return void
 */
	public function testIsOwnedByOrg() {
	}

/**
 * testGetRelatedAttributes method
 *
 * @return void
 */
	public function testGetRelatedAttributes() {
	}

/**
 * testTypeIsMalware method
 *
 * @return void
 */
	public function testTypeIsMalware() {
	}

/**
 * testTypeIsAttachment method
 *
 * @return void
 */
	public function testTypeIsAttachment() {
	}

/**
 * testBase64EncodeAttachment method
 *
 * @return void
 */
	public function testBase64EncodeAttachment() {
	}

/**
 * testSaveBase64EncodedAttachment method
 *
 * @return void
 */
	public function testSaveBase64EncodedAttachment() {
	}

/**
 * testUploadAttachment method
 *
 * @return void
 */
	public function testUploadAttachment() {
	}

/**
 * testUploadAttributeToServer method
 *
 * @return void
 */
	public function testUploadAttributeToServer() {
	}

/**
 * testRestfullAttributeToServer method
 *
 * @return void
 */
	public function testRestfullAttributeToServer() {
	}

/**
 * testDeleteAttributeFromServer method
 *
 * @return void
 */
	public function testDeleteAttributeFromServer() {
	}

/**
 * testCheckComposites method
 *
 * @return void
 */
	public function testCheckComposites() {
	}

}
