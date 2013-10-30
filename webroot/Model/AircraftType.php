<?php

class AircraftType extends AppModel {
  var $name = 'AircraftType';
  var $id;
  var $description;
  
  var $hasMany = 'Aircraft';
  var $displayField = 'description';
 
}