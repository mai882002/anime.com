
  <?php include("header.php");?>



<div id="pageintro" class="hoc clear"> 
  <article>
    <h3 class="heading">Photo Session System</h3>
    <p>The application / is an application for booking photographers, through which customers can request photo sessions easily and reliably, and it is also a platform for photographers through which their best and most famous photos are displayed to reach customers in an easy and fast way.</p>

  </article>
</div>





<div class="wrapper row2">
<section id="ctdetails" class="hoc container clear"> 
 <div class="one_quarter1"> &nbsp;&nbsp; </div>
 <article class="three_quarter">
<br>
<br>
    <h2 class="heading" style="font-size:30">Add phones</h2>
    <p class="nospace btmspace-15">Please enter phone information</p>
    

        <form method="post" action="" id="contactform" enctype="multipart/form-data">
      <div>
        
      <label for="name"><span>*</span>Change Status</label><br>
  <select name="Status">
      <option value="Accept">Accept</option>
      <option value="Reject">Reject</option>
    
  </select><br>
  
        
         <input type="submit" name="submit" value="Change">
      </div>
      
    </form>

</section>

<?php 	
if(@$_POST['submit'] and $_POST['submit']=='Change' )
{
include("connection.php");
$id=$_GET['id']
$Status=$_POST['Status'];

$sql1="UPDATE `booking` SET `Statuse`='$Status' WHERE  `Booking_ID`= '$id'";
if(mysqli_query($con,$sql1))
{
?>
<script type="text/javascript">
alert("Course has been successfully added");

</script>
<?php
}
}?>
  
  
</article>

</div>
<script src="./js/app.js"></script>
