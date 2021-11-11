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
    <h5 style="text-align:center;">Update Your Product</h5>
    <div class="container mt-5">


    <form class="row g-3" method="post" enctype="multipart/form-data">
        <div class="col-md-4">
          <label for="inputEmail4" class="form-label">Product Name</label>
          <input type="text" name="name" class="form-control" id="inputEmail4">
        </div><br>
        <div class="col-md-4">
          <label for="inputPassword4" class="form-label">Product Price</label>
          <input type="text" name="price" class="form-control" id="inputPassword4">
        </div>

        <div class="col-md-4">
          <label for="inputPassword4" class="form-label">Product Description</label>
          <input type="text" name="desc" class="form-control" id="inputPassword4">
        </div>



        <div class="col-4">
          <label for="inputAddress" class="form-label">Image</label>
          <input type="file" class="form-control" name="file" placeholder="1234 Main St">
        </div>
<!--   
        <div class="col-md-4">
          <label for="inputState" class="form-label">Category</label>
          <select id="inputState" name="cat" class="form-select">
            <option selected>Choose...</option>
            <option>Fashion</option>
            <option>Jewelellery</option>
            <option>Electronic</option>
          </select>
        </div> -->
 

        <div class="col-12">
          <input type="submit" class="btn btn-primary" name ="submit" value="Update">
        </div>

      </form>
    </div>

<?php


include "con.php";
if(isset($_POST['submit']))
{ 
$filepath = "images/".$_FILES["file"]["name"];
$name=$_POST['name'];
$price=$_POST['price'];
$desc=$_POST['desc'];

// echo $name;
// echo $price;
// echo $desc;
// echo $filepath;
$sql="insert into fashion (name,price,img_url,description) VALUES ('$name' ,'$price' ,'$filepath','$desc')";
$query=mysqli_query($con,$sql) or die ("Error in Query");

move_uploaded_file($_FILES["file"]["tmp_name"], $filepath);

if($query) 
{    
  
  echo "Data Updated";
  // header('Location:dashboard.php');
} 
else 
{
echo "Error !!";
}
} 

mysqli_close($con);
?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  
  </body>
</html>