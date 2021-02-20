<?php
date_default_timezone_set('Europe/Copenhagen');
include_once 'dbh.inc.php';
include_once 'comment.inc.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = stylesheet type = 'text/css' href = 'style.css'>
</head>
<body>
    <?php
    echo"<form method = 'POST' action = '".getLogin($conn)."'>
        <input type='text'  name = 'uid'>
        <input type='password' name = 'pwd'>
        <button type = 'submit' name = 'loginSubmit'>login</button>
    </form>";
    echo"<form method = 'POST' action = '".userLogout()."'>
     <button type = 'submit' name = 'logoutSubmit'>logout</button>
    </form>";

    if (isset($_SESSION['id'])) {
        echo "you are logged in !";
    } else {
        echo "you aren't logged in bro !";
    }
    ?>
    <br><br>
    <video width = "320"  height = "240" controls>
    <source src = "movie.mp4" type = "video/mp4">
    <source src = "movie.ogg" type = "video/ogg">
    your browser doesn't not support the video tag.
    </video>
    <?php
  

     if(isset($_SESSION['id']))  {
        echo "<form action = '".setComments($conn)."'  method = 'post'>
          <input type='hidden' name = 'uid' value = '".$_SESSION['id']."'>
    <input type='hidden' name = 'date' value = '".date('Y-m-d H:i:s')."'><br>
    <textarea name = 'message' ></textarea> <br>
     <button name = 'commentSubmit' type = 'submit'>Comment</button>
      </form> <br>"; 
      echo "<br>";
    } else {
        echo "you need to login first in order to comment!";
    }
       getComments($conn)
      ?>
      
    
</body>
</html>