<?php
  // You can simulate a slow server with sleep
  // sleep(2);

  function is_ajax_request() {
    return isset($_SERVER['HTTP_X_REQUESTED_WITH']) &&
      $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest';
  }

  if(!is_ajax_request()) {
    exit;
  }

  function starts_with($choice, $query) {
    return strpos($choice, $query) === 0;
  }

  function contains($choice, $query) {
    return strpos($choice, $query) !== false;
  }


  function search($query, $choices) {
    $matches = [];

    $d_query = strtolower($query);

    foreach($choices as $choice) {
      $d_choice = strtolower($choice);
      if(starts_with($d_choice, $d_query)) {
        $matches[] = $choice;
      }
    }

    return $matches;
  }

  $query = isset($_GET['q']) ? $_GET['q'] : '';

  // find and return search suggestions as JSON

  $choices = file('https://raw.githubusercontent.com/dwyl/english-words/60eb05a1285cae4ff306f0d9dcea407490cf2a99/words_alpha.txt', FILE_IGNORE_NEW_LINES);
  $suggestions = search($query, $choices);

  echo json_encode($suggestions);
?>
