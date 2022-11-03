<?php

class UnorderedListBuilder extends RecursiveIteratorIterator
{
  public function beginIteration()
  {
    echo "<ul>\n";
  }

  public function endIteration() 
  {
    echo "</ul>\n";
  }

  public function beginChildren()
  {
    echo "<ul>\n";
  }

  public function endChildren()
  {
    echo "</ul></li>\n";
  }
}

$products = array(
  'Cameras' => array('film', 'digital', 'mobile phone', 'SLR', 'DSLR', 'Mirrorless'),
  'Lenses' => array('Canon', 'Sigma', 'Karl Zeiss', 'Nikon'),
  'Accessories' => array('monopod', 'belt clip', 'tripod', 'filters' => array('circular', 'polarising', 'neutral density', 'UV')));

$products = new RecursiveArrayIterator($products);
$products = new UnorderedListBuilder($products, RecursiveIteratorIterator::SELF_FIRST);

foreach ($products as $category => $item) {
  if ($products->hasChildren()) {
    echo "<li>$category";
  } else {
    echo "<li>$item</li>\n";
  }
}

?>
