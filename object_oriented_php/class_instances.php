<?php
class Harmonica {

}

$harmonica1 = new Harmonica; 
$harmonica2 = new Harmonica;

echo get_class($harmonica1) . "<br />";

$class_names = ['Product', 'Harmonica', 'harmonica'];
foreach($class_names as $class_name) {
    if(is_a($harmonica1, $class_name)) {
        echo "harmonica1 is a {$class_name}.<br />"; 
    } else {
        echo "harmonica1 is not a {$class_name}.<br />"; 
    }
}

?>