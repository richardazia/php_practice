<?php

echo "<h1>Magic method</h1>";

class Harmonica {

  public static $instance_count = 0;

  public $reeds = 20;
  public $reed_plates = 2;

  public function __construct($reeds, $holes) {
    self::$instance_count++;
    $this->reeds = $reeds;
    $this->holes = $holes;
  }
}

class Diatonic extends Harmonica {
  var $reeds = 20;
}

class Cx12 extends Harmonica {
  var $reeds = 48;
  var $slide = "zigzag";
  var $holes = 12;
}

$diatonic = new Harmonica(20, 10);
echo "<h2>Diatonic Harmonica</h2>";
echo '-- Reeds: ' . $diatonic->reeds . '<br />';
echo '-- Holes: ' . $diatonic->holes . '<br />';
echo '<br />';

$cx12 = new Harmonica(42, 12);
echo "<h2>CX12 Harmonica</h2>";
echo '-- Reeds: ' . $cx12->reeds . '<br />';
echo '-- Holes: ' . $cx12->holes . '<br />';
echo '<br />';

?>
