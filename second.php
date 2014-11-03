<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
  <head>
  <title>Sessioonid II</title>
  <meta charset="utf-8">
  </head>
  
  <body>
<div style="font-size:28px; color:#CC3366" class="wrap">
<?php
  $first_name = $_SESSION["first_name"];
  echo $first_name;
?>
</div>
<a href="index.php"><< Tagasi</a>
   </body>
</html>
