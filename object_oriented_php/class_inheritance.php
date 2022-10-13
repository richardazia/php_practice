<?php

class Blogger{

  var $first_name;
  var $last_name;
  var $username;
  var $nickname;
  var $is_admin = false;

  function full_name() {
    return $this->first_name . " " . $this->last_name;
  }

}

class Customer extends Blogger {

  var $village;
  var $canton;
  var $country;

  function location() {
    return $this->village . ", " . $this->canton . ", " . $this->country . ". ";
  }
}

class AdminUser extends Blogger {
  var $is_admin = true;
  function full_name() {
    return $this->first_name . " " . $this->last_name . " " . $this->is_admin . "(admin)";
  }
}

$fc = new Blogger;
$fc->first_name = 'Frasier';
$fc->last_name = 'crane';
$fc->nickname = 'I am listening';

$nc = new Customer;
$nc->first_name = 'Niles';
$nc->last_name = 'crane';
$nc->nickname = 'Niles';
$nc->village = 'Seattle';
$nc->canton = 'Washington';
$nc->country = 'United States of America ';

$ac = new AdminUser;
$ac->first_name = "I am";
$ac->last_name = "the walrus";

echo $fc->full_name() . '<br />';
echo $nc->full_name() . '<br />';
echo "<hr>";
echo $nc->location() . '<br />';

echo get_parent_class($fc) . '<br />';
echo get_parent_class($nc) . '<br />';

// To check
echo "<hr>";
if(is_subclass_of($nc, 'Blogger')) {
  echo 'nc is a sublass of Blogger. <br />';
}

$parents = class_parents($nc);
echo implode(', ', $parents) . '<br />';

echo "<pre>";
echo $ac->full_name() . "<br />";
echo "<pre>";

 ?>
