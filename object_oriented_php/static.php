<?php

echo "<h1>Static Modifiers</h1>";

class Diver {

  public static $level = ['bubble maker', 'openwater', 'openwater advanced', 'rescue diver', 'divemaster'];
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

echo Diver::$level[3] . "<br />";
echo Diver::motto() . "<br />";

// echo Diver::$total_students . "<br />"; // Uncaught Error: Access to undeclared static property Diver::$total_students

echo Diver::count() . "<br />";
Diver::add_student();
Diver::add_student();
Diver::add_student();
Diver::add_student();
echo Diver::count() . "<br />";

 ?>
