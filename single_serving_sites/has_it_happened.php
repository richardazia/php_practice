<title>Has it Happened Yet</title>

<style type="text/css">
body {
  margin: 0;
  padding: 0;
  /* background: #DFCC89; */
}

#main-content {
  margin:30px;
  text-align: center;
  /* color: #3D2399; */
}

#main-content h1 {
  font: 40px Arial, Helvetica, sans-serif;
}
</style>

<?php

$time = time();

// // Experiment
// $epoch = time();
// echo(date("Y-m-d",$epoch)) . "<br />";

echo(date("Y-m-d",$time)) . "<br />";
echo "<br />";

$event = strtotime("10 September 2025");
$time_remaining_epoch = $event - $time;
echo "<p>" . $time_remaining_epoch;
$time_remaining_human = (date("Y-m-d",$time_remaining_epoch));
echo "<p>" . $time_remaining_human; // this does not work as desired yet. 
$event = (date("Y-m-d",$event));
if(time() >= $event) {
  echo "<p>Yep, the event has happened";
} else {
  echo "The event has not happened yet. It should happen on {$event}";
}


?>

<form action="" method="get">
  Enter a Date To See If Something Has Happened Yet.
  <input type="text" name="event" value="<?php echo $event; ?>" />
  <input type="submit" value="Submit" />
</form>
