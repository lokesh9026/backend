<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title> In my Chart</title>
  </head>
  <body>
  <p id="p2">Hello</p>
  <script>
document.getElementById("p2").style.color = "blue";
document.getElementById("p2").style.fontFamily = "Arial";
document.getElementById("p2").style.fontSize = "larger";
</script>
<h5 style="text-align:center;">In my Chart</h5>
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">image</th>
                <th scope="col">name</th>
                <th scope="col">price</th>
    
                <th scope="col">delete</th>
                <th scope="col">Make payment</th>
            </tr>
        </thead>
    <tbody>
<?php 
     
     include "con.php";
     $a=$_GET['sub'];
     //echo $a;
     $sql="select * from fashion where prod_id='$a'";
               
        //  echo $sql;
        $query2=mysqli_query($con,$sql) or die("error in query1");

     while($row2=mysqli_fetch_array($query2)){
                $sid=$row2['prod_id'];
                $_SESSION['id']=$sid;
                $img=$row2['img_url'];
                // echo $img;
                $name=$row2['name'];
                // echo $name;
                $price=$row2['price'];
                       
                $sql2="select * from wishlist where prod_id='$a'";
                $query3=mysqli_query($con,$sql2) or die("error in query1");
                //    echo $query3;
                    if (mysqli_num_rows ($query3)== 1){
                        echo "<h6 style='color:blue;text-align:center;'>product already exists in your cart</h6>";
                    }
                    else{
                
                        $sql3="insert into wishlist (prod_id,name,price,image_url) values('$sid','$name','$price','$img')";
                        $query4=mysqli_query($con,$sql3) or die("error in query2");
                        echo "inserted";
                    }            
   
                }

        $sql5="select * from wishlist";
        $query5=mysqli_query($con,$sql5) or die("error in query1");
        while ($row5=mysqli_fetch_array($query5)){
            echo "<tr>";
            echo "<td>".$row5['prod_id']."</td>";
            echo "<td><img src=".$row5['image_url']." height=50px width=50px></td>";

            echo "<td>".$row5['name']."</td>";
            echo "<td>$".$row5['price']."</td>";
            echo "<td><a href='delete.php?id=$sid'>Delete</a></td>";
            echo "<td><a href='payment.php?id=$sid'>Pay</a></td>";
            echo "</tr>";

        }

        
?>
    </tbody>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </div>
  </body>
</html>