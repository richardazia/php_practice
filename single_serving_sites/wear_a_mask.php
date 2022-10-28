<?php
// based on code from 4.2 from Kevin Skoglund Easy PHP course on Linkedin Learning
$rainbow = array("Red","Orange","Yellow","Green","Blue","Indigo","Violet");
$rainbow_count = count($rainbow);
$bg_rainbow_colour = $rainbow[rand(0, $rainbow_count-1)];
$text_colour = $rainbow[rand(0, $rainbow_count-1)];
$font_size = (20 + (rand(0,20) * 5));

$alignment = array('center', 'left', 'right', 'justify');
$text_align = $alignment[rand(0,3)];

$styles = array('bold', 'italic', 'underline', 'uppercase');
$style = $styles[rand(0,3)];

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Wear A Mask</title>
    <style type ="text/css">
      body {
        margin: 0;
        padding: 0;
        background: <?php echo $bg_rainbow_colour;?>;
        color: <?php echo $text_colour;?>;
        font-size: <?php echo $font_size;?>px;
        text-align: <?php echo $text_align;?>;
        <?php
        switch($style){
          case 'bold':
            echo "font-weight: bold;";
            break;
          case 'italic':
            echo "font-style: italic;";
            break;
          case 'underline':
            echo "text-decoration: underline;";
            break;
          case 'uppercase':
            echo "text-transform: uppercase;";
            break;
          }
        ?>
      }

    </style>
  </head>
<body>
  <h1>Wear A Mask</h1>
  <h2>Wear A Mask</h2>
  <p>Wear A Mask</p>
</body>
</html>
