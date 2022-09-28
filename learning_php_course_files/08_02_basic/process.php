<?php

foreach( $_POST as $name => $value ) {
//    echo "<p><b>" . ucfirst( $name ) . "</b> is value</p>"; // outputs each value for double checking

   if ( 'submit' != $name ) {
       if ( is_array( $value ) ) {
           $value = implode( ', ', $value );
       }
        echo "<p><b>" . ucfirst( $name ) ."</b> is $value.</p>";
   }
}

$email_regex = '^[\w\.=-]+@[\w\.-]+\.[\w]{2,3}$^';
if ( isset( $_POST['email'] ) && empty( trim( $_POST['email'] ) ) )
{
    echo "<p class=\"alert\">Email is required</p>";
    $form_complete = false;
} else if ( ! preg_match( $email_regex, $_POST['email'] )) {
    echo "<p class=\"alert\">Please enter a valid e-mail address.</p>";
    $form_complete = false;
}
