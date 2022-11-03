<?php
$products = array(
  'Cameras' => array('film', 'digital', 'mobile phone', 'SLR', 'DSLR', 'Mirrorless'),
  'Lenses' => array('Canon', 'Sigma', 'Karl Zeiss', 'Nikon'),
  'Accessories' => array('monopod', 'belt clip', 'tripod', 'filters' => array('circular', 'polarising', 'neutral density', 'UV')));

$products = new RecursiveArrayIterator($products);
$products = new RecursiveCachingIterator($products, CachingIterator::TOSTRING_USE_KEY);
$products = new RecursiveIteratorIterator($products, RecursiveIteratorIterator::SELF_FIRST);

foreach ($products as $category => $item) {
  $level = $products->getDepth() + 2;
  if ($products->hasChildren()) {
    echo "<h$level>$category</h$level>";
  } else {
    if (!$products->hasNext()) {
      echo 'Last, but not least: ';
    }
    echo $item . '<br>';
  }
}
?>
