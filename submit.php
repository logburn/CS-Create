<?php
  require "enc.php";
  $enc = encrypt($_POST["words"], $_POST["key"]);
  $content = '<iv>'.$enc[1].'</iv>'.'<tag>'.$enc[2].'</tag>'.'<content>'.$enc[0]."</content>";
  
  header('Content-type: text/plain');
  header('Content-Disposition: attachment; filename="encrypted.txt"');
  echo $content;
?>