<?php
$days = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
$months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
echo "<h1>Looping text with PHP</h1>";
echo "<p>Instead of having to write text plenty of times we can determine which day, month or other it is, and cycle from there through a week, month or other</p>";

echo "<h2>What day is it?</h2>";

$days = new ArrayIterator($days);
$days = new InfiniteIterator($days);
$days = new LimitIterator($days, 3, 7);
foreach ($days as $day) {
  echo $day . '<br>';
}
echo "<h2>Month of the Year</h2>";
$months = new ArrayIterator($months);
$months = new InfiniteIterator($months);
$months = new LimitIterator($months, 11, 12);
foreach ($months as $month) {
  echo $month . '<br>';
}
?>