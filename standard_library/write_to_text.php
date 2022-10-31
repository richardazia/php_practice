<?php
$docs = new FilesystemIterator('../standard_library/', FilesystemIterator::UNIX_PATHS);
foreach ($docs as $doc) {
  if ($doc->getExtension() == 'txt') {
    $textfile = $doc->openFile('r+');
    $textfile->setFlags(SplFileObject::SKIP_EMPTY | SplFileObject::READ_AHEAD | SplFileObject::DROP_NEW_LINE); 
    echo '<h2>' . $textfile->getFilename() . '</h2>';
    foreach ($textfile as $line) {
      echo "$line<br>";
    }
    $textfile->seek(4);
    echo "<p>This is the fourth line" . $textfile->current();
    while(!$textfile->eof()) {
      $textfile->next();
    }
    $textfile->fwrite("\r\n\r\nI was added by the php code, rather than manually. I am automatic");
  }
}



?>
