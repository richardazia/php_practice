<?php

class Blogger{

  var $first_name;
  var $last_name;
  var $username;
  var $nickname;

  function full_name() {
    return $this->first_name . " " . $this->last_name;
  }

}

class Customer extends Blogger {

}

$fc = new Blogger;
$fc->first_name = 'Frasier';
$fc->last_name = 'crane';
$fc->nickname = 'I am listening';

$nc = new Customer;
$nc->first_name = 'Niles';
$nc->last_name = 'crane';
$nc->nickname = 'Niles';

echo $fc->full_name() . '<br />';
echo $nc->full_name() . '<br />';

echo get_parent_class($fc) . '<br />';
echo get_parent_class($nc) . '<br />';

// To check
if(is_subclass_of($nc, 'Blogger')) {
  echo 'nc is a sublass of Blogger. <br />';
}

$parents = class_parents($nc);
echo implode(', ', $parents) . '<br />';

 ?>
