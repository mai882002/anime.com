<?php include("header.php");?>
<br>
      <center>
        <p class="nospace btmspace-15">Please entering Movies information</p>
      </center>
      <h2>Add Movies</h2>

      	<form method="post" action="" id="contactform" enctype="multipart/form-data">
        <fieldset>
		    <input type="text" placeholder="Movise Name"  name="movies_name" required>
        <input type="password" placeholder="Description" name="movies_Description" required>
        <input type="file" value="picture" name="upload" required class="form-control" >
        <input type="submit" name="submit" value="Create">
        </fieldset>
      </form>
      </section>
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
input[value="Create"]{
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
input[value="Create"]:hover{
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
 
  
<?php 	
if(@$_POST['submit'] and $_POST['submit']=='Create' )
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
$photo='uploaded/'.date('d-m-y').$random.$filename;

$sql1="INSERT INTO `movies` (`movies_name`, `movies_Description`, `photo`)
VALUES ('$movies_name', '$movies_Description', '$photo');";
if(mysqli_query($con,$sql1))
{
?>
<script type="text/javascript">
alert("Movies has been successfully added");

</script>
<?php
}
}?>
	
	
  </article>

</div>
<script src="./js/app.js"></script>
