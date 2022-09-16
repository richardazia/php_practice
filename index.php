<html>
  <head>
    <title>PHP Test - Learning PHP code along</title>
  </head>
  <body>
    <p>Code along with Joe Casabona - </p>
    <?php 
/*
      $age = 40;
      $name = 'Richard';
      $continent = 'Europe';
      echo "<h3>Good Morning, $name, in $continent</h3>";
      echo 'Good Morning, ' . $name . 'in ' . $continent;
      echo "<p>This is line 1</p>";
      echo "<p>This is line 2</p>";
      echo "\t this is line three, tabbed";
      echo "The quick brown fox
            jumped over the fence to 
            get to the lazy dog.";
      echo "This string spans
            multiple lines. The newlines will be
            output as well";
      echo "This string spans\nmultiple lines. The                 newlines will be\noutput as well.";

// Indexable Array
        $colours = array('red', 'orange', 'green', 'blue', 'indigo', 'violet');

      print_r( $colours);

      echo '<p>' . $colours[0] . '<p>';
      echo '<p>' . $colours[0] . ' ' . 'to '. $colours[5] . '<p>';
      echo '<p>' . $colours . '<p>'; # prints "Array"

      $colours[] = 'cyan';
      $colours[] = 'azure blue';
      $colours[] = 'white';
echo '<pre>';
print_r( $colours);
echo '</pre>';
      

// Associative Array
$week_day = array(
  'Monday' => 'sunny',
  'Tuesday' => 'rainy',
  'Wednesday' => 'tropical heat',
  'Thursday' => 'foggy',
  'Friday' => 'windy and rainy',
  'Saturday' => 'changeable weather',
  'Sunday' => 'snowing',
);

echo '<pre>';
print_r( $week_day );
echo '</pre>';


$name = "The quick brown fox"; //Heading
$sport = "cycling";
$effort = "grandiose"; // Italics
$mishap = "skidded"; // bold
$result = "efficient";

echo "<h1>$name</h1><p>$name was out $sport by the <i>$effort</i> Jurassic landscape when he <b>$mishap</b> before coming to an $result stop. <p> The bike ride would continue for a while.";

$a = 9 > 5;
$b = 10 != 10;
$c = $a || $b;
$d = $a && $b;
$e = $b && $c;
$f = $a || $d;

$logic = array($a, $b, $c, $d, $e, $f,);

echo '<pre>';
  print_r( $logic );
echo '</pre>';
echo '<pre>';
  var_dump( $logic );
echo '</pre>';

if ( 10 < 1) {
  echo '<p>We stopped at if<p>';
} else if ( 10 < 4 ) {
  echo '<p>We stopped at else if</p>';
} else if (10 < 11) {
  echo '<p>We stopped at the second else if</p>';
} else if (10 < 20 ) {
  echo '<p>We stopped at the third else if</p>';
} else {
  echo '<p>None of the conditions were met so we completed the loop by echoing the else statement. </p>';
}

$logged_in = false;

$message = $logged_in ? "Welcome back $name" : "Howdy stranger";

// Option 2 - concatenation
$message2 = "<p>Welcome " . ($logged_in ? " once again" : "new friend");

echo $message;

echo $message2;

// We can output the result directly, without going through a variable. 

$user_name = "<p>Richard</p>";

echo isset( $user_name ) ? $user_name : '<p>Duck';
*/
/*
$trucks_given = 5;

switch ( $trucks_given) {
  case 1:
    echo "Trucks provided: " . $trucks_given;
    break;
  case 2:
    echo "Trucks provided: " . $trucks_given;
    break;
  case 3:
  echo "Trucks provided: " . $trucks_given;
  break;
  default:
    echo '<p> The number of trucks that were given is more than 3';
}

// Bunching Switches together

$items_in_collection = 7;
switch( $items_in_collection ) {
  case 1:
  case 2:
  case 3:
  case 4:
    echo "<p>There are less than five items in the collection";
    break;
  default:
    echo "<p>There are five or more items in the collection";
    }
  ?>
      */
/*
// Number guessing challenge

$to_guess = rand(1,10);
print_r($to_guess);

$guess = (int)readline('Enter a number between 1 and 10: ');

if ($guess != (int)$to_guess) {
  echo '<p>That guess was incorrect, please try again.';
  $guess = (int)readline('Enter a number between 1 and 10: ');
  if ($guess < $to_guess) {
    echo'<p>Too low';
  } else if ($guess > $to_guess and $guess < 11) {
    echo'<p>Too high';
  } else if ($guess <= 0 or $guess >=11) {
    echo '<p>The number is out of range';
  }
} else {
  echo'<p> Great guess, you are right!';
}
*/
/*
$a = (14+82-32/2)**2;
$b = 18 * (3 / 6 -9) * 10;
$c = 5*(12/2 -8 * 4 + 12 * 6);

echo "<p>Display value of a: $a</p>";
echo "<p>Display value of b: $b</p>";
echo "<p>Display value of c: $c</p>";

$calculation_results[] = $a;
$calculation_results[] = $b;
$calculation_results[] = $c;

print_r($calculation_results);
*/
// Got the same result as the course but with a different code layout. 
// Course code below

$result = array();

$results[] = (14 + 82 - (32 / 2) ) ** 2;
$results[] = 18 * ( (3 / 6 ) -9) * 10;
$results[] = 5* ( (12 / 2) - (8 * 4) + (12 * 6));

echo '<pre>';
print_r( $results );
echo '</pre>';

echo (15 % 12)**2;

echo 3**2+5*2;

?>
    <!--
    This script places a badge on your repl's full-browser view back to your repl's cover
    page. Try various colors for the theme: dark, light, red, orange, yellow, lime, green,
    teal, blue, blurple, magenta, pink!
    -->
    <script src="https://replit.com/public/js/replit-badge.js" theme="blue" defer></script> 
  </body>
</html>