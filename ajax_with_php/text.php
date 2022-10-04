<?php

$var = 'content from another page';
// For debugging we can add 
echo $var;
return;

?>

<span style="color: grey;">This is <i><?php echo $var ?></i> which loads into the current page via an AJAX request.