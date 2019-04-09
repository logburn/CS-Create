<!DOCTYPE html>
<html>
  <head>
    <meta charset=utf-8>
    <title>Encrytion and stuff</title>
    <meta name=viewport content=width=device-width,initial-scale=1.0>
    <link rel=stylesheet href=style.css type=text/css>
  </head>
  <body>
    <script>
      function wordCount(thing) {
        regex = /(\S\s)|(([A-Z]|[a-z])(\.|\!|\?|\z))/;
        numOfParenthesis = 5; //how many par. sets are in the regex
        words = (thing.value.split(regex).length-1)/numOfParenthesis;
        document.getElementById("counter").innerHTML = words;
      }
    </script>
    <form action=submit.php method=POST>
      <h2 id=counter>0</h2>
      <textarea onkeyup=wordCount(this) placeholder='Write your words here...' name=words></textarea>
      <input type=text name=key placeholder='Decryption key'>
      <button type=submit name=submit value=submit id=submitWriting>SUBMIT</button>
    </form>
  </body>
</html>