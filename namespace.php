<?php
include 'namespace_part_two.php';
function double ( $a ) {
    return $a + 2;
}


echo '<p>' . double(5) . '</p>';

echo '<p>' . learningPHP\double(5) . '</p>';



/*
// Cannot redeclare double() 
function double ( $a ) {
    return $a * 2;
}
*/

?>