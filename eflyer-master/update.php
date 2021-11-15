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
  <br>
    <h5 style="text-align:center;">Update Your Product</h5>
    <div class="container mt-5">

<?php
    
include "con.php";
     
session_start();
$sid=$_GET['id'];
// echo $sid;
$sql="select name,price,description,img_url from fashion where prod_id='$sid'";
               
// echo $sql;
$query2=mysqli_query($con,$sql) or die("error in query");
$row2=mysqli_fetch_array($query2);
// echo $query2;
       $oldname=$row2['name'];
       $oldprice=$row2['price'];
       $oldimg=$row2['img_url'];
       $olddesc=$row2['description'];
      //  echo $oldimg;

     ?>

     <form class="row g-3" method="post" enctype="multipart/form-data">
        <div class="col-md-4">
          <label for="inputEmail4" class="form-label">Product Name</label>
          <input type="text" name="newname" name="name" value="<?php echo $oldname ;?>" class="form-control" id="inputEmail4">
        </div><br>
        <div class="col-md-4">
          <label for="inputPassword4" class="form-label">Product Price</label>
          <input type="text" name="newprice" name="name" value="<?php echo $oldprice ;?>" class="form-control" id="inputPassword4">
        </div>

        <div class="col-md-4">
          <label for="inputPassword4" class="form-label">Product Description</label>
          <input type="text" name="newdesc" value="<?php echo $olddesc ;?>"class="form-control" id="inputPassword4">
        </div>

    
        <div class="col-4">
          <label for="inputAddress" class="form-label">Image</label>
          <input type="file" class="form-control" name="file" placeholder="1234 Main St">
        </div>
 
        <div class="col-md-4">
          <label for="inputState" class="form-label">Category</label>
          <select id="inputState" name="cat" class="form-select">
            <option selected>Choose...</option>
            <option value="fashion">Fashion</option>
            <option value="jewellery">Jewelellery</option>
            <option value="electronic">Electronic</option>
          </select>
        </div>
 

        <div class="col-12">
          <input type="submit" class="btn btn-primary" name ="submit" value="Update">
        </div>

      </form>
    </div> 

<?php




if (isset($_POST['submit']))
{  
    
    
    echo $name;
    
    $price=$_POST['newprice'];

    $cate=$_POST['cat'];
    echo $oldimg;

    

    if ($_FILES['file']['size']==0)
    {
      $filepath=$oldimg;
    }
    else{

    $filepath = "images/".$_FILES["file"]["name"];
    }
    $name = mysqli_real_escape_string($con,$_POST['newname']);

    $price=$_POST['newprice'];
    $desc=$_POST['newdesc'];
    echo $price;
    echo $desc; 
    echo $filepath;


    $sql2="update fashion set name='$name' ,price='$price',description='$desc' ,img_url='$filepath' where prod_id=$sid ";
  
    $query4=mysqli_query($con,$sql2) or die("error in query");
  
    echo $query4;

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



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  
  </body>
</html>










     