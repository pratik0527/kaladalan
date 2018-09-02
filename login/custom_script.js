//-----------Script for Go to Top start here------------

      $(function () {
        $('#go-top').goTop({
          scrollTop: 100,
          scrollSpeed: 1000,
          fadeInSpeed: 1000,
          fadeOutSpeed: 500
        })
      })
  //-----------Script for Go to Top Ends here------------

$(document).ready(function(){
  $("a").on('click', function(event) {
    if (this.hash !== "") {
      event.preventDefault();
      var hash = this.hash;
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
        window.location.hash = hash;
      });
    } // End if
  });
});
 //-----------Script for Login Page start here------------

    $(document).ready(function(){ 
        $("#but_login_submit").click(function(){
            
            
            var username = $("#txt_uname").val().trim();
            var password = $("#txt_pwd").val().trim();

            if(username.length == 0){
                $("#txt_uname").focus();
                $("#login_Modal").effect("shake");
                document.getElementById("login_error_message").innerHTML = "Please Enter The  username..!!";
                document.getElementById("login_error_message").setAttribute("class","alert alert-danger");
            }else if(password.length == 0){
                $("#txt_pwd").focus();
                $("#login_Modal").effect("shake");
                document.getElementById("login_error_message").innerHTML = "Please Enter The  Password..!!";
                document.getElementById("login_error_message").setAttribute("class","alert alert-danger");
            }else{
                $.ajax({
                    url:'login_page.php',
                    type:'post',
                    data:{username:username,password:password},
                    success:function(response){
                      
                        if(response == 1){
                            window.location="index.php";

                       }else if(response == -1){
                            $("#txt_uname").focus();
                            $("#login_Modal").effect("shake");
                            document.getElementById("login_error_message").innerHTML = "Please Enter the Correct Email Id..!!";
                            document.getElementById("login_error_message").setAttribute("class","alert alert-danger");

                       }else if(response == -99){
                            $("#login_Modal").effect("shake");
                            document.getElementById("login_error_message").innerHTML = "Please Activate Your Email..<br>Link is Sent to Your Email..!!";
                            document.getElementById("login_error_message").setAttribute("class","alert alert-danger");
                       }else{
                            $("#txt_uname").focus();
                            $("#login_Modal").effect("shake");
                            $("#txt_uname").val("");
                            $("#txt_pwd").val("");
                            document.getElementById("login_error_message").innerHTML = "Sorry Invalid  Username/Password...!";
                            document.getElementById("login_error_message").setAttribute("class","alert alert-danger");
                       
                       }

                    }
                });
            }
        });

   }); 
$(document).ready(function(){ 
        $("#forgot_btn_submt").click(function(){
            
            var email = $("#forgot_email").val().trim();
            if(email.length == 0){
                $("#forgot_email").focus();
                $("#forgot_Modal").effect("shake");
                document.getElementById("forgot_error_message").innerHTML = "Please Enter The  Email Id..!!";
                document.getElementById("forgot_error_message").setAttribute("class","alert alert-danger");
            }else{

                $.ajax({
                    url:'login_page.php',
                    type:'post',
                    data:{forgot_email:email},
                    success:function(response){
                        if(response == 1){
                            alert("Please check your email to reset password..!")
                            window.location="index.php";

                       }else if(response == -1){
                            $("#forgot_email").focus();
                            $("#forgot_Modal").effect("shake");
                            document.getElementById("forgot_error_message").innerHTML = "Please Enter the Correct Email Id..!!";
                            document.getElementById("forgot_error_message").setAttribute("class","alert alert-danger");

                       }else{
                            $("#forgot_email").focus();
                            $("#forgot_Modal").effect("shake");
                            document.getElementById("forgot_error_message").innerHTML = "Sorry Email Id is not found..!";
                            document.getElementById("forgot_error_message").setAttribute("class","alert alert-danger");
                       
                       }

                    }
                });
            }
        });

   }); 
    $(document).ready(function(){ 
        $("#unsubmit_buyer_data").click(function(){
            
            var oreder_id = $("#oreder_id").val().trim();
            
                $.ajax({
                    url:'buy_info.php',
                    type:'post',
                    data:{oreder_id:oreder_id},
                    success:function(response){
                               
                        if(response == 1){
                            alert("Thank You For Placing Order We Will Contact You Soon..!!");

                        }else{
                            alert("There Is some Error Please Try Again...!");
                        }

                    }
                });
            
        });

   }); 
    

$(document).ready(function(){ 
        $("#but_sign_up_submit").click(function(){

            var fname = $("#fname").val().trim();
            var lname = $("#lname").val().trim();
            var username = $("#username").val().trim();
            var password1 = $("#password1").val().trim();
            var cpassword = $("#cpassword").val().trim();
            var mobile_no = $("#mobile_no").val().trim();
            var address = $("#address").val().trim();

            if(fname.length == 0){
                $("#fname").focus();
                $("#signupModal").effect("shake");
                document.getElementById("sign_up_error_message").innerHTML = "Please Enter The Frist Name..!!";
                document.getElementById("sign_up_error_message").setAttribute("class","alert alert-danger");
            }else if(lname.length == 0){
                $("#lname").focus();
                $("#signupModal").effect("shake");
                document.getElementById("sign_up_error_message").innerHTML = "Please Enter The Last Name..!!";
                document.getElementById("sign_up_error_message").setAttribute("class","alert alert-danger");
            }else if(username.length == 0){
                $("#username").focus();
                $("#signupModal").effect("shake");
                document.getElementById("sign_up_error_message").innerHTML = "Please Enter The  username..!!";
                document.getElementById("sign_up_error_message").setAttribute("class","alert alert-danger");
            }else if(password1.length == 0){
                $("#password1").focus();
                $("#signupModal").effect("shake");
                document.getElementById("sign_up_error_message").innerHTML = "Please Enter The  Password..!!";
                document.getElementById("sign_up_error_message").setAttribute("class","alert alert-danger");
            }else if(cpassword.length == 0){
                $("#cpassword").focus();
                $("#signupModal").effect("shake");
                document.getElementById("sign_up_error_message").innerHTML = "Please Enter The Conform Password..!!";
                document.getElementById("sign_up_error_message").setAttribute("class","alert alert-danger");
            }else if(mobile_no.length == 0){
                $("#mobile_no").focus();
                $("#signupModal").effect("shake");
                document.getElementById("sign_up_error_message").innerHTML = "Please Enter The  Mobile Number..!!";
                document.getElementById("sign_up_error_message").setAttribute("class","alert alert-danger");
            }else if(address.length == 0){
                $("#address").focus();
                $("#signupModal").effect("shake");
                document.getElementById("sign_up_error_message").innerHTML = "Please Enter The  Address..!!";
                document.getElementById("sign_up_error_message").setAttribute("class","alert alert-danger");
            }else{
                $.ajax({
                  
                    url:'login_page.php',
                    type:'post',
                    data:{fname:fname,lname:lname,sign_up_username:username,password:password1,mobile_no:mobile_no,address:address},
                    success:function(response){
                      
                        if(response == 1){
                           window.location.reload();
                            alert("Registeration successfull..!!");
                       }else if(response == -1){
                            $("#signupModal").effect("shake");
                            $("#username").focus();
                            document.getElementById("sign_up_error_message").innerHTML = "Please Enter The Correct Email Id...!";
                            document.getElementById("sign_up_error_message").setAttribute("class","alert alert-danger");
                       }else{

                        $("#signupModal").effect("shake");
                        $("#username").focus();
                        document.getElementById("sign_up_error_message").innerHTML = "Sorry Email Is Present Please Enter diferent Id...!";
                        document.getElementById("sign_up_error_message").setAttribute("class","alert alert-danger");
                       }
                    }
                });
            }
        });

   }); 
    function cofrm_password_function() {
        
        var password = $("#password1").val().trim();
        var cpassword = $("#cpassword").val().trim();
     
        if(cpassword != password){
        
            $("#password1").focus();
            $("#password1").val("");
            $("#cpassword").val("");
            $("#signupModal").effect("shake");
            document.getElementById("sign_up_error_message").innerHTML = "Please Enter The Same Password..!!";
            document.getElementById("sign_up_error_message").setAttribute("class","alert alert-danger");
        }else if(cpassword==password && password!=""){

            document.getElementById("sign_up_error_message").innerHTML = "";
            document.getElementById("sign_up_error_message").setAttribute("class","");
        }

    }
    $(document).ready(function(){ 
        $("#btn_forgot_pass").click(function(){
          
            var password = $("#new_forgot_pass").val().trim();
            var cpassword = $("#confrm_forgot_pass").val().trim();
            var forgot_pass = $("#forgot_pass").val().trim();
            if(password.length == 0){
                $("#new_forgot_pass").focus();
                $("#forgot_error_box").effect("shake");
                document.getElementById("forgot_error").innerHTML = "Please Enter The  Password..!!";
                document.getElementById("forgot_error").setAttribute("class","alert alert-danger");
            }else if(cpassword.length == 0){
                $("#confrm_forgot_pass").focus();
                $("#forgot_error_box").effect("shake");
                document.getElementById("forgot_error").innerHTML = "Please Enter The Conform Password..!!";
                document.getElementById("forgot_error").setAttribute("class","alert alert-danger");
            }else if(cpassword != password){
        
                $("#new_forgot_pass").focus();
                $("#new_forgot_pass").val("");
                $("#confrm_forgot_pass").val("");

                $("#forgot_error_box").effect("shake");
                document.getElementById("forgot_error").innerHTML = "Please Enter Same Password..!!";
                document.getElementById("forgot_error").setAttribute("class","alert alert-danger");
            }else{

                $.ajax({
                    url:'login_page.php',
                    type:'post',
                    data:{forgot_pass:forgot_pass,new_pass:password},
                    success:function(response){
                      
                        if(response == 1){
                            alert("Password is Change successfuly..!")
                            window.location="index.php";

                       }
                    }
                });
            }
        });

   }); 
    
$(document).ready(function() {
    var x_timer;    
    $("#username").keyup(function (e){
        clearTimeout(x_timer);
        var user_name = $(this).val();
        
            $("#user_result").html('<i class="fa fa-spinner fa-spin" style="color:black;font-size:18px"></i>');
            x_timer = setTimeout(function(){
              
                check_username_ajax(user_name);
            }, 2500);
        
    }); 

function check_username_ajax(username){
    
    $.post('login_page.php', {'username_avlability':username}, function(data) {
  
      $("#user_result").html(data);
    });
}
});

 //-----------Script for Change Password  start here------------
    $(document).ready(function(){ 
        $("#but_submit1").click(function(){

            var current_Password = $("#currentPassword").val().trim();
            var new_Password = $("#newPassword").val().trim();
            var confirm_Password = $("#confirmPassword").val().trim();
            if(current_Password.length == 0){
                $("#currentPassword").focus();
                $("#model_manage_profile").effect("shake");
                document.getElementById("ps").innerHTML = "Please Enter The Current Password..!!";
                document.getElementById("ps").setAttribute("class","alert alert-danger");
            }else if(new_Password.length == 0){
                $("#newPassword").focus();
                $("#model_manage_profile").effect("shake");
                document.getElementById("ps").innerHTML = "Please Enter The New Password..!!";
                document.getElementById("ps").setAttribute("class","alert alert-danger");
            }else if(confirm_Password.length == 0){
                $("#confirmPassword").focus();
                $("#model_manage_profile").effect("shake");
                document.getElementById("ps").innerHTML = "Please Enter The Conform Password..!!";
                document.getElementById("ps").setAttribute("class","alert alert-danger");
            }else if(confirm_Password != new_Password){
                $("#newPassword").val("");   
                $("#confirmPassword").val("");
                $("#newPassword").focus();
                $("#model_manage_profile").effect("shake");
                document.getElementById("ps").innerHTML = "Please Enter The Same Password..!!";
                document.getElementById("ps").setAttribute("class","alert alert-danger");
            }else{
                $.ajax({
                    url:'change_pswd.php',
                    type:'post',
                    data:{current_Password:current_Password,new_Password:new_Password},
                    success:function(response){
                        var msg = "";

                        if(response == 1){
                            window.location.reload();
                            alert("Password Chanegd successfuly..!!");
                       }else{
                           $("#currentPassword").val("");   
                           msg = "Invalid Current password...!";
                           $("#model_manage_profile").effect("shake");
                           $("#currentPassword").focus();
                           document.getElementById("ps").innerHTML = msg;
                           document.getElementById("ps").setAttribute("class","alert alert-danger ");
                       }

                       

                    }
                });
            }
        });

   }); 


 //-----------Script for Change Password  Ends  here------------