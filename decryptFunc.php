<?php
  require "enc.php";
  $words = file_get_contents($_FILES["encDoc"]["tmp_name"]);
  $data = simplexml_load_string($words) or die("Couldn't make object");
  
  //Get the XML info in variables (hex2bin the iv and tag)
  $key = $_POST["key"];
  $iv = hex2bin($data->iv);
  $tag = hex2bin($data->tag);
  $ciphertext = $data->content;
  
  echo "Your decrypted content:<br>";
  echo decrypt($ciphertext, $key, $iv, $tag);;
?>