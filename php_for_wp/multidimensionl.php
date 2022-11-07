<?php 

$phones = array (
  array("crosscall", 12, 24),
  array("android", 16, 22),
  array("Nokia", 20, 20),
  array("Apple", 14, 28),
);

for ($row = 0; $row < 4; $row++) {
  echo "<p><b>Row Number $row</b></p>";
  echo "<ul>";
for ($col = 0; $col < 3; $col++) {
  echo "<li>".$phones[$row][$col]."</li>";
}
echo "</ul>";
}


?>
