<!DOCTYPE html>
<html>
  <head>
    <meta charset=utf-8>
    <title>Encrytion and stuff</title>
    <meta name="viewport" content=width=device-width,initial-scale=1.0>
    <link rel=stylesheet href=write.css type=text/css>
  </head>
  <body>
    <script>
      function wordCount(thing) {
        regex = /(\S\s)|(([A-Z]|[a-z])(\.|\!|\?|\z))/;
        numOfParenthesis = 5; //how many par. sets are in the regex
        wordsLeft = 500-((thing.value.split(regex).length-1)/numOfParenthesis);
        //if(wordsLeft<0){
        //  wordsLeft = 0;
        //}
        //Include if the counter shouldn't go below 0
        document.getElementById("counter").innerHTML = wordsLeft;
        if(wordsLeft<=0){
          document.getElementById("submitWriting").disabled = false;
        }else{
          document.getElementById("submitWriting").disabled = true;
        }
      }
    </script>
    <form action=submit.php method=POST>
      <h2 id=counter>500</h2>
      <textarea onkeyup=wordCount(this) placeholder='Write your words here...' name=words></textarea>
      <div id=writeButtons>
        <button type=submit name=submit value=save id=saveWriting>SAVE</button>
        <button type=submit name=submit value=submit id=submitWriting disabled>SUBMIT</button>
      </div>
    </form>
  </body>
</html>