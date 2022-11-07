<?php
/*
$tmnt = array( 
  'Leo' => array('blue', 'swords', 'leader' ),
  'Raf' => array('red', 'bikes', 'writer'),
  'Mickey' => array('green', 'berets', 'charismatic'),
  'Donatello' => array('purple', 'shaft', 'intellectual'),
);
*/
$harmonica = array( 
  'MarineBand' => array('wood', 'brass', 'hohner',),
  'Rocket' => array('plastic', 'brass', 'hohner',),
  'Session Steel' => array('plastic', 'stainless steel', 'Seydel',),
  'Pro master' => array('aluminium', 'unsure', 'Suzuki',),
);

$roman_city = array(
  'Nyon' => array('Switzerland', 'Vaud', 'Europe'),
  'Pompei' => array('Italy', 'Southern', 'Europe'),
  'Jerash' => array('Jordan', 'Jerash', 'Middle East'),
);

echo "<h1>Loop practice</h1>";
echo "<h2>Roman Cities</h2>";

foreach ($roman_city as $city => $specs) {
  echo "<h3>$city</h3>";
  $specs_list = '';
  foreach ( $specs as $spec) {
    $specs_list .= "$spec, ";
  }
  $specs_list = trim( $specs_list, ', ');
  echo $specs_list;
    echo '</p>';
}

echo "<hr>";
echo "<h2>Some Harmonicas</h2>";
foreach ($harmonica as $harp => $details) {
  echo "<h3>$harp:</h3>";
  $details_list = '';
  foreach ( $details as $detail) {
    $details_list .= "$detail, ";
  }
  $details_list = trim( $details_list, ', ');
  echo $details_list;
  echo '</p>';
}
/*
foreach ($tmnt as $turtle => $details ) {
  echo "<p><b>$turtle:</b> "; 
  $details_list = '';
  foreach( $details as $detail ) {
    $details_list .="$detail, ";
  }
  $details_list = trim( $details_list, ', ');
  echo $details_list;
  echo '</p>';
}
 */
?>
