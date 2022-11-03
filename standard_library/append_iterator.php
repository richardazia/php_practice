<?php
class AuthorFilter extends FilterIterator
{
  protected $author;

  public function __construct($iterator, $author)
  {
    parent::__construct($iterator);
    $this->author = $author;
  }

  public function accept()
  {
    return $this->current()->author == $this->author;
  }
}

$courses = simplexml_load_file('../standard_library/data/courses.xml');
$powers = new AuthorFilter($courses, 'David Powers');
$peck = new AuthorFilter($courses, 'Jon Peck');

$courses = new AppendIterator();
$courses->append($peck);
$courses->append($powers);
$previous = '';
foreach ($courses as $course) {
  if ($previous != $course->author) {
    echo "<h2>Courses by $course->author</h2>";
  }
  echo "<p>$course->title <br>";
  $previous = (string) $course->author; // Without string the courses by line appears for each entry. With string it appears once. 
}

?>
