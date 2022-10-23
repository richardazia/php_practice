<?php

echo "<h1>Function</h1>";
$time_to_open_windows = 750;
$current_reading = readline( 'What is the current reading? ');
echo "<p>$current_reading</p>";

if ( $current_reading <= $time_to_open_windows ) {
  echo "You can stay warm with closed windows but wear a mask";
} else {
  echo "Open the windows";
}
// doesn't work as desired
// if ($current_reading >= $time_to_open_windows) {
//   echo "open windows";
// } else {
//   echo "wear a mask anyway";
// }
// if (is_int($current_reading) == true );{
//   function open_window() {
//     return $current_reading >= 1000;
//   }
//
//   $aerate = open_window();
//   if( $aerate ) {
//     echo "Open the windows for fresh air";
//   } else {
//     echo "You should still wear a mask";
//   }
//   $current_reading = readline( 'What is the current reading? ');
// }
// } else {
//     $current_reading = readline( 'What is the current reading? Please enter a number. ');
// }

// function is_bigger() {
//   return 10 >= 5;
// }
//
// $bigger = is_bigger();
// if ( $bigger ) {
//   echo 'it is bigger!';
// } else {
//   echo 'it is smaller';
// }

?>
