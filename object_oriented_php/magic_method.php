<?php

class Harmonica {

  public static $instance_count = 0;

  public $reeds = 20;
  public $reed_plates = 2;

  public function __construct() {
    self::$instance_count++;
  }
}

class Diatonic extends Harmonica {
  var $reeds = 20;
}

?>
