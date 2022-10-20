<?php

class Bicycle {

  public $brand;
  public static $model;
  public static $year;
  public static $description = 'road bike';
  // Make wheels a static property
  public static $number_of_wheels = 2;
  public $category = ['road', 'gravel', 'track'];
  // Define a constant for storing an array of categories
  // road, electric, cargo, gravel, bmx, mountain bike, hybrid, city...
  // public static $category = ['road', 'gravel', 'track'];
  public static $weight_kg = 12.0;
  // ToDo: Add static property called $instance_count
  private static $instance_count = 0;
  protected $wheels = '25-622';
  protected $outer_diameter_mm = 700;
  protected $tire_width_mm = 23;

  public static function quick_about() {
    return "This is a " . self::$description . " made by " . self::$brand . " and it weighs " . self::$weight_kg . "kgs." ;
  }
  // wheel details static method
  // public static function wheel_details() {
  //   $wheel_information = $this->wheels == 1 ? "1 wheel" : "{$this->wheels} wheels";
  //   return "It has " . $wheel_information . ".";
  // }
  public static function wheel_details() {
    $wheel_information = static::$wheels == 1 ? "1 wheel" : "{static::$wheels} wheels";
    return "It has " . $wheel_information . ".";
  }

  public function tire_short_hand() {
    return "This is a " . $this->outer_diameter_mm . "x" . $this->tire_width_mm . " tire.";
  }

  // to provide bikes with a default weight.
  public function weight_kg() {
    return $this->weight_kg . ' kg.';
  }

  // If the user wants to set the weight.
  public function set_weight_kg($value) {
    $this->weight_kg = floatval($value);
  }

  public function weight_lbs() {
    $weight_lbs = floatval($this->weight_kg) * 2.205;
    return $weight_lbs . ' lbs';
  }

  public function weight_lbs_to_kg() {
    $weight_kgs_from_lbs = floatval($this->weight_lbs) * 0.453592;
    return $weight_lbs_to_kg . 'kgs';
  }

  public static function count() {
    return self::$instance_count;
  }
  // Add one to instance Count
  // Set visibility modifiers on $instance_count and create()
  public static function add_instance() {
    self::$instance_count++;
  }
  public static function remove_instance() {
    self::$instance_count--;
  }
  // Part three

  // Create a method in unicycle which extends a method in Bicycle.
  // Course solution
  // ToDo: Write a static method called create()
  public static function create() {
    $class_name = get_called_class(); // we use called for late static binding
    $obj = new $class_name;
    // $obj = new static // Both do the same thing
    // $obj = new static // Both do the same thing
    self::$instance_count++; // Shared variable between classes and subclasses
    return $obj;
  }

  public const CATEGORIES = ['Road', 'Mountain', 'Folding', 'Half', 'Tandem', 'Gravel', 'City'];
}

 ?>
