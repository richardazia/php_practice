<?php

function setPriority($line) {
  $start = strpos($line, 'PHP');

  $end = strpos($line, ':' , $start);

  $error = substr($line, $start, $end-$start);

  switch ($error) {
    case 'PHP Fatal error':
      return 10;
    case 'PHP Warning':
      return 8;
    case 'PHP Deprecated':
      return 7;
    case 'PHP Parse error':
      return 5;
    case 'PHP Notice':
      return 2;
    default:
      return 0;
  }
}

$log = newSplPriorityQueue();
$file = new SplFileObject('tbc');
while (!$file->eof()) {
  $line = $file->fgets();
  $log->insert($line, setPriority($line));
}
while (!log->isEmpty()) {
  echo $log->extract() . '<br>';
}

?>
