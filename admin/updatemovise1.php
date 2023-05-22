
<?php include("header.php") ;?>



<?php
				
$id=$_GET['id'];
include("connection.php");

$query="SELECT * FROM `movies` WHERE `movies_ID`=$id";
$sql=mysqli_query($con,$query); 
if(mysqli_num_rows($sql)>0)
{
?>
  <h2 class="heading" style="font-size:30"> Update  availability an Movies</h2>
<?php
while($row=mysqli_fetch_array($sql))
{ 
?>	  
<form method="post" action="" id="contactform" enctype="multipart/form-data">
    <fieldset>
		<input type="text" placeholder="Movise Name" value="<?php echo  $row['movies_name'];?>" name="movies_name" required>
    <input type="password" placeholder="Description" value="<?php echo  $row['movies_Description'];?>" name="movies_Description" required>
    <input value="picture" type="file" name="upload" required class="form-control" >
    <input type="submit" name="submit" value="Update">
    </fieldset>
</form>
      
<?php }}?>

  </section>
  
  <?php 	
if(@$_POST['submit'] and $_POST['submit']=='Update' )
{
include("connection.php");

$movies_name=$_POST['movies_name'];
$movies_Description=$_POST['movies_Description'];



$filetempname=$_FILES['upload']['tmp_name'];
$filename=$_FILES['upload']['name'];
$type=$_FILES['upload']['type'];
$error=$_FILES['upload']['error'];

$random=rand(0,99);
$url=date('d-m-y').$random.$filename;
$uploadDirectory=dirname(__FILE__).'/uploaded/';
$datapage['page_image']   = $uploadDirectory.$url;

$destination=$uploadDirectory.date('d-m-y').$random.$filename;
move_uploaded_file($filetempname, $destination);
$Photo='uploaded/'.date('d-m-y').$random.$filename;



$sql1="UPDATE `movies` SET `movies_name`='$movies_name',
`movies_Description`='$movies_Description',`Photo`='$Photo' WHERE `movies_ID`=$id";
if(mysqli_query($con,$sql1))
{
?>
<script type="text/javascript">
alert(" Data has been successfully updated");

</script>
<?php
header("location:updatemovise.php");
}
else
{
	
?>
<script type="text/javascript">
alert(" The data is not update");

</script>
<?php
}

}
	
?>
 </article>

</div>
<style>
  body{
    padding: 0;
    margin: 0;
    font-family: sans-serif;
    background: url(../imges/33.jpeg);
    background-size:cover ;
}
  form{
    position: absolute;
    top:  50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 350px;
    height: 420px;
    background: rgba(0,0,0,5);
    border-radius: 15px;
    box-sizing: border-box;
  }
h2{
color: white;
text-align: center;
margin-top: 90px;
}
input[type="text"],[type="password"]{
position: absolute;
outline: none;
border:none;
width: 250px;
height: 35px;
border-bottom:2px solid #be1e7c;
background: none;
color: white;
}
input[type="text"]{
top:140px;
left: 50px;
}
input[type="password"]{
top: 210px;
left: 50px;
}
::placeholder{
color: white;
}
input[value="Update"]{
position: absolute;
top:305px;
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
input[value="Update"]:hover{
background: white;
color: #be1e7c;
}
input[value="picture"]{
position: absolute;
top:260px;
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
input[value="picture"]:hover{
    background: white;
    color: #be1e7c;
}
</style>
<script src="./js/app.js"></script>