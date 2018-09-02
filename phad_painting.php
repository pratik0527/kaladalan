<html>
    <head>
        <title>Phad Painting</title>
        
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
  	<link rel="stylesheet" href="css/component.css">
	
    <link rel="stylesheet" href="css/owl.theme.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/vegas.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,300' rel='stylesheet' type='text/css'>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
        
    </head>
    <body>
        
        <?php
            include('navbar.php');
        ?>
        <br><br><br><br><br>
        <h1 style="text-align: center">Phad Painting</h1>
        <br>
        <div class="container">
            <div class="type-img-bd" style="height: auto;">
                
                
                
                <ul class="grid cs-style-4">

                    <?php
            include('connect.php');
            
        $sql=mysqli_query($con,"SELECT * FROM `phad_painting`");
        while($data=mysqli_fetch_array($sql))
        {
        
        ?>
                    <li class="col-md-6 col-sm-6">
                        <figure>
                            <div>

                                <a href="admin/imagess/<?php echo $data['image'];?> "><img src="admin/imagess/<?php echo $data['image'];?> " alt="image" width="600px" height="300px"></a>

                            </div>
                            <figcaption>
                                <h1><?php echo $data['heading']?></h1>
                                <small><?php echo $data['description']?></small>
                                
                                <a class="btn btn-danger btn-lg" role="button" data-toggle="modal" data-target="#message">Buy Now</a>
                            </figcaption>
                        </figure>
                    </li>
            
            <?php } ?>
                    
                    
                    
                    <!-- Modal -->
                    <div class="modal fade" id="message" role="dialog">
                        <div class="modal-dialog">
                            
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Painting Enquiry</h4>
                                </div>
                                <div class="modal-body">
                                    <form action="" method="post">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="name" class="form-control" id="name" placeholder="Enter Your Name" name="name">
                                        </div>

                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" id="email" placeholder="Enter Your email" name="email">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="number">Mobile Number</label>
                                            <input type="number" class="form-control" id="number" placeholder="Enter Your Number" name="number">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="name">Painting Name</label>
                                            <input type="text" class="form-control" id="paintingname" placeholder="Enter Your PaintingName" name="paintingname">
                                        </div>
                                        <button type="submit" class="btn btn-success" name="submit">Send</button>
                                        <button type="reset" class="btn btn-success">Reset</button>
                                    </form>


                                    
                                    <!---->
                                    <?php 
                                    if(isset($_POST['submit'])){
                                        $to = "anshulagarwal694@gmail.com"; // this is your Email address
                                        $from = $_POST['email']; // this is the sender's Email address
                                        $name = $_POST['name'];
                                        $number = $_POST['number'];
                                        $paintingname = $_POST['paintingname'];
                                        $subject = "Painting Enquiry";
                                        $message;
                                        
                                        $headers = "From:" . $from;
                                        mail($to,$subject,$message,$headers);
                                        echo "message Sent. Thank you " . $name . ", we will contact you shortly.";
                                        // You can also use header('Location: thank_you.php'); to redirect to another page.
                                    }
                                    ?>
                                    <!---->
                                    
                                    <!-- data register -->
                                    
                                    <?php 
                                    include('connect.php');
                                    if(isset($_POST['submit']))
                                    {
                                        $name=$_REQUEST['name'];
                                        $email=$_REQUEST['email'];
                                        $number=$_REQUEST['number'];
                                        $paintingname=$_REQUEST['paintingname'];
                                        $sql="INSERT INTO `enquiry`(`name`, `email`, `number`, `paintingname`) VALUES ('".$name."','".$email."','".$number."','".$paintingname."')";
                                        $res = mysqli_query($con,$sql);
                                        if($res>=1){
                                            echo "<script>
                                            alert('Your Enquiry is sent successfully.');
                                            window.location.href='index.php';
                                            </script>";
                                        }
                                        else{
                                            echo "<script> alert('Failed to send your enquiry. Please try later.');
                                            window.location.href='#';
                                            </script>";
                                        }
                                    }
                                    ?>
    
                                    <!-- end of data register -->
                                    
                                    
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                            
                        </div>
                    </div>

                    
                    
                    
                </ul>
                
                <!------------------------------------------------------------------->
                
            </div>
        </div>
        
        <?php
            include('footer.php');
        ?>
        
        <!-- Javascript  -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/vegas.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<script src="js/toucheffects.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/wow.min.js"></script>
        
        
    </body>
</html>