<?php 

class Individual {

    var $hat_type;
    var $shoe_size;
    var $continent = 'none';

    function good_morning() {
        return 'Good morning, coffee?'; 
    }

    function enjoy_ride() {
        return 'Enjoy the ride, this afternoon';
    }

    function lunch_time() {
        return 'Enjoy your lunch';
    }

    function hat_shoe() {
        return $this->hat_type . " " . $this->shoe_size;
    }
    
}

$individual1 = new Individual;
$individual1->hat_type = 'helmet';
$individual1->shoe_size = '38';
$individual1->continent = 'Europe';

$individual2 = new Individual;
$individual2->hat_type = 'cap';
$individual2->shoe_size = '28';

echo "<h2>The instance example</h2>";
echo $individual1->hat_shoe() . "<br />";
echo $individual2->hat_shoe() . "<br />";
echo "<hr>";
echo $individual1->hat_type . " " . $individual1->continent . "<br />";
echo $individual2->hat_type . " " . $individual1->continent . "<br />";
echo "<h2>The Method example</h2>";
echo $individual1->good_morning() . "<br>";
echo $individual2->good_morning() . "<br>";
echo "<hr>";

$class_methods = get_class_methods('Individual');
echo "Class methods: " . implode(', ', $class_methods) ." <br>";

// $class_vars = get_class_vars('Individual');
// echo "Class vars:<br />";
// echo "<pre>";
// print_r($class_vars);
// echo "<pre>";

$object_vars = get_object_vars($individual1);
echo "Object vars:<br />";
echo "<pre>";
print_r($object_vars);
echo "<pre>";

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