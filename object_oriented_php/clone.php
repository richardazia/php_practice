<?php

class Helmet {

  public $name;

  function __construct() {
    echo "Original: This is a cycling helmet<br />";
  }

  function __clone() {
    echo "Cloning request sent...<br />";
  }
}

$h1 = new Helmet;
$h1->name = "High visibility helmet";
echo $h1->name . "<br />";

$h2 = clone$h1;

echo "<hr>";
echo $h1->name . "<br />";
echo $h2->name . "<br />";
echo "Cloning complete<hr>";

$h2->name = "Climbing helmet";
echo "Original: " . $h1->name . "<br />";
echo "Clone: " . $h2->name . "<br />";

$h3 = $h2;

$h3->name = 'construction helmet';

echo "Original: " . $h1->name . "<br />";
echo "Clone: " . $h2->name . "<br />";
echo "Cloned clone: " . $h3->name . "<br />";
 ?>
