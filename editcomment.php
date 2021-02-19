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
    <?php
     $cid = $_POST['cid'];
     $uid = $_POST['uid'];
    $date = $_POST['date'];
    $message = $_POST['message'];
echo "<form action = '".editComments($conn)."'  method = 'post'>
    <input type='hidden' name = 'cid' value = '".$cid."'>
    <input type='hidden' name = 'uid' value = '".$uid."'>
    <input type='hidden' name = 'date' value = '".$date."'><br>
    <textarea name = 'message' >". $message."</textarea> <br>
     <button name = 'commentSubmit' type = 'submit'>Edit</button>
      </form>";
       
      ?>
    
</body>
</html>