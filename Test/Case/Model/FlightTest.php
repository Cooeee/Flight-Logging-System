<?php
App::uses('Flight', 'Model');

/**
 * Flight Test Case
 *
 */
class FlightTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.flight',
		'app.airfield',
		'app.tuggie',
		'app.pilot',
		'app.instructor',
		'app.tug',
		'app.glider',
		'app.flight_type'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Flight = ClassRegistry::init('Flight');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Flight);

		parent::tearDown();
	}

}
