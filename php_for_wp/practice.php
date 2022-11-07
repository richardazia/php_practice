<?php

$duck = array(
  'name' => 'Mallory The Mallard',
  'wings' => 2,
  'type of bird' => 'duck',
  'job' => 'eater of various aquatic things',
);

$duck_array = array( 
  'Mallory The Mallard', 
  2, 
  'duck', 
  'eater of various aquatic things',

);

$little_lady = array(
  'name' => 'Little Lady',
  'function' => 'musical instrument',
  'type of instrument' => 'wind', 
  'number of holes' => '4',
);

echo "<pre>";
print_r($duck);
print_r($little_lady);
print_r($duck_array);
echo "</pre>";

echo "<h2>Array of Arrays</h2>";

$harmonicas = array (
  'Marine Band' => array(
    'type' => 'diatonic',
    'comb' => 'wood',
    'key' => 'various',
    'brand' => 'hohner',
  ),
  'Special 20' => array(
    'type' => 'diatonic',
    'comb' => 'plastic',
    'key' => 'various',
    'brand' => 'hohner',
  ),
  'Fender Blues Delux' => array(
    'type' => 'diatonic', 
    'comb' => 'plastic',
    'key' => 'key of c',
    'brand' => 'Fender',
  ), 
);

echo "<pre>";
print_r($harmonicas);
echo "</pre>";

echo $harmonicas['Special 20']['comb']; // to get a specific output from within an array.

$results = array();

$results[] = 9 + (2 * 5) - 11;
$results[] = 18 / ((3 * 6) -9) * 3;
$results[] = 3 * ((24 / 2) - (3 * 4) + (2 * 6));

echo "<pre>";
print_r($results);
echo "</pre>";

$width = 8.7;
echo "width =$width \n";
echo 'or'."\n";
echo 'Width = $width'." (".$width.")";

echo (12**2+12)*2+1;

$silly = array( 
  'films' => 'long',
  'books' => 'interesting',
  'podcasts' => 'were fun',
  'radio' => 'good when driving',
  'youtube' => 'was much better than it is now',
);

foreach ( $silly as $rate => $opinion )
  echo "$rate:  $opinion <br>";

$traffic_lights = array(
  'red' => 'stop',
  'orange' => 'think about stopping right now',
  'green' => 'time to drive off',
);

foreach ( $traffic_lights as $status => $wake )
  echo "$status: $wake <br>";

// challenge arrays recopied

$tmnt = array( 
  'Leo' => array('blue', 'swords', 'leader' ),
  'Raf' => array('red', 'bikes', 'writer'),
  'Mickey' => array('green', 'berets', 'charismatic'),
  'Donatello' => array('purple', 'shaft', 'intellectual'),
);

echo "<h2>Challenge attempt</h2>";
var_dump($tmnt);
/*
foreach ( $tmnt as $turtle => $details )
  $details = implode(", ", $details);
echo "$turtle: $details<br>";

echo implode (', ', array_map(function ($details) {
  return ($details[key($details)]);
}, $tmnt));
 */
/*
for ($row = 0; $row < 3; $row++) {
  echo "<p><b>Item 1 $row</b></p>";
  echo "<ul>";
  for ($col = 0; $col < 2; $col++) {
    echo "<li>".$tmnt[$row][$col]."</li>";
  }
  echo "</ul>";
}
*/

// I don't understand how to traverse arrays effectively yet. I need to practice this skill. 

foreach ($tmnt as $turtle => $details ) {
  echo "<p><b>$turtle:</b> "; 
  foreach( $details as $detail ) {
    echo "$detail, ";
  }
  echo '</p>';
}

?>
