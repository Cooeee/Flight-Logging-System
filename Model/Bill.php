<?php
App::uses('AppModel', 'Model');
/**
 * Bill Model
 *
 */
class Bill extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'bill';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'rego';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'rego';

}
