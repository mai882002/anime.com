
<?php

include("connection.php");
$id=$_GET['id'];

$sql="DELETE FROM `movies` WHERE `movies_ID`=$id";
if(mysqli_query($con,$sql))
{
?>
<script>
alert("The data is deleted ");

</script>
<?php
header("location:updatemovise.php");

}
else
{
?>

<script>
alert("The data is not delete ");

</script>
<?php
}
?> 