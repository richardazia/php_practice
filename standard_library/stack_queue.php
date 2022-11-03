<?php 

$weekday = new SplStack();
$weekday[] = 'Monday';
$weekday->push('Tuesday');
$weekday->push('Wednesday');
$weekday[] = 'Thursday';
$weekday[] = 'Friday';

$harmonica = new SplQueue();
$harmonica->enqueue('Hering');
$harmonica->enqueue('Hohner');
$harmonica->push('Lee Oskar');
$harmonica[] = 'suzuki';
$harmonica[] = 'Seydel';

echo '<h2>Stack</h2>';
foreach ($weekday as $day) {
  echo $day . ', ';
}

echo '<h2>Queue</h2>';
foreach ($harmonica as $brand) {
  echo $brand . ',  ';
}

echo '<hr>';

echo '<p>Playing with stack popping: ' . $weekday->pop() .'<br>';
echo '<p>Playing with dequeue popping: ' . $harmonica->dequeue() .'<br>';

// Queue
$harmonica->SetIteratorMode(SplQueue::IT_MODE_DELETE | SplQueue::IT_MODE_FIFO);

// Stack
$weekday->setIteratorMode(SplStack::IT_MODE_DELETE | SplStack::IT_MODE_LIFO);

echo '<br><br>';
if ($weekday->isEmpty() && $harmonica->isEmpty()) {
  echo 'both queue and stack have been emptied';
}
