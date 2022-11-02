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

echo "<h2>Using the CallbackFilerIterator to Show Beginner Courses.</h2>";
$courses = simplexml_load_file('../standard_library/data/courses.xml', 'simpleXMLIterator');
// $courses = new CallbackFilterIterator($courses, function ($current, $key, $iterator) {
$courses = new CallbackFilterIterator($courses, 'getIntermediate');
//  return strtolower($current->level) == 'beginner';
// });
foreach($courses as $course) {
  echo "$course->title with $course->author (level: $course->level)<br>";
}

function getIntermediate($current) {
  return strtolower($current->level) == 'intermediate';
}

echo "<h2>Using a recursive callback</h2>";
$files = new RecursiveDirectoryIterator('../standard_library');
$files->setFlags(RecursiveDirectoryIterator::SKIP_DOTS);
$files = new RecursiveCallbackFilterIterator($files, function ($current, $key, $iterator) {
  if ($iterator->hasChildren()) {
    return true;
  }
  return $current->getSize() > 1024 * 6;
});
$files = new RecursiveIteratorIterator($files);
foreach ($files as $file) {
  echo $file->getPathname() . ' is ' . round($file->getSize() / 1024, 1) . 'KB<br>';
}

echo "<h2>Using a reusable filter</h2>";
class AuthorFilter extends FilterIterator
{
  protected $author;

  public function __construct(Iterator $iterator, $author)
  {
    parent::__construct($iterator);
    $this->author = $author;
  }

  public function accept()
  {
    return $this->current()->author == $this->author;
  }
}
$courses = simplexml_load_file('../standard_library/data/courses.xml', 'simpleXMLIterator');
$courses = new AuthorFilter($courses, 'David Powers');
foreach ($courses as $course) {
  echo "$course->title with $course->author (duration: $course->duration)<br>";
}

echo "<h2>RecursiveFilterIterator</h2>";

class FilterByExtension extends RecursiveFilterIterator
{
  protected $extensions;

  public function __construct(RecursiveIterator $iterator, $extensions)
  {
    parent::__construct($iterator);
    $this->extensions = is_array($extensions) ? $extensions : (array) $extensions;
  }
  
  public function accept()
  {
    if ($this->hasChildren()) {
      return true;
    }
    // $images = array('png', 'jpg', 'gif', 'webp');
    return $this->current()->isFile() &&
      in_array(strtolower($this->current()->getExtension()), $this->extensions); // $images);
  }

  public function getChildren()
  {
    return new self($this->getInnerIterator()->getChildren(), $this->extensions);
  }
}

$files = new RecursiveDirectoryIterator('.');
$files->setFlags(FilesystemIterator::UNIX_PATHS);
$files = new FilterByExtension($files, array('php', 'jpg', 'md'));
$files = new RecursiveIteratorIterator($files);
foreach ($files as $file) {
  echo $file->getPathname() . '<br>';
}

echo "<h2>Parent Iterator</h2>";
echo "<p>Parent iterator only selects parents, useful for menus and more, where menus use sub folders.</p>";
$dirs = new RecursiveDirectoryIterator('.');
$dirs = new ParentIterator($dirs);
$dirs = new RecursiveIteratorIterator($dirs, RecursiveIteratorIterator::SELF_FIRST);
foreach ($dirs as $dir) {
  echo $dir->getFilename() . '<br>';
}

?>
