<?php
$rates = array(
  array('currency' => 'Australia $', 'rate' => 0.56),
  array('currency' => 'Canada $', 'rate' => 1.37),
  array('currency' => 'Euro €', 'rate' => 1.01),
);

if (isset ($_POST['download'])) {
  $titles = array_keys($rates[0]);
  $file = new SplTempFileObject();
  $file->fputcsv($titles);
  foreach ($rates as $currency) {
    $file->fputcsv($currency);
  }
  $file->rewind();
  header('Content-Type: text/csv');
  header('Content-Disposition: attachment;filename=rates.csv');
  $file->fpassthru();
  exit;
}

?>

<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Practice with PHP downloading</title>
</head>
<body>
<h1>CHF exchange rate</h1>
<table>
  <tr>
    <th>Currency</th>
    <th>Rate (1CHF)</th>
  </tr>
  <?php 
  foreach ($rates as $row) { ?>
    <tr>
      <td>
        <?= $row['currency']; ?>
      </td>
      <td>
        <?= number_format($row['rate'], 5); ?>
      </td>
    <tr>
  <?php } ?>
</table>
<form method="post" action="<?= $_SERVER['PHP_SELF']; ?>">
  <input type="submit" name="download" value="Download rates">
</form>
</body>
</html>
