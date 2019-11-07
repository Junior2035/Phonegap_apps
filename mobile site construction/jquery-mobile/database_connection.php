<?php
$conn=mysqli_connect('localhost','root','');
if (!$conn)
  {echo("Connection Failed: " . $conn);}
   mysqli_select_db($conn,'control');
?>