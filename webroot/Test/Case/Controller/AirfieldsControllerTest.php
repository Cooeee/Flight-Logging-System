<?php
App::uses('AirfieldsController', 'Controller');

/**
 * AirfieldsController Test Case
 *
 */
class AirfieldsControllerTest extends ControllerTestCase {

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

}
