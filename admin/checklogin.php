<?php
function check_login()
{
if(!isset($_SESSION['name'])){
    header("location:index.php");
}
}
?>