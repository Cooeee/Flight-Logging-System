<?php
App::uses('Airfield', 'Model');

/**
 * Airfield Test Case
 *
 */
class AirfieldTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.airfield',
		'app.flight',
		'app.person',
		'app.aircraft',
		'app.aircraft_type',
		'app.flight_type'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Airfield = ClassRegistry::init('Airfield');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Airfield);

		parent::tearDown();
	}

}
