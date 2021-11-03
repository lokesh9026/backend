<?php
session_start();
include "conn.php";

if($_SESSION['email']=='')
{
    header('Location:admin.php');
}


else{
$email=$_SESSION['email'];
$query1=mysqli_query($con,"select name from upes where email='$email'") or die("error in query");
$row1=mysqli_fetch_array($query1);
echo "hello " .$row1['name'];

$uid=$_GET['id'];
echo $uid;

// $sql=select * from upes where id='$sid'
$query3=mysqli_query($con,"select * from upes where id='$uid'") or die("error inquery");
$row3=mysqli_fetch_array($query3);

$oldname=$row3['name'];
$oldmobile=$row3['mobile'];
$oldbranch=$row3['branch'];
$oldemail=$row3['email'];
$oldmobile=$row3['mobile'];
$oldpassword=$row3['password'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form  action="" method="post">
       
        Name :<input type="text" name="name" value="<?php echo $oldname ;?>" ><br><br>
        email : <input type="text" name="email" value="<?php echo $oldemail;?>" ><br><br>
        password :<input type="password" name="pass" value="<?php echo $oldpassword;?>"><br>
        mobile :<input type="text" name="mob" value="<?php echo $oldmobile?>"><br>
        Branch:<input type="text" name="bran" value="<?php echo $oldbranch;?>"><br>
        <input type="submit" value="Update" name="Update" ><br><br>
        <a href=logout.php>Logout</a><br><br>
 

</form>
</body>
</html>

<?php
if (isset($_POST['Update']))
{  
    $name=$_POST['name'];
    $sid=$_GET['id'];
    echo $name;
    
    $branch=$_POST['bran'];
    $email=$_POST['email'];
    $mobile=$_POST['mob'];
    $password=$_POST['pass'];


    $sql="update upes set name='$name', mobile=$mobile ,email='$email',branch='$branch' where id=$sid ";
  
    $query4=mysqli_query($con,$sql) or die("error in query");
  


if ($query4)
{
echo "Record updated";
header('Location:dashboard.php');
}
else{
echo "record incorrect";
}
}
mysqli_close($con);
?>