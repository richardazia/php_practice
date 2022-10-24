<?php
// This is based on the code from the PHP for Non-Programmers course by Joe Casabona. This is unit 5.2 onwards

// function count_words ( $text ) {
//   return str_word_count( $text );
// }
//
// echo "I have counted " . count_words( 'The quick brown fox jumped over the excited dog that was sleeping at the end of the fireplace.') . " words.";
//
function count_specific_word( $str, $text ) {
  $str = '/' . strtolower( $str ) . '/' ;
  $text = strtolower( $text );
  $count = array();
  preg_match_all( $str, $text, $count );
  return sizeof( $count[0] );
}

$text = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus massa tortor, semper non molestie non, tristique eu mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras molestie bibendum elit. Mauris libero ex, cursus quis hendrerit semper, tincidunt aliquet sem. Phasellus maximus orci eget purus eleifend venenatis. Proin vehicula sagittis magna, a finibus sapien porta sit amet. Nunc scelerisque laoreet nibh, vitae finibus tortor vehicula non. Phasellus ligula tortor, commodo nec varius nec, pretium at arcu. Duis imperdiet libero fermentum pellentesque consequat. Phasellus malesuada euismod nunc a tempus. Aenean mattis nec lorem eleifend laoreet. Duis quis nisi diam. Ut ullamcorper ornare tellus, consequat blandit mi porta eget. Aenean elit nibh, pharetra vel libero eu, pharetra egestas ante. Curabitur varius et odio quis viverra.

Duis nisi purus, scelerisque quis venenatis sed, blandit nec lacus. Nullam tincidunt ligula in est pellentesque ultricies. Duis sodales velit massa, quis convallis enim mattis eget. Suspendisse potenti. Donec sit amet libero auctor, porta neque in, pharetra quam. Nulla suscipit nisi vel diam tincidunt, id lacinia augue semper. Suspendisse cursus urna purus, ut rutrum nibh vulputate sit amet. Nullam quis velit magna. Mauris nec vestibulum ipsum, aliquet finibus ex. Aenean justo elit, fringilla non ex sed, vestibulum.";
$str = readline( 'Which word would you like to count?' );

if ( 0 !== $str ) {
  echo $str . ' appears ' . count_specific_word( $str, $text ) . ' times. ';
  $str = readline('Which word would you like to count? Type 0 (zero) to stop.');
} else {
  echo 'Goodbye!';
}


?>
