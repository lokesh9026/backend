<?php
session_start();
include "conn.php";


if($_SESSION['email']=='')
{
    header('Location:admin.php');
}


$email=$_SESSION['email'];
$query1=mysqli_query($con,"select name from upes where email='$email'") or die("error in query");
$row1=mysqli_fetch_array($query1);
echo "hello " .$row1['name'];
 

$did=$_GET['id'];
echo $did;

$query2=mysqli_query($con,"DELETE FROM upes where id=$did");
if ($query2)
{
    echo "Information deleted";
    header ('Location:dashboard.php');
}


?>