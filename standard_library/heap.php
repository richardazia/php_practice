<?php

$animals = array('elephant', 'lemming', 'rabbit', 'cow', 'wildebeeste', 'hippo', 'cat', 'fox');

$min = new SplMinHeap();
foreach ($animals as $animal) {
  $min->insert($animal);
}

echo $min->top() . '<br>';
echo $min->next() . '<br>';
echo $min->current() . '<br>';


echo "<p>Traversing these heaps is destructive.</p>";
foreach ($min as $item) {
  echo $item . '<br>';
}


$max = new SplMaxHeap();
foreach ($animals as $animal) {
  $max->insert($animal);
}

echo '<pre>';
print_r($min);
print_r($max);
echo '<pre>';
