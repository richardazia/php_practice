<?php

echo "<h1>Magic method</h1>";

class Harmonica {

  public static $instance_count = 0;

  public $reeds = 20;
  public $reed_plates = 2;

  public function __construct($args=[]) {
    self::$instance_count++;
    $this->reeds = $args['reeds'] ?? 20;
    $this->holes = $args['holes'] ?? $this->holes;
  }

  public function __destruct() {
    echo "Cheerio old chap!!";
    echo "<br />";
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

$diatonic = new Harmonica(['reeds' => 20, 'holes' => 10]);
echo "<h2>Diatonic Harmonica</h2>";
echo '-- Reeds: ' . $diatonic->reeds . '<br />';
echo '-- Holes: ' . $diatonic->holes . '<br />';
echo '<br />';

$cx12 = new Harmonica(['reeds' => 48, 'holes' => 12]);
echo "<h2>CX12 Harmonica</h2>";
echo '-- Reeds: ' . $cx12->reeds . '<br />';
echo '-- Holes: ' . $cx12->holes . '<br />';
echo '<br />';

$littleLady = new Harmonica(['reeds' => 8, 'holes' => 4]);
echo "<h2>LittleLady Harmonica</h2>";
echo '-- Reeds: ' . $littleLady->reeds . '<br />';
echo '-- Holes: ' . $littleLady->holes . '<br />';
echo '<br />';

?>
