<?php
App::uses('Aircraft', 'Model');

/**
 * Aircraft Test Case
 *
 */
class AircraftTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.aircraft',
		'app.aircraft_type'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Aircraft = ClassRegistry::init('Aircraft');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Aircraft);

		parent::tearDown();
	}

}
