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

$query="SELECT * FROM `admin` WHERE `Admin_usrname`='$Customer_username' AND `Admin_Password`='$Customer_password'";
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
header("location:admincpanel.php");
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

</body>
</html>