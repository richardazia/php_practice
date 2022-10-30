<?php
// Learning the Standard PHP library
$dir = new DirectoryIterator('../standard_library');
$fs = new FilesystemIterator('../standard_library', FilesystemIterator::UNIX_PATHS);
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

foreach ($fs as $key => $file) {
  echo '<p>' . $key . '>> ' .$file . '<br>';
  $files[] = $file;
  if (is_file($file)) {
    echo "<h1>Exploring Files and directories</h1>";
    echo "<h2>Var Dump output</h2>";
    echo "<pre>";
    var_dump($file);
    echo "<pre>";
  }
  echo $files[0]->getFilename();
}



echo "<p>Trying to see the array {$files[0]->getFilename()}";

$recursive_files = new RecursiveDirectoryIterator('../standard_library');
$recursive_files->setFlags(FilesystemIterator::SKIP_DOTS | FilesystemIterator::UNIX_PATHS);
$recursive_files = new RecursiveIteratorIterator($recursive_files, RecursiveIteratorIterator::SELF_FIRST);
$recursive_files->setMaxDepth(4);
foreach ($recursive_files as $file) {
  echo '<p>Unix path and Skip Dots ' . $file . '<br>';
}



?>
