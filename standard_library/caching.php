<?php 
$courses = simplexml_load_file('../standard_library/data/courses.xml');
foreach ($courses as $course) {
	echo "<h2>$course->title</h2>";
	echo "<p>$course->description</p>";
	$software = $course->software->children();
	$num_software = $software->count();
	echo '<p>Software used: ';
	if ($num_software == 1) {
		echo "$software.</p>";
	} elseif ($num_software == 2 ){
		echo "$software[0] and $software [1].</p>";
	} elseif ($num_software > 2) {
    $software = new CachingIterator($software);
    foreach ($software as $type) {
      if ($software->hasNext()) {
        echo "$type, ";
      } else {
        echo "and $type.</p>";
      }
    }
	}
}
