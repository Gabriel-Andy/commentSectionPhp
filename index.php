<?php
date_default_timezone_set('Europe/Copenhagen');
include_once 'dbh.inc.php';
include_once 'comment.inc.php';
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
    <video width = "320"  height = "240" controls>
    <source src = "movie.mp4" type = "video/mp4">
    <source src = "movie.ogg" type = "video/ogg">
    your browser doesn not support the video tag.
    </video>
    <?php
echo "<form action = '".setComments($conn)."'  method = 'post'>
          <input type='hidden' name = 'uid' value = 'Anonymous'>
    <input type='hidden' name = 'date' value = '".date('Y-m-d H:i:s')."'><br>
    <textarea name = 'message' ></textarea> <br>
     <button name = 'commentSubmit' type = 'submit'>Comment</button>
      </form>";
       getComments($conn)
      ?>
    
</body>
</html>