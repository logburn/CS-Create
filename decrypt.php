<!DOCTYPE html>
<html>
  <head>
    <meta charset=utf-8>
    <title>Decrypt file</title>
    <meta name=viewport content=width=device-width,initial-scale=1.0>
    <link rel=stylesheet href=style.css type=text/css>
  </head>
  <body>
    <form class=center method=POST action=decryptFunc.php enctype="multipart/form-data">
      <input type=file name=encDoc><br>
      <input id=key type=text name=key placeholder='Decryption key'><br>
      <button type=submit name=submit value=submit id=submitWriting>SUBMIT</button>
    </form>
    <br>
    <p class=center><a href=/cs/encrypt.php>Encrypt a file</a></p>
  </body>
</html>
