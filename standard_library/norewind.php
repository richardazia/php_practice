<?php

$moods = new ArrayIterator(array('happy', 'euphoric', 'gloomy', 'cheeky'));
$moods = new NoRewindIterator($moods);
echo '<h2>First run:</h2>';
foreach ($moods as $mood) {
  echo $mood . '<br>';
}
$moods->rewind();
echo '<h2>Second Run:</h2>';
foreach ($moods as $mood) {
  echo $mood . '<br>';
}

?>
