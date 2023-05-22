
<?php  
include("header.php") ;

?>
     
<?php
				

include("connection.php");

$query="SELECT * FROM `movies`";
$sql=mysqli_query($con,$query); 
if(mysqli_num_rows($sql)>0)
{
	
?>
<center>
 <h2 class="heading" style="font-size:30"> All availability status </h2>
      <p class="nospace btmspace-15">Please select an appointment to update status</p>
      <table>
    <thead>
      <tr>
        <th>movies_name </th>
        <th>Description</th>
		   <th>Update</th>
       <th>Delete</th>
		
      </tr>
    </thead>
  </center>

  <style>
    

  </style>
<?php
while($row=mysqli_fetch_array($sql))
{ 
?>

    <tr>
      <td><?php echo  $row['movies_name'];?> </td>
      <td><?php echo  $row['movies_Description'];?> </td>
  
		 <td><a class="menu-list-item" href="updatemovise1.php?id=<?php echo  $row['movies_ID'];?>">Update<a></td>
		<td><a class="menu-list-item" href="deletemovise.php?id=<?php echo  $row['movies_ID'];?>">Delete<a></td>
    </tr>
    
    <style>
      body{
    padding: 0;
    margin: 0;
    font-family: sans-serif;
    background: url(../imges/33.jpeg);
    background-size:cover ;
}

    h2{
      text-align: center;
      color: black;
      font-size:40px;
    }
    table {
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
    }

    td,  th {
    border: 1px solid rgb(250, 164, 207);
    padding: 8px;
    }

   tr:nth-child(even){background-color: #ac5555;}

   tr:hover {background-color: rgb(250, 164, 207);}

   th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #be1e7c;
  color: black;
  }
    </style>
<?php 
}
?>
</table>
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