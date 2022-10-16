<?php

class Harmonica {
  protected static $identity = 'Harmonica Class';

  public static function identity_test() {
    echo 'self: ' . self::$identity . "<br />";
    echo 'static: ' .static::$identity . "<br />";

    echo 'get_class: ' . get_class() . "<br />";
    echo 'get_called_class: ' .get_called_class() . "<br />";
  }
}

class LittleLady extends Harmonica {
  protected static $identity = "Gemini 6 Harmonica";
}

Harmonica::identity_test();
echo "<hr>";
LittleLady::identity_test();

class Laptop {
  protected static $identity = "HP ProBook";

  public static function identity_test() {
    echo 'self: ' .self::$identity . "<br />";
    echo 'static: ' . self::$identity ."<br />";

    echo 'get_class: ' . get_class() . "<br />";
    echo 'get_called_class: ' . get_called_class() . "<br />";
  }
}

class MacBookPro extends Laptop {
  protected static $identity = "Mac Book Pro 2016";
}
echo "<hr>";
Laptop::identity_test();
echo "<br>";
MacBookPro::identity_test();
echo "<hr>";

class Book {
  protected static $identity = "Generic book";

  public static function identity_test() {
    echo 'self: ' .self::$identity . "<br />";
    echo 'static: ' . self::$identity ."<br />";

    echo 'get_class: ' . get_class() . "<br />";
    echo 'get_called_class: ' . get_called_class() . "<br />";
  }
}

class PHP_And_MySQL_For_Dummies extends Book {
  protected static $identity = "PHP & MySQL for dummies is the most relevant book";
}

echo "<hr>";
Book::identity_test();
echo "<br>";
PHP_And_MySQL_For_Dummies::identity_test();
echo "<hr>";
 ?>
