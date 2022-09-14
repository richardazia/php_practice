<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php 
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

echo "<h1>$name</h1> was out $sport by a <i>$effort</i> landscape when he <b>$mishap</b> before coming to an $result stop."


  ?>
    <!--
    This script places a badge on your repl's full-browser view back to your repl's cover
    page. Try various colors for the theme: dark, light, red, orange, yellow, lime, green,
    teal, blue, blurple, magenta, pink!
    -->
    <script src="https://replit.com/public/js/replit-badge.js" theme="blue" defer></script> 
  </body>
</html>