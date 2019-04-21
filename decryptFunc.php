<!DOCTYPE html>
<html>
  <head>
    <meta charset=utf-8>
    <title>Encrytion and stuff</title>
    <meta name=viewport content=width=device-width,initial-scale=1.0>
    <link rel=stylesheet href=style.css type=text/css>
  </head>
  <body class=center>
    <?php
      require "enc.php";
      $words = file_get_contents($_FILES["encDoc"]["tmp_name"]);
      $data = simplexml_load_string($words) or die("Couldn't make object");

      //Get the XML info in variables (hex2bin the iv and tag)
      $key = $_POST["key"];
      $iv = hex2bin($data->iv);
      $tag = hex2bin($data->tag);
      $ciphertext = $data->content;
      $dec = decrypt($ciphertext, $key, $iv, $tag);

      if($dec != ""){
        echo "<h2>Your decrypted content:</h2>";
        echo "<p id=decCont>".$dec."</p>";
      }else{
        echo "<h2>Error</h2>";
        echo "<p id=decCont>Your content could not be decrypted.<br>Wrong password, maybe?</p>";
      }
    ?>
    <br><br>
    <p class=center><a href=/cs/encrypt.php>Encrypt another file</a></p>
    <p class=center><a href=/cs/decrypt.php>Decrypt another file</a></p>
  </body>
</html>
