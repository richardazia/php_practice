<?php
$birds = array('duck', 'swan', 'heron', 'pelican', 'goose', 'eagle', 'crow', 'flamingo');

$birds = SplFixedArray::fromArray($birds);
$birds->offsetUnset(2);

$roads = new SplFixedArray(10);

$roads[2] = 'rural';
$roads[1] = 'bridge';
$roads[7] = 'quiet';
$roads->offsetSet(5, 'mountain');

// sort($birds); //Gives an array because this is an object, not an array.
// $birds = new ArrayIterator($birds);
// $birds->asort(); //Gives a fatal errror message

echo '<pre>';
  print_r($birds);
echo '</pre>';

echo '<pre>';
  print_r($roads);
echo '</pre>';
?>
