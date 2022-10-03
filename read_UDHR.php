<?php 
echo ( '<h1> Reading files </h1>');
// Get an unformated text from a file
echo ( '<h2>Read the File</h2>');
readfile( 'udhr.txt');



// Get the contents of a file
echo ( '<h2>File, get contents</h2>');
echo file_get_contents( 'udhr.txt');

// And now lines
echo ( '<h2>Lines</h2>');
$lines = file ( 'udhr.txt');

var_dump( $lines );

// And now to get content 
$blog = file_get_contents( 'https://www.main-vision.com/richard/blog/' );

var_dump( $blog );

if( strpos( $blog, 'wp-content')) {
    echo "<p>This website is using Wordpress!</p>";
}
