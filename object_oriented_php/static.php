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


 ?>
