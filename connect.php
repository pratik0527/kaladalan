<?php
 $host='localhost';
  $user='root';
  $pw='';
  $db ='kaladalan';
  
  $con=mysqli_connect($host,$user,$pw) or die(mysqli_error());
   mysqli_select_db($con,$db);

?>