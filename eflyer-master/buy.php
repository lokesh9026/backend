<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="mystyle.css">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Detail</title>
</head>

<body>

 

  <?php 
  include "con.php";
  session_start();
      
      $uid=$_GET['sub'];
        echo $uid;

        // $sql=select * from upes where id='$sid'
        $query3=mysqli_query($con,"select * from fashion where prod_id='$uid'") or die("error inquery");
        $row3=mysqli_fetch_array($query3);

        $id=$row3['prod_id'];
        $name=$row3['name'];
        $price=$row3['price'];
        $img=$row3['img_url'];
        // $desc=$row3['description'];
        // echo $price;
       
        ?>


  <!-- nav bar ends -->
  <div class="container p-3">
    <div class="row">
      <div class="pic col">
        <!-- <img src="img" height="500px" width="400px"> -->
       <?php echo "<img src='$img' height=500px width=400px>"; ?>
      </div>


      <div class="new col">
     
        <h5><?php echo $name?></h5>
        
        <p>Available offers</p>

        <p>Special PriceGet extra 30% off (price inclusive of discount)T&C</p>

      
        <p>Bank Offer15% Instant discount on first Pay Later order of ₹500 and aboveT&C</p>

        <h5>Colours Available</h5>
        <button type="button" class="btn btn-primary">Blue</button>
        <button type="button" class="btn btn-secondary">Gray</button>
        <button type="button" class="btn btn-success">Green</button>
        <button type="button" class="btn btn-danger">Danger</button>
        <button type="button" class="btn btn-warning">Yellow</button>
        <button type="button" class="btn btn-info">Light Blue</button>
        <br>
        <br>
        <h5>Size Available</h5>
        <button type="button" class="btn btn-secondary">S</button>
        <button type="button" class="btn btn-secondary">M</button>
        <button type="button" class="btn btn-secondary">XL</button>
        <button type="button" class="btn btn-secondary">XXL</button>
        <br>
        <br>
        <h3><?php echo "Price: $".$price; ?></h3>


        <br>


        <!-- <a class="btn btn-primary" href="cart.php" role="button">Add to Mycart</a> -->
        <?php echo "<a href=cart.php?sub=$id >My chart </a>"?>

      </div>

    </div>
  </div>
  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>