<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h5 style="text-align:center";>Welcome</h5>
<div class="container">
    <form method ="POST">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" name="password">
        </div>

        <input type="submit" name="submit" value="Submit"></input>
        <input type="submit" name="signup" value="signup"></input>
      </form>

    </div>

<?php

error_reporting(0);
include "con.php";
if (isset($_POST['submit']))
{
$user=$_POST['email'];
$pass=$_POST['password'];



$sql="select * from user where email='$user' and password='$pass'";

$query=mysqli_query($con,$sql) or die ("Error in the query");
$rows=mysqli_num_rows($query);
$row=mysqli_fetch_array($query);


if($rows>0)
{
    session_start();
    $_SESSION['email']=$user;
   
    echo $row['email'];
    header ('Location:dashboard.php');
}
else{
    echo "incorrect credential";
}


if (isset($_POST['signup']))
{
  header ('Location:signup.php');
}

mysqli_close($con);

}

?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  

  </body>
</html>