<?php require 'variables.php'; ?>
<html>
  <head>
    <title><?php echo $title;?> </title>
  </head>
  <body>
    <h1><?php echo $title;?></h1>
    <p><?php echo $description; ?>
    <p>Code along with Joe Casabona - </p>
    <p>php -S localhost:8000</<p>
    
    <?php
    echo '<p><a href="about.php">about</a>';
    echo '<p><a href="contact.php">Contact</a>';
    echo '<p><a href="throw.php">Throw</a>'; 
    echo '<p><a href="sort.php">Sort</a>';
    echo '<p><a href="learning_php_course_files/08_02_basic">Form</a>';
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
/*
$result = array();

$results[] = (14 + 82 - (32 / 2) ) ** 2;
$results[] = 18 * ( (3 / 6 ) -9) * 10;
$results[] = 5* ( (12 / 2) - (8 * 4) + (12 * 6));

echo '<pre>';
print_r( $results );
echo '</pre>';

echo (15 % 12)**2;

echo 3**2+5*2;
*/

// PHP Loop

// $i = 0;
/*
do {
  echo "<p>$i iterations</p>";
    $i++;
} while ( $i < 10 );
*/
// Slightly different
/*
while ( $i < 10)  {
       echo "<p>$i</p>";
       $i++;
}
echo "<p>The For Loop</p>";
for ( $i = 0; $i < 10; $i++) {
  echo "<p>$i</p>";
}
echo "<h3>Display the Colours of the Rainbow</h3>";
*/

$colours = array('red', 'orange', 'green', 'blue', 'indigo', 'violet');

$colors = array('red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'violet');
/*
$c = 0;
for( $c = 0; $c < sizeof($colours); $c++) {
  echo "<p> $colours[$c]</p>";
}
*/
// The same but with a foreach loop
/*
foreach( $colors as $color ) {
  echo "<p>$color</p>";
}
echo "<p>Colour</p>";
foreach( $colours as $colour ) {
  echo "<p>$colour</p>";
}

$week_day = array(
  'Monday' => 'sunny',
  'Tuesday' => 'rainy',
  'Wednesday' => 'tropical heat',
  'Thursday' => 'foggy',
  'Friday' => 'windy and rainy',
  'Saturday' => 'changeable weather',
  'Sunday' => 'snowing',
);
// Foreach loop with an associative array. 

foreach ( $week_day as $day => $weather ) {
  echo "<p>$day is going to be $weather</p>";
}
*/

// Fibonacci Sequence

// From 1 to 200
// modelled from https://www.plus2net.com/php_tutorial/fibonacci-series.php
/*
$n1 = 1;
$n2 = 0;

for ( $i = 0; $i <= 12; $i++) {
     echo "<p>$n2</p>";
  $temp = $n1 + $n2;
  $n1 = $n2;
  $n2 = $temp;
}
*/
/*
// Course solution, using while loop
$current = 1;
$previous = 0;
$next = null;
$limit = 200;
$sequence = '';

while ($current < $limit ) {
//  echo $current . ", ";
  $sequence .= $current . ', ';
  $next = $current + $previous;
  $previous = $current;
  $current = $next;
}

$sequence = trim( $sequence ); // remove white spaces
$sequence = substr( $sequence, 0, strlen( $sequence)-1); // to remove trailing comma. 
echo "<pre>";
echo $sequence;
echo "</pre>";

// Quick example of using the date
// no need to import plugins with php
echo date( 'd F, Y');

// The Palindrom Function

function is_palindrome( $string ) {
//  $string = strtolower( $string );
//  $string = str_replace( ' ', '', $string);
  $string = str_replace( ' ', '', strtolower( $string )); 
  
//  $pal_check = ( $string == strrev( $string ) );
  return ( $string == strrev( $string ) );
}

$check_string = 'Wow';

if ( is_palindrome( $check_string ) ) {
    echo "<p>$check_string is a palindrome</p>";
}
*/

// Anonymous Functions

$villages = array( 'Duiller', 'Coppet', 'Borex', 'Genolier', 'Bursins'); 

usort( $villages, function($a, $b) {
  return $a[1] <=> $b[1];
});

// Objects
/*
class Person {
  // This code is no longer required for object creation
  // var $name;
  // var $age;
  // var $birthday = false;

  // The constructor
  function __construct( $name, $age) {
    $this->name = $name;
    $this->age = $age;
  }

  public function get_name() {
    return $this->name;
  }

  public function get_age() {
    return $this->age;
  }

  public function set_name ( $new_name) {
    $this->name = $new_name;
  }

  public function set_birthday( $b ) {
    $this->birthday = $b;
    $this->update_age();
  }

  private function update_age() {
    $this->age = ($this->birthday) ? ++$this->age : $this->age;
  }
}

$brita = new Person( 'Brita', 62 );
$laptop = new Person( 'laptop', 7);
echo "<br>---- Output ----</br>";
echo $brita->get_name() . '</br>';
echo $brita->get_age() . '</br>';
echo $laptop->get_name() . '</br>';
echo $laptop->get_age() . '</br>';


// Returns an error as the function is private.
// $brita->set_birthday(true);
// $brita->update_age();
// $brita->get_age();

echo "Brita's updated age: ";
$brita->set_birthday(true);
echo $brita->get_age();

echo '<p><a href="namespace.php">namespace</a>' 
*/

// Course solution for sort

class Person {
  var $first_name;
  var $last_name;

  // The constructor
  function __construct( $first_name, $last_name) {
    $this->first_name = $first_name;
    $this->last_name = $last_name;
  }

  public function get_first_name() {
    return $this->first_name;
  }

  public function get_last_name() {
    return $this->last_name;
  }

}

$joe = new Person( 'Joe', 'Casabona' );
$steve = new Person( 'Steve', 'Wozniak');
$logic = new Person( 'Logic', 'Gates');
$melinda = new Person( 'Melinda', 'Gates');
$bill = new Person( 'Bill', 'Gates');
$igor = new Person('Igor', 'Sikorsky');

$people = array ($logic, $joe, $steve, $melinda, $bill, $igor);
echo "<p>Challenge solution</p>";
echo "<br>";
usort( $people, function($a, $b) {
  // Option 1: 
  // return $a->get_last_name() <=> $b->get_last_name();
  // Option 2: 
  return [$a->get_last_name(), $a->get_first_name()] <=> [$b->get_last_name(), $b->get_first_name()];
});

print_r( $people ); 
?>

<pre>
  <?php print_r( $villages ); ?>
</pre>


  </body>
</html>