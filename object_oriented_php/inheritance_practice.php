<?php

class Blog_Post {

  var $title;
  var $date_published;
  var $content;
  var $creation_date;
  var $author;

  function published() {
    return $this->title . " was published on " . $this->date_published;
  }
}

class BikeRide extends Blog_post {
  var $start_location;
  var $end_location;
  var $distance;

  function ride_summary() {
  return "The bike ride started in " . $this->start_location . " and continued on to " . $this->end_location . " for a distance of " . $this->distance . " kilometres.";
  }
}

$a_post = new Blog_Post;
$a_post->title = "The blog post";
$a_post->date_published = "2022-10-13";
$a_post->content = "The quick brown fox jumped over the lazy dog last night. The dog had just finished herding sheep. ";
$a_post->creation_date = "2022-10-13";
$a_post->author = "Richard A.";

$bike_ride = new BikeRide;
$bike_ride->title = "The blog post";
$bike_ride->date_published = "2022-10-13";
$bike_ride->content = "The quick brown fox jumped over the lazy dog last night. The dog had just finished herding sheep. ";
$bike_ride->creation_date = "2022-10-13";
$bike_ride->author = "Richard A.";
$bike_ride->start_location = "Nyon";
$bike_ride->end_location = "Geneva";
$bike_ride->distance = 24;

echo $a_post->published() . '<br />';
echo $bike_ride->ride_summary() . '<br />';

 ?>
