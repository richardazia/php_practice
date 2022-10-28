<?php
// based on code from 4.2 from Kevin Skoglund Easy PHP course on Linkedin Learning
$rainbow = array("Red","Orange","Yellow","Green","Blue","Indigo","Violet");
$rainbow_count = count($rainbow);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Rainbow Colours</title>
    <style type ="text/css">
      body {
        margin: 0;
        padding: 0;
        background: <?php echo $rainbow[rand(0, $rainbow_count-1)];?>
      }

      .area {
        float: left;
        margin: 0;
        padding: 0;
        width: 100px;
        height: 100px;
      }
      #area1 {
        background: <?php echo $rainbow[rand(0, $rainbow_count-1)];?>
      }
    </style>
  </head>
<body>
  <div class="area" id="area1"></div>
  <div class="area" id="area2" style="background: <?php echo $rainbow[rand(0, $rainbow_count-1)];?>"></div>
  <div class="area" id="area3" style="background: <?php echo $rainbow[rand(0, $rainbow_count-1)];?>"></div>
  <div class="area" id="area4" style="background: <?php echo $rainbow[rand(0, $rainbow_count-1)];?>"></div>
  <div class="area" id="area5" style="background: <?php echo $rainbow[rand(0, $rainbow_count-1)];?>"></div>
  <div class="area" id="area6" style="background: <?php echo $rainbow[rand(0, $rainbow_count-1)];?>"></div>
  <div class="area" id="area7" style="background: <?php echo $rainbow[rand(0, $rainbow_count-1)];?>"></div>


<?php
// What we see above can be done with a foreach loop
  $squares = 60;
  for($i=0; $i < $squares; $i++) {
    echo "<div class=\"area\" id=\"area2\" style=\"background: {$rainbow[rand(0, $rainbow_count-1)]}\"></div>";
  }
  ?>
</body>
</html>
