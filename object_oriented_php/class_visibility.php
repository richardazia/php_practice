<?php

class Individual {

    public $hat_type;
    public $shoe_size;
    public $continent = 'none';

    protected $uid;
    private $bank_balance_chf = 12852;

    public function good_morning() {
        return 'Good morning, coffee?';
    }

    public function enjoy_ride() {
        return 'Enjoy the ride, this afternoon';
    }

    public function lunch_time() {
        return 'Enjoy your lunch';
    }

    public function hat_shoe() {
        return $this->hat_type . " " . $this->shoe_size;
    }

    protected function hello_close_friends() {
      return 'Hello, close friends';
    }

    private function hello_private_sphere_friends() {
      return 'Hello, select few';
    }

}

class PartTimeIndividual extends Individual {
  public function hello_parent() {
    return $this->hello_close_friends();
  }
}

// $individual1 = new Individual;
$individual1 = new PartTimeIndividual;
$individual1->hat_type = 'helmet';
$individual1->shoe_size = '38';
$individual1->continent = 'Europe';

$individual2 = new Individual;
$individual2->hat_type = 'cap';
$individual2->shoe_size = '28';

echo "<h2>The instance example</h2>";
echo $individual1->hat_shoe() . "<br />";
echo "Hello Parent: ";
echo $individual1->hello_parent() . "<br />";
echo $individual2->hat_shoe() . "<br />";
// echo $individual2->hello_close_friends() . "<br />"; // Error: protected
// echo $individual2->hello_private_sphere_friends() . "<br />"; // error: private
echo "<hr>";
echo $individual1->hat_type . " " . $individual1->continent . "<br />";
echo $individual2->hat_type . " " . $individual1->continent . "<br />";
echo "<h2>The Method example</h2>";
echo $individual1->good_morning() . "<br>";
echo $individual2->good_morning() . "<br>";
echo "<hr>";

$class_methods = get_class_methods('Individual');
echo "Class methods: " . implode(', ', $class_methods) ." <br>";

// $class_publics = get_class_publics('Individual');
// echo "Class publics:<br />";
// echo "<pre>";
// print_r($class_publics);
// echo "<pre>";

// $object_publics = get_object_publics($individual1);
// echo "Object publics:<br />";
// echo "<pre>";
// print_r($object_publics);
// echo "<pre>";

echo "<hr>";

if(property_exists('Individual', 'hat_size')) {
    echo "Property hat_size exists in Individual class. <br />";
} else {
    echo "Property 'hat_size' does not exist in Individual class. <br />";
}

if(property_exists('Individual', 'hat_type')) {
    echo "Property 'hat_type' exists in Individual class. <br />";
} else {
    echo "Property 'hat_type' does not exist in Individual class. <br />";
}

if(method_exists('Individual', 'enjoy_ride')) {
    echo "Property 'enjoy_ride' exists in Individual class. <br />";
} else {
    echo "Property 'enjoy_ride' does not exist in Individual class. <br />";
}

if(method_exists('Individual', 'go_indoors')) {
    echo "Property 'go_indoors' exists in Individual class. <br />";
} else {
    echo "!!! Property 'go_indoors' does not exist in Individual class. !!! <br />";
}

?>
