<?php
    session_start();

      include('connect.php'); 
include('checklogin.php');
check_login();

?>

<html>
    <head>
        <title>Admin</title>
        
        <!-- style sheet css -->
        <link rel="stylesheet" href="style.css">
        <!-- style sheet css end -->
        
        <!-- bootstrap -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- bootstrap end -->
        
        <!-- aos -->
        <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet"> 
        <!-- aos end -->
        <!-- glyphicon css -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- glyphicon css end -->
        
    </head>
    <body>
        
        <?php
            include('admin_navbar.php');
        ?>
        
    </body>
</html>