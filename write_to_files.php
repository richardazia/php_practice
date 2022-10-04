<?php

$text = file_get_contents( 'udhr.txt' );
echo file_put_contents( 'udhr_copied.txt', $text, FILE_APPEND);