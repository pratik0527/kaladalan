<?php
 
?>

<!DOCTYPE html>
<html>
<head>
    
    <link rel="stylesheet" href="admin.css">

</head>
<body>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="admin_change_password.php" target="f1">Change password</a>
  <a href="admin_feedback.php" target="f1">Feedback</a>
  <a href="admin_message.php" target="f1">Message</a>
  <a href="admin_type1.php" target="f1">Type 1</a>
  <a href="admin_type2.php" target="f1">Type 2</a>
  <a href="admin_type3.php" target="f1">Type 3</a>
  <a href="admin_type4.php" target="f1">Type 4</a>
  <a href="logout.php">Logout</a>
</div>

<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>

    
<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>
     
    
        <iframe src="" height="500px;" width="100%" name="f1"></iframe>
    
</body>
</html>