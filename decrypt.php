<!DOCTYPE html>
<html>
  <head>
    <meta charset=utf-8>
    <title>Decrypt file</title>
    <meta name=viewport content=width=device-width,initial-scale=1.0>
    <link rel=stylesheet href=style.css type=text/css>
  </head>
  <body>
  <form method=POST action=decryptFunc.php enctype="multipart/form-data">
    <input type=file name=encDoc>
    <input type=text name=key placeholder='Decryption key'>
    <button type=submit name=submit value=submit id=submitWriting>SUBMIT</button>
    </form>
  </body>
</html>