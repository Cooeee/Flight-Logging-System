<?php
App::uses('AppModel', 'Model');
/**
 * Person Model
 *
 * @property Certificate $Certificate
 * @property Group $Group
 */
class Person extends AppModel {

/**
 * Display field
 *
 * @var string
 */
  var $displayField = 'fullname';
  var $order;

  public function __construct($id = false, $table = null, $ds = null) {
    parent::__construct($id, $table, $ds);
    $this->virtualFields['fullname'] = sprintf('CONCAT(%s.first, " ", %s.last)', $this->alias, $this->alias);
    $this->order = $this->alias . '.fullname ASC';
  }

	public function isMember($id = null) {
		//return true;
		$this->recursive = -1;
		$options['joins'] = array(
			array('table' => 'people_groups',
				'alias' => 'PeopleGroups',
				'type' => 'INNER',
				'conditions' => 'Person.id = PeopleGroups.person_id'
			)
		);

		$options['conditions'] = array(
			'PeopleGroups.group_id' => 1,	// Full flying members
			'PeopleGroups.person_id' => $id,
			'PeopleGroups.expires > CurDate()'
		);

		return $this->find('count', $options);
	}
	
	public function isGFAMember($id = null) {
		//return true;
		$this->recursive = -1;
		$options['joins'] = array(
			array('table' => 'people_groups',
				'alias' => 'PeopleGroups',
				'type' => 'INNER',
				'conditions' => 'Person.id = PeopleGroups.person_id'
			)
		);

		$options['conditions'] = array(
			'PeopleGroups.group_id' => 10,	// GFA members
			'PeopleGroups.person_id' => $id,
			'PeopleGroups.expires > CurDate()'
		);

		return $this->find('count', $options);
	}

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'first' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'last' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Certificate' => array(
			'className' => 'Certificate',
			'joinTable' => 'people_certificates',
			'foreignKey' => 'person_id',
			'associationForeignKey' => 'certificate_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'Group' => array(
			'className' => 'Group',
			'joinTable' => 'people_groups',
			'foreignKey' => 'person_id',
			'associationForeignKey' => 'group_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

	public $hasMany = array(
		'Certifies' => array(
			'className' => 'PeopleCertificates',
			'foreignKey' => 'certifiedBy'
		)
	);

	//public $actsAs = array('Containable');
	//public $hasMany = array('Visitor');

}
