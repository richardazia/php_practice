<?php

class Bicycle {
    var $brand;
    var $model;
    var $year;
    var $description;
    var $weight_kg;
    var $lbs = 2.20462;

    function name() {
        return "The bike's name is";
    }

    function weight_lbs() {
        $bike_weight_lbs = $this->weight_kg * $this->lbs;
        return "The bike weighs $bike_weight_lbs.";
    }

    function set_weights_lbs() {
        return "Bike weight has been set to lbs";
    }

}

$equilibrium = new Bicycle;
$equilibrium->brand = 'Genesis';
$equilibrium->model = 'Equilibrium';
$equilibrium->year = 2012;
$equilibrium->description = 'This is a road bike that has been ridden in Switzerland, France and England';
$equilibrium->weight_kg = 12;
echo "Bike weight in lbs: " . $equilibrium->weight_lbs() . "<br />";

$aline = new Bicycle;
$aline->brand = 'Brompton';
$aline->model = 'aline';
$aline->year = 2022;
$aline->description = "The cheapest of the Brompon bikes.";
$aline->weight_kg = 11.5;
echo "Bike weight in lbs: " . $aline->weight_lbs() . "<br />";

$pline = new Bicycle;
$pline->brand = 'Brompton';
$pline->model = 'pline';
$pline->year = 2022;
$pline->description = "The lightest of the Brompon bikes.";
$pline->weight_kg = 9.9;
echo "Bike weight in lbs: " . $pline->weight_lbs() . "<br />";

echo "<pre>";
echo $equilibrium->brand . "<br />";
echo $equilibrium->model . "<br />";
echo $equilibrium->year . "<br />";
echo $equilibrium->description . "<br />";
echo $equilibrium->weight_kg . "<br />";
echo $equilibrium->weight_lbs() . "<br />";
echo "</pre>";

echo "<hr>";

echo "<pre>";
echo $aline->brand . "<br />";
echo $aline->model . "<br />";
echo $aline->year . "<br />";
echo $aline->description . "<br />";
echo $aline->weight_kg . "<br />";
echo $aline->weight_lbs() . "<br />";
echo "</pre>";

echo "<hr>";

echo "<pre>";
echo $pline->brand . "<br />";
echo $pline->model . "<br />";
echo $pline->year . "<br />";
echo $pline->description . "<br />";
echo $pline->weight_kg . "<br />";
echo $pline->weight_lbs() . "<br />";
echo "</pre>";
?>