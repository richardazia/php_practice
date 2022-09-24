<?php 
require 'var_practice.php';
echo '<h1>' . "Good Morning world" . '</h1>';
echo '<h2>' . "I am the about page" . '</h2>';
echo '<p>' . "The really fast goose raced around the garden without ever getting tired despite a strong wind.";
echo '<h3>' . "And now for the part playing with variables from another PHP document." . '</h3>';
?>

<title><?php echo $title;?> </title>
</head>
<body>
  <h1><?php echo $title;?></h1>
  <p><?php echo $description; ?>
</body>