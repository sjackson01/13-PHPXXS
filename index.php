<!doctype html>
   <html lang="en">
   <head>
      <meta charset="utf-8">
      <title>XSS Attacks</title>
   </head>
   <body>
   <?php # Script 13.4 - xxs.php

        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        // Apply the different function, printing the resutls:
        echo "<h2>Original</h2><p>{$_POST['data']}</p>";
        echo '<h2>After htmlentities()</h2><p>' . htmlentities($_POST['data']) . '</p>';        
        }
        // Display the form: 
   ?>
   <form action="index.php" method="post">
     <p>Do your worst! <textarea name="data" rows="3" cols="40"></textarea></p>
     <div align="center"><input type="submit" name="submit" value="Submit"></div>
    </form>
    </body>
</html>