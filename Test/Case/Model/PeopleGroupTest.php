<?php
App::uses('PeopleGroup', 'Model');

/**
 * PeopleGroup Test Case
 *
 */
class PeopleGroupTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.people_group',
		'app.person',
		'app.people_certificates',
		'app.certificate',
		'app.people_certificate',
		'app.group'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PeopleGroup = ClassRegistry::init('PeopleGroup');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PeopleGroup);

		parent::tearDown();
	}

}
