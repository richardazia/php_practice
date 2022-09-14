<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php 
      $age = 40;
      $name = 'Richard';
      $continent = 'Europe';
      echo "Good Morning, $name, in $continent";
      echo 'Good Morning, ' . $name . 'in ' . $continent;
      echo "\nThis is line 1\n";
      echo "This is line 2\n";
      echo "\t this is line three, tabbed";
      echo "The quick brown fox
            jumped over the fence to 
            get to the lazy dog.";
echo "This string spans
multiple lines. The newlines will be
output as well";
echo "This string spans\nmultiple lines. The newlines will be\noutput as well.";


  ?>
    <?php echo '<h1>Hello World</h1>'?>
    <?php echo '<h2>Good Morning</h2>'?>
    <?php echo '<p>Hello World</p>'; ?> 
    <?php echo $age ?>
    <?php echo $name ?>
    <?php echo $continent ?>

    <!--
    This script places a badge on your repl's full-browser view back to your repl's cover
    page. Try various colors for the theme: dark, light, red, orange, yellow, lime, green,
    teal, blue, blurple, magenta, pink!
    -->
    <script src="https://replit.com/public/js/replit-badge.js" theme="blue" defer></script> 
  </body>
</html>