<?php
// Learning the Standard PHP library
$dir = new DirectoryIterator('../standard_library');
// foreach ($dir as $file) {
foreach ($dir as $key => $file) {
  if (is_file($file)) {
    echo "<h1>Exploring Files and directories</h1>";
    echo "<h2>Var Dump output</h2>";
    echo "<pre>";
    var_dump($file);
    echo "<pre>";
    echo "<h2>Files in the directory</h2>";
    echo "<p>{$file->getPathname()}</p>";
    $files[] = clone $file;
  }
}

echo "<p>Trying to see the array {$files[0]->getFilename()}";
