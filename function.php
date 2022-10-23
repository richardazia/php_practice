<?php

// echo "<h1>Function</h1>";
// $time_to_open_windows = 750;
// $current_reading = readline( 'What is the current reading? ');
// echo "<p>$current_reading</p>";
//
// if ( $current_reading <= $time_to_open_windows ) {
//   echo "You can stay warm with closed windows but wear a mask";
// } else {
//   echo "Open the windows";
// }

function coin_flips( $coin_flips ) {
  $i = 0;
  $heads = 0;
  $tails = 0;

  while( $i < $coin_flips ) {
    if ( random_int(0,1) ) {
      $heads++;
    } else {
      $tails++;
    }
    $i++;
  }

  echo "<p><b>Results:</b> $heads heads and $tails tails.</p>";
}

// coin_flips(50);

coin_flips( readline( 'How many times do you want to coin?' ) );
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
