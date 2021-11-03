<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin pannel</title>
    <link rel='stylesheet' href='style.css' >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body style="background-color:powderblue;">

<div class="container " style="text-align:center ;" >
    <form  action="admin.php" method="post">
        Username :<input type="text" name="user" ><br><br>
        Password : <input type="text" name="pass" ><br><br>
        <input type="submit" value="login" name="login" >
        <input type="submit" value="signup" name="signup" ><br><br>
        <!-- <a href=register.php>Signup</a><br><br> -->
</div>

</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

<?php
        error_reporting(0);

        if (isset($_POST['login']))
        {
        $user=$_POST['user'];
        $pass=$_POST['pass'];

        $con=mysqli_connect("localhost","root","","college") or die ("error connection fail");

        $sql="select * from upes where email='$user' and password='$pass'";

        $query=mysqli_query($con,$sql) or die ("Error in the query");
        $rows=mysqli_num_rows($query);
        
        if($rows>0)
        {
            session_start();
            $_SESSION['email']=$user;
            header ('Location:dashboard.php');
        }
        else{
            echo "incorrect";
        }

        mysqli_close($con);
        
    }

    if (isset($_POST['signup'])){
        header('Location:register.php');
    }
    
?>



