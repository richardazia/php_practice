<?php
$wind_instruments = array('bassoons', 'clarinets', 'saxophones', 'cornets', 'harmonicas', 'recorders');
$wind_instruments = new ArrayIterator($wind_instruments);
$wind_instruments = new LimitIterator($wind_instruments, 1,4);
$wind_instruments->asort(); // sorts through an iterator
// $wind_instruments = $wind_instruments->getArrayCopy();
$wind_instruments = iterator_to_array($wind_instruments);
$wind_instruments = array_reverse($wind_instruments);
echo "<h1>List of Wind instruments</h1>";
echo "<ol>";
foreach ($wind_instruments as $instrument) {
  echo "<li>$instrument</li>";
} 
echo "</ol>";
