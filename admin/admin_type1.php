<?php
    session_start();
    if(isset($_SESSION['name'])) {
}

else{
    echo "<script>
            alert('Please login to admin');
            window.location.href='index.php'
            </script>";
}
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Pics Upload</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Easy Admin Panel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
<!-- chart -->
<script src="js/Chart.js"></script>
<!-- //chart -->
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
    <script>
         new WOW().init();
    </script>
<!--//end-animate-->
<!----webfonts--->
<link href='//fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<!---//webfonts---> 
 <!-- Meters graphs -->
<script src="js/jquery-1.10.2.min.js"></script>
<!-- Placed js at the end of the document so the pages load faster -->

</head> 
   
 <body class="sticky-header left-side-collapsed"  onload="initMap()">
    <section>
    <!-- left side start-->
        <div class="left-side sticky-left-side">

            <!--logo and iconic logo start-->
            <div class="logo">
                <h1><a href="dashboard.php"><span>Admin</span></a></h1>
            </div>
            <div class="logo-icon text-center">
                <a href="dashboard.php"><i class="lnr lnr-home"></i> </a>
            </div>

            <!--logo and iconic logo end-->
            <div class="left-side-inner">

                <!--sidebar nav start-->
                    
                    <ul class="nav nav-pills nav-stacked custom-nav">
                       <li class="active"><a href="dashboard.php"><i class="lnr lnr-power-switch"></i><span>Dashboard</span></a></li>
                       <li class="active"><a href="admin_feedback.php"><i class="lnr lnr-power-switch"></i><span>Feedback</span></a></li>
                       <li class="active"><a href="admin_change_password.php"><i class="lnr lnr-power-switch"></i><span>Change Password</span></a></li>
                       <li class="active"><a href="admin_type1.php"><i class="lnr lnr-power-switch"></i><span>Phad Painting</span></a></li>
                       <li class="active"><a href="admin_type2.php"><i class="lnr lnr-power-switch"></i><span>Abstract Art</span></a></li>
                       <li class="active"><a href="admin_type3.php"><i class="lnr lnr-power-switch"></i><span>Contemporery Art</span></a></li>
                       <li class="active"><a href="admin_type4.php"><i class="lnr lnr-power-switch"></i><span>Mixed Painting</span></a></li>
                       <li class="active"><a href="order.php"><i class="lnr lnr-power-switch"></i><span>Order Request</span></a></li>
                       <li class="active"><a href="logout.php"><i class="lnr lnr-power-switch"></i><span>Logout</span></a></li>
                    </ul>
                <!--sidebar nav end-->
            </div>
        </div>
    <!-- left side end-->
    
    <!-- main content start-->
        <div class="main-content">
            <!-- header-starts -->
            <div class="header-section">
             
            <!--toggle button start-->
            <a class="toggle-btn  menu-collapsed"><i class="fa fa-bars"></i></a>
            <!--toggle button end-->

            <!--notification menu start -->
                                    <div class="profile_details">       
                        <ul>
                            <li class="dropdown profile_details_drop">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <div class="profile_img">   
                                        <span style="background:url(images/123.jpg) no-repeat center"> </span> 
                                         <div class="user-name">
                                            <p><?php  echo $_SESSION["name"];?><span>Administrator</span></p>
                                         </div>
                                         <i class="lnr lnr-chevron-down"></i>
                                         <i class="lnr lnr-chevron-up"></i>
                                        <div class="clearfix"></div>    
                                    </div>  
                                </a>
                                <ul class="dropdown-menu drp-mnu"> 
                                    <li> <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
                                </ul>
                            </li>
                            <div class="clearfix"> </div>
                        </ul>
                    </div>      
                    
    <!-- //header-ends -->
               <div class="container">
            <div class="type1" style="background-color: #f1f1f1; height: auto; width:100% ; padding: 50px">
                
                <h1 style="text-">Phad Painting</h1>
                <br>
                
                <a href="new_type1.php" target="f1" class="btn btn-success" role="button" style="float: right">New Painting</a>
                <br><br><br>
                
                <?php
                
                    include('connect.php');
                
                $result = mysqli_query($con,"SELECT * FROM phad_painting");
                
                echo "<table border='1'width='100%' style='padding: 10px; text-align: center'>
                <tr>
                <th style='text-align: center'>Serial No.</th>
                <th style='text-align: center'>Heading</th>
                <th style='text-align: center'>description</th>
                <th style='text-align: center'>picture</th>
                </tr>";
                
                while($row = mysqli_fetch_array($result))
                {
                    
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['heading'] . "</td>";
                    echo "<td>" . $row['description'] . "</td>";
                    
                    echo "<td><img src='admin/imagess/".$row['image']."' style='width:20%'></td>";
                    
                    echo "</tr>";
                }
                echo "</table>";
                
                ?>
                
                
            </div>
        </div>
        
       
        <!--footer section start-->
            <footer>
               <p><a>&copy; Admin Dashboard  | Design by Anshul Agarwal and Ramakrishna.</a></p>
            </footer>
        <!--footer section end-->
    </section>
    
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
</body>
</html>