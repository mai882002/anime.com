<?php  
session_start();

if(isset($_SESSION['Username']))
include("header.php") ;
else
header("location:index.php");	
?>


<div class="bgded overlay" style="background-image:url('images/Photo-blogpost.jpg');">
  <div id="pageintro" class="hoc clear"> 
    <article>
      <h3 class="heading">Anime</h3>
      <p>The application / is an application for booking photographers, through which customers can request photo sessions easily and reliably, and it is also a platform for photographers through which their best and most famous photos are displayed to reach customers in an easy and fast way.</p>
 
    </article>
  </div>
</div>




<div class="wrapper row2">
  <section id="ctdetails" class="hoc container clear"> 
   <div class="one_quarter1"> &nbsp;&nbsp; </div>
   <article class="two_third">
<br>
<br>

  		   <?php
	
    if(isset($_SESSION['Username']))
    {
        echo ' <h2> Wellcome ' . $_SESSION['Username'].'</h2><br/>';
        
    }
    else
    {
        header("location:index.php");
    }
?>
 
 <h2> Please select serives
      <ul class="clear">
        <li class="active"><a href="index.php">Home</a></li>
        
      
        <li><a href="">Movise</a>
		<ul>
		<li><a href="addmovise.php">Add</a></li>
		
		  <li><a href="updatemovise.php">Update</a></li>
		   		  <li><a href="updatemovise.php">Delete</a></li>

		  </ul>
		</li>
    
      </ul>
	  <h2>
 
  </section>
  
  
  </article>

</div>
<?php include("footer.php");?>