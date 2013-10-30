<?php
/**
 * FlightFixture
 *
 */
class FlightFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'date' => array('type' => 'date', 'null' => false, 'default' => null),
		'airfield_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'line' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10),
		'tuggie_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'pilot_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'instructor_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'tug_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'glider_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'launch_height' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10),
		'launch_time' => array('type' => 'time', 'null' => false, 'default' => null),
		'land_time' => array('type' => 'time', 'null' => false, 'default' => null),
		'flight_type_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'notes' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 500, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'FK_flights_airfields' => array('column' => 'airfield_id', 'unique' => 0),
			'FK_flights_people' => array('column' => 'tuggie_id', 'unique' => 0),
			'FK_flights_people_2' => array('column' => 'pilot_id', 'unique' => 0),
			'FK_flights_people_3' => array('column' => 'instructor_id', 'unique' => 0),
			'FK_flights_aircrafts' => array('column' => 'tug_id', 'unique' => 0),
			'FK_flights_aircrafts_2' => array('column' => 'glider_id', 'unique' => 0),
			'FK_flights_flight_types' => array('column' => 'flight_type_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'date' => '2013-03-17',
			'airfield_id' => 1,
			'line' => 1,
			'tuggie_id' => 1,
			'pilot_id' => 1,
			'instructor_id' => 1,
			'tug_id' => 1,
			'glider_id' => 1,
			'launch_height' => 1,
			'launch_time' => '18:02:17',
			'land_time' => '18:02:17',
			'flight_type_id' => 1,
			'notes' => 'Lorem ipsum dolor sit amet'
		),
	);

}
