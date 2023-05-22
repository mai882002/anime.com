<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Login and Registration </title>
      <link rel="stylesheet" href="./css/login.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <body>
      <div class="wrapper">
         <div class="title-text">
            <div class="title login">
               Login 
            </div>
            <div class="title signup">
                Register 
            </div>
         </div>
         <div class="form-container">
            <div class="slide-controls">
               <input type="radio" name="slide" id="login" checked>
               <input type="radio" name="slide" id="signup">
               <label for="login" class="slide login">Login</label>
               <label for="signup" class="slide signup">Register</label>
               <div class="slider-tab"></div>
            </div>
            <div class="form-inner">
               <!-- start form login-->

               <form method="post" action="" enctype="multipart/form-data" class="login">
                  <div class="field">
                     <input type="text" name="Customer_username" placeholder="Username" required>
                  </div>
                  <div class="field">
                     <input type="password" name="Customer_password" placeholder="Password" required>
                  </div>
                  <div class="pass-link">
                     <a href="#">Forgot password?</a>
                  </div>
                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input type="submit" name="submit" value="Login">
                  </div>
                  <div class="signup-link">
                     Not a member? <a href="">Regest Now</a>
                  </div>
               </form>


               <!-- end form login-->

               <!--  start login php-->

               <?php 	
	
if(isset($_POST['submit']) and $_POST['submit'] == 'Login')	
{
include 'connection.php';
$Customer_username=$_POST['Customer_username'];

$Customer_password=$_POST['Customer_password'];

$query="SELECT * FROM `anime` WHERE `Customer_username`='$Customer_username' and `Customer_password`='$Customer_password'";
$sql=mysqli_query($con,$query);
if($sql->num_rows>0)
{
session_start();
$_SESSION['Customer_username']= $Customer_username;

?>
<script type="text/javascript">
alert("Logged in successfully");

</script>
<?php	
header("location:index.php");
}
else
{
?>

<script type="text/javascript">
alert("The username and password not found try again");

</script>

<?php
}

}?>
               
               <!--  end login php-->


               <!-- start form Register-->
               <form method="post" action="" enctype="multipart/form-data"class="signup">
                  <div class="field">
                     <input type="email" name="Customer_email" placeholder="Email" required>
                  </div>
                  <div class="field">
                     <input type="text"  name="Customer_username" placeholder="Username" required>
                  </div>
                  <div class="field">
                     <input type="text" name="Customer_phone" placeholder="phone" required>
                  </div>
                  <div class="field">
                     <input type="password" name="Customer_password" placeholder="password" required>
                  </div>
                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input type="submit" name="submit" value="Register">
                  </div>
               </form>
               <!-- end form Register-->

               <!--  start Register php-->
<?php 	
if(@$_POST['submit'] and $_POST['submit']=='Register' )
{
include("connection.php");

$Customer_email=$_POST['Customer_email'];
$Customer_username=$_POST['Customer_username'];
$Customer_phone=$_POST['Customer_phone'];
$Customer_password=$_POST['Customer_password'];

$query="SELECT * FROM `anime` WHERE `Customer_username` ='$Customer_username' or Customer_email='$Customer_email'";
$sql=mysqli_query($con,$query);

$row=mysqli_fetch_array($sql);
if($row>0){
?>
<script type="text/javascript">
alert("Name or username already exists");

</script>
<?php
}
else{
  $sql1="INSERT INTO `anime` (`Customer_username`, `Customer_password`, `Customer_email`, `Customer_phone`)
   VALUES ('$Customer_username', '$Customer_password', '$Customer_email', '$Customer_phone');";
 mysqli_query($con,$sql1)
 ?>
 <script type="text/javascript">
 alert("Membership has been successfully registered");
 
 </script>
 <?php
 }
 }?>

<!--  end Register php-->
            </div>
         </div>
      </div>
      <script>
       const loginText = document.querySelector(".title-text .login");
const loginForm = document.querySelector("form.login");
const loginBtn = document.querySelector("label.login");
const signupBtn = document.querySelector("label.signup");
const signupLink = document.querySelector("form .signup-link a");
signupBtn.onclick = (()=>{
  loginForm.style.marginLeft = "-50%";
  loginText.style.marginLeft = "-50%";
});
loginBtn.onclick = (()=>{
  loginForm.style.marginLeft = "0%";
  loginText.style.marginLeft = "0%";
});
signupLink.onclick = (()=>{
  signupBtn.click();
  return false;
});
      </script>
   </body>
</html>
