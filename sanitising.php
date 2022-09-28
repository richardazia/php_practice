<?php
// https://www.php.net/manual/en/filter.filters.sanitize.php
if ( ! empty( $_POST ) ) {
    foreach( $_POST as &$value ) {
        $value = trim( $value );
    }

    echo $_POST['email'] . ' ' . $_POST['message'];
    // $_POST['message'] = htmlentities( $_POST['message'] );
    $_POST['email'] = filter_var( $_POST['email'], FILTER_SANITIZE_EMAIL );
    $_POST['message'] = strip_tags( filter_var( $_POST['message'], FILTER_SANITIZE_ADD_SLASHES ) );
    echo $_POST['email'] . ' ' . $_POST['message'];
} 