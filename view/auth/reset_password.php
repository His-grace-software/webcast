<?php include 'connection/connection.php'?>

<?php
$email=$_GET['email'];
?>

<?php
 $query=mysqli_query($conn,"SELECT * FROM `user_tab` WHERE email='$email'") or die('Cannot Check Email for Reset Password!');
 $userdata=mysqli_fetch_array($query);
 $firstname=$userdata['firstname'];
 $lastname=$userdata['lastname'];

$otp= rand(000000,999999);
include 'connection/mail/mail.php'
?>
<?php
$query=mysqli_query($conn,"UPDATE  `user_tab` SET `otp` = '$otp' WHERE email='$email'") or die('Cannot Login!');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" s"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php require_once ("reference_page.php")?>
<title>Ecommerce - Login Page</title>
<body>
    
    <!-----------------START OF login-div----------------------->
    <div class="body-div">
        <div class="login-div">      
            <div class="next-div" id="resetpassword2">
                <div class="login-content animated fadeInUp">
                    <form method=POST action="connection/code.php?action=resetpassword2&email=<?php echo $email ?>" enctype="multipart/form-data">
                        <div class="login-content-div-in">   
                            <div class="reset-div margin-left-div" id="notify-resetpassword2"><p><i class="fa fa-user-circle"></i> Welcome <?php echo "$firstname $lastname" ?>,<br>
                                Kindly enter OTP sent to your email address (<?php echo $email?>) to continue the process</p>
 
                            </div>    
                            <label>OTP<span>*</span></label><br>
                            <input type="text" class="textbox" name="otp_name" id="otp_name" required title="OTP" placeholder="OTP"> <br>
                            <div class="login-div-btn">
                                    <a href="reset_password.php?email=<?php echo $email ?>"><p>OTP not recieved? <i class="fa fa-pencil-square-o"></i> RESEND OTP</p></a>
                            </div>
                            <label>Create Password<span>*</span></label><br>
                            <input type="password" class="textbox" name="createpassword" id="createpassword" required title="Create Password"  placeholder="Create Password"> <br>
                            <label>Confirm Password<span>*</span></label><br>
                            <input type="password" class="textbox" name="confirmpassword" id="confirmpassword" required title="Confirm Password"  placeholder="Confirm Password"> <br>
                        
                            <button type="submit" class="button-class">RESET</button></span><br>  
                        </div>
                        <a href="login.php"><p>Existing User <i class="fa fa-pencil-square-o"></i> LOGIN-IN-HERE</p></a>
                    </form> 
                </div>
            </div>   
        </div>
    </div>   
    <!-----------------END OF login-div----------------------->
</body>
</html>
