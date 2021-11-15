<html>
<head>
<title>PHP File Upload example</title>
</head>
<body>

<form action="upload.php" enctype="multipart/form-data" method="post">
Enter Id:
<input type-="text" name="id"/><br/>
Select image :
<input type="file" name="file"><br/>
<input type="submit" value="Upload" name="Submit1"> <br/>

<a href="imgshow.php">Image</a>



</form>
<?php
$con=mysqli_connect("localhost","root","","ecomm");
session_start();
$r=$_GET['id'];
echo $r;

$query3=mysqli_query($con,"select * from upes where prod_id='$r'") or die("error inquery");
$row3=mysqli_fetch_array($query3);

$oldname=$row3['name'];
$oldmobile=$row3['price'];

}


if(isset($_POST['Submit1']))
{ 
    $id=$_POST['id'];
$filepath = "images/" . $_FILES["file"]["name"];

$sql = "INSERT INTO image (id,img_url) VALUES ($id,'$filepath')";
move_uploaded_file($_FILES["file"]["tmp_name"], $filepath);
$query =mysqli_query($con, $sql);
if($query) 
{
echo "Data Inserted";
} 
else 
{
echo "Error !!";
}
} 
?>

</body>
</html>