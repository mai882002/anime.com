<?php  
session_start();

if(isset($_SESSION['Customer_username']))
include("header.php") ;
else
header("location:index.php");	
?>

  		   <?php
	
    if(isset($_SESSION['Customer_username']))
    {
        echo ' <h1> Wellcome ' . $_SESSION['Customer_username'].'</h1><br/>';
        
    }
    else
    {
        header("location:index.php");
    }
?>
<center>
<form>
  
 <div class="card-title">
 <div class="card-title">
 <h2 > Please select serives </h2>
 <nav class="nav">
 <ul>
        <li class="active"><a href="index.php">Home</a></li>
  
        <!-- <li><a href="">food</a>
        <ul> -->
		    <li><a href="addmovise.php">Add</a></li>
		    <li><a href="updatemovise.php">Update</a></li>
		   	<li><a href="updatemovise.php">Delete</a></li>
        <li><a href="updatebooking.php">Booking</a></li>
         
        
  </ul>
    </nav>
  </div>
  
  </form>

  </center>
  <style>
body{
    padding: 0;
    margin: 0;
    font-family: sans-serif;
    background: url(../imges/33.jpeg);
    background-size:cover ;
}
h1{
  text-align: center;
  color: black ;
  font-size:20px;
}
h2{
  text-align: center;
  color: #be1e7c ;
  font-size:40px;
}
form{
    position: absolute;
    top:  50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 350px;
    height: 420px;
    background: black;
    border-radius: 15px;
    box-sizing: border-box;
}
.nav ul li
{
  display: white;
  list-style: none;
  margin: 20px 10px;
}

.nav ul li a
{
  text-decoration: none;
  color: white;
  font-size: 1.5em;
  font-weight: 25;
  padding-left: 1px;
	top: 20px;
}

.nav a:hover{
    color:#be1e7c;

}

    </style>

</div>
 </div>
<script src="./js/app.js"></script>