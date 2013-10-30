<?php
App::uses('Visitor', 'Model');

/**
 * Visitor Test Case
 *
 */
class VisitorTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.visitor',
		'app.person',
		'app.certificate',
		'app.people_certificate',
		'app.group',
		'app.people_group',
		'app.flight_type'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Visitor = ClassRegistry::init('Visitor');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Visitor);

		parent::tearDown();
	}

}
