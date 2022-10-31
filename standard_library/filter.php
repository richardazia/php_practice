<?php
echo "<h1>Playing With Filters</h1>";
echo "<h2>The PHP files are the following:</h2>";
// __DIR__ is a constant so that this code will work across OSes.
$files = new GlobIterator(__DIR__ . '/../standard_library/*.php');
foreach ($files as $file) {
  echo $file->getFilename() . '<br>';
}

$regex_files = new RecursiveDirectoryIterator('.', filesystemIterator::UNIX_PATHS);
$regex_files = new RecursiveIteratorIterator($regex_files);
$regex_files = new RegexIterator($regex_files, '/\.(?:php|txt)$/i');
echo "<h2>Using Regex</h2>";
foreach ($regex_files as $file) {
  echo $file->getPathname() . '<br>';
}

echo "<h2>And now to load some xml data</h2>";
$courses = simplexml_load_file('../standard_library/data/courses.xml', 'SimpleXMLIterator');
// $courses = new SimpleXMLIterator($courses);
$courses = new LimitIterator($courses, 0, 10); // this limits the results to the first ten
foreach ($courses as $course) {
    echo $courses-> getPosition() + 1 . ". " .  $course->title . ' with ' . ' (Duration: ' . $course->duration. ')<br>';
}

