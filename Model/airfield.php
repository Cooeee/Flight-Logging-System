<?php

class Airfield extends AppModel {
  var $name = 'Airfield';
  
  var $hasMany = 'Flight';
  
  var $validate = array(
    'name' => array('rule' => 'notEmpty')
  );
 
}