<?php
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


$courses = file_get_contents('../standard_library/data/courses.json');
$courses = json_decode($courses);
echo "<pre>";
print_r($courses);
echo "</pre>";
// For this code to work we need to add the array iterator.
$courses = new ArrayIterator($courses);
$courses = new AuthorFilter($courses, 'David Powers');
foreach ($courses as $course) {
  echo "$course->title with $course->author (duration: $course->duration)<br>";
}

?>
