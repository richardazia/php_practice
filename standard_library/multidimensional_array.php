<?php

$products = array(
  'Cameras' => array('film', 'digital', 'mobile phone', 'SLR', 'DSLR', 'Mirrorless'),
  'Lenses' => array('Canon', 'Sigma', 'Karl Zeiss', 'Nikon'),
  'Accessories' => array('monopod', 'belt clip', 'tripod', 'filters' => array('circular', 'polarising', 'neutral density', 'UV')));

$products = new RecursiveArrayIterator($products);
$products = new RecursiveIteratorIterator($products, RecursiveIteratorIterator::SELF_FIRST);
foreach ($products as $category => $item) {
  if ($products->hasChildren()) {
    echo "<b>" .$category . '</b><br>';
  } else {
    echo '<i>' . $item . '</i><br>';
  }
}


?> 
