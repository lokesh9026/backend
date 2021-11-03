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
    <h1></h1>


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="register.php">Insert</a>
        </li>
   
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>


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


$sql="select * from upes";
// echo $sql;
$query2=mysqli_query($con,$sql) or die("error in query");
// echo $query2;
echo "<table border=3 ><tr><td>id</td><td>name</td><td>Branch</td><td>mobile</td><td>email</td><td>edit</td><td>Delete</td></tr>";
// $row2=mysqli_fetch_array($query2);
// print_r($row2);
while($row2=mysqli_fetch_array($query2))
{
    
    $sid=$row2['id'];
    
    echo"<tr>";
    echo "<td>".$sid."</td>";
    echo "<td>".$row2['name']."</td>";
    echo "<td>".$row2['branch']."</td>";
    echo "<td>".$row2['mobile']."</td>";
    echo "<td>".$row2['email']."</td>";
    echo "<td><a href=update.php?id=$sid>Edit</a></td>";
    echo "<td><a href=Delete.php?id=$sid>Delete</a></td>";
    echo"</tr>";

}
echo"</table>";

mysqli_close($con);
 }

echo "<a href=logout.php>Logout</a> <br> <br>" ;
echo "<a href=register.php>Insert</a>";
?>