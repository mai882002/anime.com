<?php  
session_start();

if(isset($_SESSION['customer_usrname']))

include("header.php") ;
else
header("location:index.php");	
?>
<div class="container">
        <div class="content-container">
            
            <div class="movie-list-container">
                <h1 class="movie-list-title">NEW RELEASES</h1>
                <div class="movie-list-wrapper">
                    <div class="movie-list">
                    <?php
				
                include("connection.php");
                
                $query="SELECT * FROM `movies` ";
                $sql=mysqli_query($con,$query); 
                if(mysqli_num_rows($sql)>0)
                {

                                
                
                while($row=mysqli_fetch_array($sql))
                { 
                ?>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="admin/<?php echo  $row['photo'];?>" alt="">
                            <span class="movie-list-item-title"><?php echo  $row['movies_name'];?></span>
                            <p class="movie-list-item-desc"><?php echo  $row['movies_Description'];?></p>
                            <form method="post" action="">
                            <input type="hidden" name="movies_ID" value="<?php echo  $row['movies_Description'];?>">
                            <input class="movie-list-item-button" type="submit" name="submit" value="Booking">
                            
                            </form>

                        
                            </div>
                  <?php
                }
                }?>    
                    </div>
                    <i class="fas fa-chevron-right arrow"></i>
                </div>
            </div>


  <?php 	
	
if(isset($_POST['submit']) and $_POST['submit'] == 'Booking')	
{
include 'connection.php';

$movies_ID =$_POST['movies_ID'];
$customer_usrname=$_SESSION['customer_usrname'];

$query="INSERT INTO `booking` (`customer_usrname`, `movies_ID`, `status`) 
VALUES ('$customer_usrname', '$movies_ID', 'Booking');";

if(mysqli_query($con,$query))
{
?>
<script type="text/javascript">
alert("Added in successfully");

</script>
<?php	

}
else
{
?>

<script type="text/javascript">
alert("No");

</script>

<?php
}
}
?> 
     </div>             
    <script src="./js/app.js"></script>

<?php include("footer.php");?>