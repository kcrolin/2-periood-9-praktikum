<?php
session_start();
$_SESSION["first_name"] = "Cärolin";
?>
<!DOCTYPE HTML>
<html>
  <head>
  <title>Sessioonid</title>
  <meta charset="utf-8">
  </head>
  
  <body>
<div style="font-size:28px; color:#CC3366" class="wrap">
<?php
  $first_name = $_SESSION["first_name"];
  echo $first_name;
?>
</div>
<a href="second.php">Järgmisele lehele >></a>
   </body>
</html>
