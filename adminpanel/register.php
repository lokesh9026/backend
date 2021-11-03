
<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
</head>
<body>
<form  action="" method="post">
       
        Name :<input type="text" name="name" ><br><br>
        email : <input type="text" name="email" ><br><br>
        password :<input type="password" name="pass"><br>
        mobile :<input type="text" name="mob"><br>
        Branch:<input type="text" name="bran"><br>
        <input type="submit" value="Register" name="insert" ><br><br>
</form>
<?php
    if($_SESSION['email'] != ''){
        echo "<a href='logout.php'>Logout</a>";
    }
?>

</body>
</html>


<?php
if (isset($_POST['insert']))
{
$sid=$_POST['id'];
$sname=$_POST['name'];
$semail=$_POST['email'];
$spassword=$_POST['pass'];
$smobile=$_POST['mob'];
$sbranch=$_POST['bran'];

error_reporting(0);

$con=mysqli_connect("localhost","root","","college") or die ("error in connection");

echo "hi";
$query=mysqli_query($con,"Insert into upes(name,branch,mobile,email,password)
values('$sname','$sbranch',$smobile,'$semail','$spassword')") or die ("Error in Query");


if ($query)
{
    echo "data is inserted";
    header('Location:admin.php');

}
else{
    echo "error in inserting";
}
mysqli_close($con);


}

?>