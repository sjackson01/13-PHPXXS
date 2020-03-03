<!doctype html>
   <html lang="en">
   <head>
      <meta charset="utf-8">
      <title>XSS Attacks</title>
   </head>
   <body>

   <form action="xss.php" method="post">
     <p>Do your worst! <textarea name="data" rows="3" cols="40"></textarea></p>
     <div align="center"><input type="submit" name="submit" value="Submit"></div>
    </form>
    </body>
</html>