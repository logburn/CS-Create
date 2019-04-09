<?php
  require "enc.php";
  $words = file_get_contents($_FILES["encDoc"]["tmp_name"]);
  $data = simplexml_load_string($words) or die("Couldn't make object");
  
  //Get the key
  $key = $_POST["key"];
  
  
  //Get the IV
  $iv = hex2bin($data->iv);
  
  //Get the tag
  $tag = hex2bin($data->tag);
  
  //Get the ciphertext
  $ciphertext = $data->content;
  
  echo "<pre>Your decrypted content:<br>";
  echo decrypt($ciphertext, $key, $iv, $tag);;
?>