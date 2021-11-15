
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Prodoct Details</title>
  </head>
  <body>
  <p id="p2">Hello</p>
  <script>
document.getElementById("p2").style.color = "blue";
document.getElementById("p2").style.fontFamily = "Arial";
document.getElementById("p2").style.fontSize = "larger";
</script>
    <h5 style="text-align:center;">Prodoct Details</h5>
<div class="container">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">image</th>
      <th scope="col">name</th>
      <th scope="col">price</th>

    </tr>
    </thead>
  
    <tbody>

     <?php 
     include "con.php";
    $a=$_GET['sub'];
    echo "hi";

    echo $a;
     $sql="select * from fashion where subcat= '$a'";
     echo $sql;
    //  $query2=mysqli_query($con,$sql) 

     $query3=mysqli_query($con,$sql) or die("error in query"); 
     echo $query;
     while ($row2=mysqli_fetch_array($query3)){
        // while($row2=mysqli_fetch_array($query2))
        $buy=$row2['prod_id'];
        echo $buy;       

       echo "<tr>";
        // $_SESSION['id']=row2['prod_id'];
       echo "<td>".$row2['prod_id']."</td>";
    //    echo "<td><img src=".$row2['img_url']." height=50px width=50px></td>";

       echo "<td> <a href='buy.php?sub=$buy'><img src=".$row2['img_url']." height=50px width=50px </a></td>";
       echo "<td>".$row2['name']."</td>";
       echo "<td>$".$row2['price']."</td>";
  
       echo"</tr>";
          
       echo "</tr>";
     }
     
     
    ?>
</tbody>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    </div>
  </body>
</html>
