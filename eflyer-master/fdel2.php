<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Prodoct Details</title>

   
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
      <!-- font awesome -->
      <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <!--  -->
      <!-- owl stylesheets -->
      <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Poppins:400,700&display=swap&subset=latin-ext" rel="stylesheet">
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesoeet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>

  <body>
  <!-- <p id="p2">Hello</p> -->
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
      <th scope="col">edit</th>
      <th scope="col">delete</th>
      <th scope="col">hide</th>
    </tr>
    </thead>
  
    <tbody>

     <?php 
     include "con.php";
     $a=$_GET['sub'];
   //   echo $a;
   //   $sql="select * from $a";
   //   $a='fashion';
 


    
     $sql="select * from $a";
               
        // echo $sql;
        
               
        // echo $sql;
        $query2=mysqli_query($con,$sql) or die("error in query");

       
        
     while($row2=mysqli_fetch_array($query2)){
       $sid=$row2['prod_id'];
       $ss=$row2['subcat'];
       $h=$row2['hide'];
      //  echo $h;
      //  echo $ss;
       if ($h==1){
          $btn="show";
       }
       else {
          $btn="hide";
       }

         $_SESSION['id']=$sid;
         echo "<tr>";
         // $_SESSION['id']=row2['prod_id'];
         echo "<td>".$row2['prod_id']."</td>";
         //  echo "<td><img src=".$row2['img_url']." height=50px width=50px></td>";

         
         echo "<td><a href='new23.php?uid=".$ss."&sub=".$a."'><img src=".$row2['img_url']."  height=50px width=50px> </a></td>";
               
         echo "<td>".$row2['name']."</td>";
         echo "<td>Rs. ".$row2['price']."</td>";
         
         echo "<td><a href='insert2.php?sub=".$a."&pid=".$sid."&uid=".$ss."'>add</a></td>";
         echo "<td><a href=edit3.php?id=$sid>Delete</a></td>";
         echo "<td><a href=hide.php?id=".$sid."&sub=".$a."> ".$btn."</a></td>";
         echo"</tr>";
         echo "</tr>";
     }
     
     
    ?>
</tbody>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    </div>

    
  </body>
</html>