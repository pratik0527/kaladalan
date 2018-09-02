     <!-- ================Jquery Script    ================ -->
    <script src="js/jquery.min.js"></script>
    <!-- ================Bootsraph css    ================ -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- ================Font awesome     ================ -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <link rel="stylesheet" href="css/custom_style.css"> 


 <li class="nav-item"> <a  class="nav-link " data-toggle="modal" data-target="#login_Modal" style="color: white;"> <i class="fa fa-user"></i> Log In</a> </li>
                  

<div class="modal fade" id="login_Modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                 
                    <h4 ><i class="fa fa-user fa-fw"> </i>Login</h4><button class="close" data-dismiss="modal">X</button>
                </div> 
                <center>  <img src="img/login.png" alt="Avatar" class="avatar login" /></center>
                <div class=" modal-body">

                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"  style="width:40px;"><span class="fa fa-envelope"></span>
                      </div>
                     <input type="Email" class="form-control" placeholder="Enter Email Id"id="txt_uname" name="txt_uname"  required>
                    </div>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"  style="width:40px;"><span class="fa fa-lock"></span>
                      </div>
                     <input type="password"class="form-control" placeholder="Enter Password" id="txt_pwd" name="txt_pwd" required>
                    </div>
                    <br>
                    <button type="submit" class="btn  btn-block" name="but_login_submit" id="but_login_submit" style="background: #56c9a8;"  >Sign in</button>
                    <br>
                 
                    <div class="" id="login_error_message"></div>
                    <br>
                    <hr>
                      <center> <a data-toggle="modal" data-target="#forgot_Modal" data-dismiss="modal" style="color: blue;">Forgot password? </a>|
                      <a  data-toggle="modal" data-target="#signupModal" data-dismiss="modal"  style="color: blue;">Sign Up!</a></center>
                    
                    
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="forgot_Modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 ><i class="fa fa-lock "> </i> Recover Password!</h4><button class="close" data-dismiss="modal">X</button>
                </div>
                
                <div class=" modal-body">

                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"  style="width:40px;"><span class="fa fa-envelope"></span>
                      </div>
                     <input type="Email" class="form-control" placeholder="Enter Email Id"id="forgot_email" name="forgot_email"  required>
                    </div>
                  
                    <br>
                    <button type="button" class="btn  btn-block" name="forgot_btn_submt" id="forgot_btn_submt" style="background: #56c9a8;">Submit</button>
                    <br>
                    <div class="" id="forgot_error_message"></div>
                    <br>
                    <hr>
                     <center> Remember Password?<a data-toggle="modal" data-target="#login_Modal" data-dismiss="modal" style="color: blue;"> Login Here!</a></center>
                    
                    
                </div>
            </div>
        </div>
    </div>


<div class="modal fade" id="signupModal" role="dialog" >
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
             <h4><span class="fa fa-edit"></span> Sign Up</h4> <button type="button" class="close" data-dismiss="modal">×</button>
                
      </div>
            <div class="modal-body">
              <form >
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"  style="width:40px;"><span class="fa fa-list-alt"></span>
                      </div>
                      <input type="name" class="form-control" id="fname" placeholder="Enter First Name" title="Enter First Name" >
                    </div>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"  style="width:40px;"><span class="fa fa-list-alt"></span>
                      </div>
                      <input type="name" class="form-control" id="lname" placeholder="Enter Last Name" title="Enter Last Name" >
                    </div>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"  style="width:40px;"><span class="fa fa-envelope"></span>
                      </div>
                       <input type="text" class="form-control" id="username" placeholder="Enter Emial Id" title="Enter Emial Id"  >
                       <div class="input-group-prepend">
                        <span class="input-group-text"  style="width:40px;"><span id="user_result"></span>
                      </div>
                    </div>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"  style="width:40px;"><span class="fa fa-lock"></span>
                      </div>
                       <input type="password" class="form-control" id="password1" placeholder="Enter Password" title="Enter Password" >
                    </div>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"  style="width:40px;"><span class="fa fa-check"></span>
                      </div>
                        <input type="password" class="form-control" id="cpassword" placeholder="Enter Confirm Password" title="Enter Confirm Password" onfocusout="cofrm_password_function()" >
                    </div>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"  style="width:40px;"><span class="fa fa-phone"></span>
                      </div>
                         <input type="text" class="form-control" id="mobile_no" placeholder="Enter Phone Number" title="Enter Phone Number"  >
                      </div>
                      <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"  style="width:40px;"><span class="fa fa-address-card"></span>
                      </div>
                     <textarea type="text"class="form-control" placeholder="Enter Your Address" id="address" name="address" ></textarea>
                    </div> 
                    <button type="button" class="btn  btn-block" title="Sign Up" name="signup_btn"  id="but_sign_up_submit"  style="background: #56c9a8;" >Sign Up</button>
              </form>
                <center><br><div id="sign_up_error_message" style="color:red;"></div><center>


          <hr>
          <center> Already a Member ? <a data-toggle="modal" data-target="#login_Modal" data-dismiss="modal" style="color: blue;"> Login Here! </a></center>
                    
                    
    </div>
    </div>
  </div>
</div>

<!-- Manage Profile  Modal form  Start here -->
    <div class="modal fade" id="model_manage_profile">
        <div class="modal-dialog">
           <div class="modal-content">
                <div class="modal-header" style="background-color:#27c4ac;color: white; ">
                    Change Password<button class="close" data-dismiss="modal">X</button>
                </div>

                <div class=" modal-body">
                    <form  > 
                      <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"  style="width:40px;"><span class="fa fa-lock"></span>
                      </div>
                     <input type="password"class="form-control" placeholder="Enter Current Password" id="currentPassword" name="currentPassword" required>
                    </div>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"  style="width:40px;"><span class="fa fa-lock"></span>
                      </div>
                     <input type="password"class="form-control" placeholder="Enter New Password" id="newPassword" name="newPassword" required>
                    </div>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"  style="width:40px;"><span class="fa fa-check"></span>
                      </div>
                     <input type="password"class="form-control" placeholder="Enter Conform Password"  id="confirmPassword" name="confirmPassword"  required>
                    </div>
                        <br>
                        
                        <button type="button" class="btn btn-block" name="but_submit1" id="but_submit1" style="background: #56c9a8;"  >Save</button>
                        <br><div class="" id="ps"> </div>

                        <br>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

   
    <br>
<script src="js/bootstrap.min.js"></script>

<script src="js/shake_box.js"></script>
<script src="js/custom_script.js"></script>
