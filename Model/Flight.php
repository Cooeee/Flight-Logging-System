<?php
App::uses('AppModel', 'Model');
/**
 * Flight Model
 *
 * @property Airfield $Airfield
 * @property Tuggie $Tuggie
 * @property Pilot $Pilot
 * @property Passenger / Instructor $Passenger
 * @property Tug $Tug
 * @property Glider $Glider
 * @property FlightType $FlightType
 */
class Flight extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'date' => array(
			'date' => array(
				'rule' => array('date'),
				//'message' => 'Your custom message here',
				'allowEmpty' => false,
				//'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'airfield_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'line' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				'allowEmpty' => true,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'tuggie_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'pilot_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				'allowEmpty' => true,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'passenger_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				'allowEmpty' => true,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'tug_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				'allowEmpty' => true,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'glider_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'launch_height' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				'allowEmpty' => true,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'height' => array(
				'rule' => array('check_increment'),
				'allowEmpty' => true,
				'message' => 'Must be multiple of 100'
			),
		),
		'launch_time' => array(
			'time' => array(
				'rule' => array('time'),
				//'message' => 'Your custom message here',
				'allowEmpty' => true,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'land_time' => array(
			'time' => array(
				'rule' => array('time'),
				//'message' => 'Your custom message here',
				'allowEmpty' => true,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'comparison' => array(
				'rule' => array('field_comparison', '>=', 'launch_time'),
				'allowEmpty' => true,
				'message' => 'Landing time earlier than launch time'
			),
		),
		'flight_type_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				'allowEmpty' => true,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	function field_comparison($field1, $operator, $field2) {
		foreach($field1 as $key=>$value1) {
			$value2 = $this->data[$this->alias][$field2];
			if (!Validation::comparison($value1, $operator, $value2))
				return false;
		}
		return true;
	}

	function check_increment($field) {
		foreach($field as $key=>$value) {
			if ($value % 100 != 0)
				return false;
		}
		return true;
	}

	public $virtualFields = array(
		'complete' => 'Flight.line > 0 and Flight.pilot_id is not null and Flight.tug_id is not null and Flight.glider_id is not null and Flight.launch_height > 0 and Flight.launch_time is not null and Flight.land_time is not null and Flight.flight_type_id is not null'
	);

	public function land() {
		return $this->saveField('land_time', DboSource::expression('CURTIME()'));
	}

	public function launch() {
		return $this->saveField('launch_time', DboSource::expression('CURTIME()'));
	}

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Airfield' => array(
			'className' => 'Airfield',
			'foreignKey' => 'airfield_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Tuggie' => array(
			'className' => 'Person',
			'foreignKey' => 'tuggie_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Pilot' => array(
			'className' => 'Person',
			'foreignKey' => 'pilot_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Passenger' => array(
			'className' => 'Person',
			'foreignKey' => 'passenger_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Tug' => array(
			'className' => 'Aircraft',
			'foreignKey' => 'tug_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Glider' => array(
			'className' => 'Aircraft',
			'foreignKey' => 'glider_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'FlightType' => array(
			'className' => 'FlightType',
			'foreignKey' => 'flight_type_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

}
