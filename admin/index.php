<!DOCTYPE HTML>
<html>
<head>
<title>Log in</title>
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
   
 <body class="sign-in-up">
    <section>
            <div id="page-wrapper" class="sign-in-wrapper">
                <div class="graphs">
                    <div class="sign-in-form">
                        <div class="sign-in-form-top">
                            <p><span>Sign In to Admin</span></p>
                        </div>
                        <div class="signin">
                            
                            <form action="" method="post" onsubmit="return validateform()" name="admin">
                            <div class="log-input">
                                <div class="log-input-left">
                                   User name<input type="text" id="name" name="name" class="user" placeholder="Enter User Name" required>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="log-input">
                                <div class="log-input-left">
                                   Password<input type="password" id="password" name="password" class="lock" placeholder="Password" required>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit" name="submit">Log in</button>            
                        </form>  
                        </div>
                        
                    </div>
                </div>
            </div>






                
            <script>  
        function validateform(){  
            var name=document.admin.name.value;
            var password=document.admin.password.value;  
  
            if(name==null || name==""){  
                alert("Name can't be blank");  
                return false;  
            }
            else if(password==null || password.length<5){
                alert("Password can't be blank");
                return false;
            }
            else if(password.length<5){
                alert("Enter the password more than 8 characters");
                return false;
            }
        }  
</script>
    
    <!-- End Of Form Validate -->
    
    <?php
   
      include('connect.php'); 
    if(isset($_POST['submit']))

    {
        $name=$_REQUEST['name'];
        $password=($_REQUEST['password']);
        $query=mysqli_query($con,"select * from `admin` where `name`='".$name."' and `password` ='".$password."'");
        $data=mysqli_fetch_array($query);

      if($data)
    	{
            session_start();
    		$_SESSION['name']=$name;
    		echo "<script>
            alert('Welcome Admin');
    		window.location.href='dashboard.php'
    		</script>";
    	}
    	
    	else{
    		echo "<script>
    		alert('Invalid username or password');
    		window.location.href='index.php'
    		</script>";
    	}
    }
?>
    
    <!-- Login end -->
                
                <?php
                    include('checklogin.php');
                ?>
                
                
            </div>
        </div>
        
        <!--footer section start-->
            <footer>
                <p>&copy Admin Dashboard  | Design by Anshul Agarwal and Ramakrishna.</a></p>
            </footer>
    </body>
</html>