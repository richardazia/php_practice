<?php

// This code is copied or slightly modified from the Kevin Skoglund Course: Easy PHP projects, single-Serving Sites available on Linkedin Learning.
echo "<h1>Random server related information</h1>";
echo "<pre>";
print_r($_SERVER);
echo "<pre>";

echo "<p>Your IP address is: " . $_SERVER['REMOTE_ADDR'];
echo "<p>Your remote port is: " . $_SERVER['REMOTE_PORT'];
echo "<p>UNIX request time: " . $_SERVER['REQUEST_TIME'];

date_default_timezone_set("Europe/Paris");
echo "<p>The time is " . date("h:i:sa");

echo "<h2>Browser screen info</h2>";
echo "<p>Browser window width:<span id='window-width'></span></p>";
echo "<p>Browser window width:<span id='window-height'></span></p>";

echo "<h2>Forwarded ip</h2>";
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
        if(validate_ip($ip)) {
          return $ip;
        }
      }
    }
  }
  return 'None';
}

// https://www.php.net/manual/en/filter.filters.flags.php for more info about the flags.

function validate_ip($ip) {
  if(filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4 | FILTER_FLAG_IPV6 |FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) == false) {
    return false;
  } else {
    return true;
  }
}

echo "<p>The Forwarded IP is: " . forwarded_ip();

//Check if validate ip is valid
if(validate_ip('1.1.1.1,2.2.2.2,193.168.1.1')) {
  echo '<p>This is a valid IP address';
} else {
  echo '<p>This is not a valid IP address';
}

if(isset($_SERVER['HTTPS'])) {
  echo '<p>yes';
} else {
  echo '<p>Nope';
}
echo "<h2>Today</h2>";
echo '<p>' . date('l, j F, Y g:ia', $_SERVER['REQUEST_TIME']);

?>

<script>
console.log("Test to see if it works");

var width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth || document.body.offsetWidth;

var height = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight || document.body.offsetHeight;

document.getElementById('window-width').innerHTML = width + "px";
document.getElementById('window-height').innerHTML = height + "px";

</script>
