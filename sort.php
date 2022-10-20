<?php

$villages = array("Luins", "Bursins", "Coppet", "Les Marecottes", "Thonex", "St George");
sort($villages);
foreach ($villages as $key => $val) {
    echo "<p>villages[" . $key . "] = " . $val;
}

$petit_train_rouge = array("St-Cergue", "La Chèvrerie-Monteret", "Arzier", "Bassins", "Le Muids", "La Joy-Clinique", "Sus-Châtel", "Genolier", "Givrins", "Trelex", "Asse", "Nyon");
echo "<pre>";
print_r($petit_train_rouge);
echo "</pre>";
sort($petit_train_rouge);
foreach ($petit_train_rouge as $key => $val) {
  $key = $key++;
  echo "<li>Train stop: " . $key . " -> " .$val;
}


$birds = array("Chicken", "Duck", "Goose", "Heron", "Flamingo", "Eagle", "woodpecker", "chicken", "dodo", "emu", "austrich");
sort($birds, SORT_STRING | SORT_FLAG_CASE); // This sorts it by alphabetical and case
// $rbirds = rsort($birds);

$words = array("walking", "a", "the", "it", "then", "those", "these", "geraniums", "mud", "flame", "ox", "kudu");
echo "<pre>";
print_r($words);
echo "</pre>";
echo "<hr>";
sort($words, SORT_STRING | SORT_FLAG_CASE);
echo "<pre>";
print_r($words);
echo "</pre>";
$some_numbers = array(4,3,2,5,6,4,3,2,1,8,5,);
sort($some_numbers, SORT_NUMERIC);
echo "<h2>Birds</h2>";
print_r($birds);
echo "<h2>Some numbers</h2>";
echo "<pre>";
print_r($some_numbers);
echo "</pre";

echo "<h2>Sports</h2>";
$sports = array("running", "swimming", "cycling", "scuba diving", "skating", "canyoning", "table tennis");
shuffle($sports);
echo "<pre>";
print_r($sports);
echo "</pre>";

// Shuffle a range of numbers

$numbers = range(1,30);
shuffle($numbers);
foreach ($numbers as $number) {
    echo "$number, ";
}

var_dump(count($numbers));
