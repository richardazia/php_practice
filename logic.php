<?php

echo "<h1>Logic</h1>";

echo $a = 5 > 9;
echo "<br>";
echo $b = 10 === 10;
echo "<br>";
echo $c = $a !== $b;
echo "<br>";
echo $d = $a || $b;
echo "<br>";

echo "<hr>";

$i = 0;
while( $i <= 10 ) {
  echo "$i bottles on the wall <br />";
  $i++;
}

echo "<hr>";

for ( $i = 0; $i <= 10; $i++ ) {
  echo "$i bars of chocolate in the drawer <br />";
}

echo "<h2>Should I stay or should I go?</h2>";

$stay_or_go = random_int(0, 1);

if ( 1 == $stay_or_go ) {
  echo "<p>I will not go</p>";
} else {
  echo "<p>I will ride into the sunset";
}

if ( random_int(0,1) ) {
  echo "<p>true</p>";
} else {
  echo "<p>false</p>";
}

echo "<h2>Harps else if fun</h2>";
$choose_harp = random_int(0,5);
$happy_choice = 'no';
echo "<p>$choose_harp</p>";
while( 'no' == $happy_choice ) {
  if ( 0 == $choose_harp ) {
    echo "<p>Echo Harp</p>";
  } elseif ( 1 == $choose_harp ) {
    echo "Hohner Marine Band";
  } elseif ( 2 == $choose_harp) {
    echo "lee oskar";
  } elseif ( 3 == $choose_harp)  {
    echo "<p>false</p>";
  } elseif ( 4  == $choose_harp) {
    echo "<p>Seydel Session Steel</p>";
  } elseif ( 5 == $choose_harp) {
    echo "<p>Play all of them</p>";
  }

  $happy_choice = readline( 'Keep Going? yes/no ');
}

 ?>
