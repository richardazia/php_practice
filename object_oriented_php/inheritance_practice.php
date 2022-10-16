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

class Hike extends blog_post {
  var $start_location;
  var $end_location;
  var $step_count;
  var $distance;
  var $duration;

  function hike_summary() {
    return "The walk started in " . $this->start_location . " and finished in " . $this->end_location . ". It took " . $this->duration . "minutes, and " . $this->step_count . " many steps";
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

$Hike = new Hike;
$Hike->title = "The Hike Post";
$Hike->date_published = "2022-10-16";
$Hike->content = "The quick brown fox jumped over the lazy dog last night. The dog had just finished herding sheep. ";
$Hike->creation_date = "2022-10-16";
$Hike->author = "Richard A.";
$Hike->start_location = "Nyon";
$Hike->end_location = "Trelex";
$Hike->step_count = 14263;
$Hike->distance = 10;
$Hike->duration_minutes = 94;

echo $a_post->published() . '<br />';
echo $bike_ride->ride_summary() . '<br />';
echo $Hike->hike_summary() . '<br />';

 ?>
