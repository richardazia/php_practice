// This code is copied or slightly modified from the Kevin Skoglund Course: Easy PHP projects, single-Serving Sites available on Linkedin Learning.

<?php

echo "<pre>";
print_r($_SERVER);
echo "<pre>";

echo "<p>Your IP address is: " . $_SERVER['REMOTE_ADDR'];
echo "<p>Your remote port is: " . $_SERVER['REMOTE_PORT'];

function forwarded_ip() {

  //Spoof forwarding
  $server = array(
    'HTTP_X_FORWARDED_FOR' => '192.168.1.232',
    'HTTP_X_FORWARDED' => '192.167.12.32',
  );

  // Check for forwarding
  $keys = array(
    'HTTP_X_FORWARDED_FOR',
    'HTTP_X_FORWARDED',
    'HTTP_X_FORWARDED_FOR',
    'HTTP_X_FORWARDED',
    'HTTP_CLIENT_IP',
    'HTTP_X_CLUSTER_CLIENT_IP',
  );

  foreach($keys as $key) {
    // Spoof
    if(isset($server[$key])) {
    // production
    // if(isset($_SERVER[$key])) {
      // Spoof
      $ip_array = explode(', ', $server[$key]);
      //production
      // $ip_array = explode(', ', $_SERVER[$key]);
      foreach($ip_array as $ip) {
        $ip = trim($ip);
        return $ip;
      }
    }
  }
  return 'None';
}

echo "<p>The Forwarded IP is: " . forwarded_ip();

?>
