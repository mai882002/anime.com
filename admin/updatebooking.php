<?php include("header.php");?>


<?php
				

include("connection.php");

$query="SELECT * FROM `booking`";
$sql=mysqli_query($con,$query); 
if(mysqli_num_rows($sql)>0)
{
	
?>

 <h2 class="heading" style="font-size:30"> All availability status </h2>
      <p class="nospace btmspace-15">Please select an appointment to update status</p>
      <table >
    <thead>
      <tr>
        <th>Booking </th>
        <th>Cutomer username</th>
         <th>Status</th>
	      <th>Update</th>

		
      </tr>
    </thead>
<?php
while($row=mysqli_fetch_array($sql))
{ 
?>

    <tr>
      <td><?php echo  $row['Booking_ID'];?> </td>
      <td><?php echo  $row['customer_usrname'];?> </td>
   <td><?php echo  $row['status'];?> </td>
		 <td><a class="menu-list-item" href="updatebooking1.php?id=<?php echo  $row['Booking_ID'];?>">Update<a></td>
		 
    </tr>
    
	
<?php 
}
?>
</table>
<style>
body{
    padding: 0;
    margin: 0;
    font-family: sans-serif;
    background: url(../imges/33.jpeg);
    background-size:cover ;
}
td,p{
  text-align: center;
}
    h2{
      text-align: center;
      color: black ;
      font-size:40px;
    }
    table {
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
    }

    td,  th {
    border: 1px solid  #dd83ad;
    padding: 8px;
    }

   tr:nth-child(even){background-color:#84b7cf;}

   tr:hover {background-color:  #dd83ad;}

   th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #be1e7c;
  color: black;
  }
</style>
    </div>
<?php
}
else
echo "<h2>There are no dates recorded in the database</h2>";	


?>
	 
  </section>

 </article>

</div>
<script src="./js/app.js"></script>
