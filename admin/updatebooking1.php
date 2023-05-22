
  <?php include("header.php");?>

<center>

<h2 class="heading" style="font-size:30">Add Movise</h2><br><br><br>

<p class="nospace btmspace-15">Please enter Movise information</p>
<form method="post" action="" id="contactform" enctype="multipart/form-data">
      <div>
      
  <label  for="name">Change Status</label><br><br>
  <select name="Status">
      <option value="Accept">Accept</option>
      <option value="Reject">Reject</option>  
  </select>
  
    
         <br><input  type="submit" name="submit" value="Change">
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
label{
  text-align: center;
  color: black ;
  font-size:20px;

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
input[value="Change"]{
    
    top:200px;
    left: 110px;
    width: 130px;
    height: 35px;
    background: #be1e7c;
    border: none;
    outline: none;
    color: black;
    border-radius: 15px;
    font-size: 20px;
}
input[value="Change"]:hover{
    background: white;
    color: #be1e7c;
}
</style>

</section>

<?php 	
if(@$_POST['submit'] and $_POST['submit']=='Change' )
{
include("connection.php");
$id=$_GET['id'];
$Status=$_POST['Status'];

$sql1="UPDATE `booking` SET `status`='$Status' WHERE  `Booking_ID`= $id";
if(mysqli_query($con,$sql1))
{
?>
<script type="text/javascript">
alert("Movise has been successfully added");

</script>
<?php
}
}?>


</article>

</div>
<script src="./js/app.js"></script>
