<?php

echo "<h1>Static Modifiers</h1>";

class Diver {

  public static $levels = ['bubble maker', 'openwater', 'openwater advanced', 'rescue diver', 'divemaster'];
  private static $total_students = 0;

  public static function motto() {
    return "To learn PHP OOP!";
  }

  public static function count() {
    return self::$total_students;
  }

  public static function add_student() {
    self::$total_students++;
  }
}

echo Diver::$levels[3] . "<br />";
echo Diver::motto() . "<br />";

// echo Diver::$total_students . "<br />"; // Uncaught Error: Access to undeclared static property Diver::$total_students

echo Diver::count() . "<br />";
Diver::add_student();
Diver::add_student();
Diver::add_student();
Diver::add_student();
echo Diver::count() . "<br />";

// Static methods and properties are inherited
class SeasonalDiver extends Diver {

}

echo SeasonalDiver::$levels[0] . "<br />";
echo SeasonalDiver::motto() . "<br />";

// These are mutable, so changes to one affect all.

SeasonalDiver::$levels[] = 'CMAS *';
SeasonalDiver::$levels[] = 'CMAS **';
SeasonalDiver::$levels[] = 'CMAS ***';
echo implode(', ', Diver::$levels);
echo "<br />";

Diver::add_student();
Diver::add_student();
Diver::add_student();
SeasonalDiver::add_student();
echo Diver::count() . "<br />";
echo SeasonalDiver::count() . "<br />";

echo "<h2>Constants</h2>";

class Clock {

  public const DAY_IN_SECONDS = 60 * 60 * 24;

  public function tomorrow() {
    // we need to have self:: because it behaves like this. in javascript. It tells the code where to find the variables
    return time() + self::DAY_IN_SECONDS;
  }

}

echo Clock::DAY_IN_SECONDS . " seconds in a 24 hour day. <br />";

$clock = new Clock;
echo $clock->tomorrow() . "<br />";

 ?>
