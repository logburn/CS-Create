<?php
  $content = "content and things like it are here";
  header('Content-type: text/plain');
  header('Content-Disposition: attachment; filename="encrypted.txt"');
  echo $content;
?>