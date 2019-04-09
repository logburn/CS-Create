<?php
  require "enc.php";
  $enc = encrypt($_POST["words"], $_POST["key"]);
  $content = "<encrypted>\n"."  <iv>".bin2hex($enc[1])."</iv>\n"."  <tag>".bin2hex($enc[2])."</tag>\n"."  <content>".$enc[0]."</content>\n"."</encrypted>";
  
  header('Content-type: text/plain');
  header('Content-Disposition: attachment; filename="encrypted.txt"');
  echo $content;
?>