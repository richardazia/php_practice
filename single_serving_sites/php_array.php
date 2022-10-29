<?php
// array rand($array)
// returns a random key from an array.
$fragments = array(
  'jumped over the lazy dog',
  'played the harmonica all night long',
  'wrote a poem for a lazy dog',
  'cooked some dinner',
);

$names = array(
  'Richard',
  'John',
  'Mélodie',
  'Jane',
  'Kevin',
);

$sections = array(
  'history',
  'geography',
  'physics',
  'English',
  'Maths',
);

$weekday = array(
  'Monday',
  'Tuesday',
  'Wednesday',
  'Thursday',
  'Friday',
);

$i = array_rand($fragments);

$sentence = 'The quick brow fox ' . $fragments[$i] . '.';

$study = "Hello {$names[$i]}, you will study {$sections[$i]} every {$weekday[$i]}";

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Random sentences</title>
    <style type="text/css">
    body {
      margin: 5px;
      background: #EEE;
      font-size: 40px;
      font-weight: bold;
      text-align: left;
      text-transform: uppercase;
    }

    p, a {
      color: black;
    }
    </style>
  </head>
  <body>
    <p><?php echo $sentence; ?><p>
    <p><?php echo $study; ?><p>
  </body>
</html>
