<?php
echo "<h1>Read a CSV file with ease</h1>";
$csvfile = new SplFileObject('../standard_library/data/cars.csv');
$csvfile->setFlags(SplFileObject::READ_CSV);
foreach ($csvfile as $line) {
  $cars[] = $line;
}

echo '<pre>';
print_r($cars);
// echo '</pre>;

echo "<h2>Read a CSV with tab seperated values</h2>";
$tab_csv_file = new SplFileObject('../standard_library/data/cars_tab.csv');
$tab_csv_file->setFlags(SplFileObject::READ_CSV);
$tab_csv_file->setCsvControl("\t");
foreach ($tab_csv_file as $line) {
  $cars[] = $line;
}

echo '<pre>';
  print_r($cars);

?>
