<?php
  require "enc.php";
  $data = $_POST["words"];
  
  //Get the key
  $key = $_POST["key"];
  echo "key is $key <br>";
  
  
  //Get the IV
  preg_match('#(?<=(<iv>))(.*?)(<\/iv>)#', $data, $ivArr);
  $iv = $ivArr[0];
  $iv = substr($iv, 0, strlen("</content>"));
  echo "iv is $iv <br>";
  
  //Get the tag
  preg_match('#(?<=(<tag>))(.*?)(<\/tag>)#', $data, $tagArr);
  $tag = bin2hex($tagArr[0]);
  $tag = substr($tag, 0, strlen("</tag>"));
  echo "tag is $tag <br>";
  
  //Get the ciphertext
  preg_match('#(?<=(<content>))(.*?)(<\/content>)#', $data, $ctArr);
  $ciphertext = $ctArr[0];
  $ciphertext = substr($ciphertext, 0, strlen("</content>"));
  echo "text is $ciphertext <br>";
  
  $content = decrypt($ciphertext, $key, $iv, $tag);
  echo "content is:<br>"; var_dump($content);
?>