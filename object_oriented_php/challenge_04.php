<?php

class Bicycle {

  public $brand;
  public $model;
  public $year;
  public $description = 'road bike';
  private $weight_kg = 12.0;
  public $number_of_wheels = 2;
  protected $wheels = '25-622';
  protected $outer_diameter_mm = 700;
  protected $tire_width_mm = 23;

  public function quick_about() {
    return "This is a " . $this->description . " made by " . $this->brand . " and it weighs " . $this->weight_kg . "kgs." ;
  }

  public function wheel_details() {
    $wheel_information = $this->wheels == 1 ? "1 wheel" : "{$this->wheels} wheels";
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
}

class Tricycle extends Bicycle {
  public $number_of_wheels = 3;
}

class Unicycle extends Bicycle {
  public $number_of_wheels = 1;
}

// Part one
// ToDo: Add static property called $instance_count

// ToDo: Write a static method called create()
// Add one to instance Count
// Create and return new instance of the class

// Part Two
// Set visibility modifiers on $instance_count and create()

// Define a constant for storing an array of categories

// road, electric, cargo, gravel, bmx, mountain bike, hybrid, city...

// Add a $category property for instances to store their category

// Part three
// Make wheels a static property

// wheel details static method

// Create a method in unicycle which extends a method in Bicycle.

// Unicycle method to override method in bicycle unless condition is not met.


 ?>
