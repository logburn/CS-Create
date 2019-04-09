<!DOCTYPE html>
<html>
  <head>
    <meta charset=utf-8>
    <title>Decrypt file</title>
    <meta name=viewport content=width=device-width,initial-scale=1.0>
    <link rel=stylesheet href=style.css type=text/css>
  </head>
  <body>
    <form action=decryptFunc.php method=POST enctype=multipart/form-data>
      <!--<input type=file name=doc accept=.txt >-->
      <textarea placeholder="Paste your encrypted file's contents here" name=words></textarea>
      <input type=text name=key placeholder='Decryption key'>
      <button type=submit name=submit value=submit id=submitWriting>SUBMIT</button>
    </form>
  </body>
</html>