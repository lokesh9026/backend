<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

</head><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<body>


     <div class="container">
       <br>
     <h5 style="text-align:center;">Product List</h5>
    
<form method="post">
<br>     
   <br>
     <table class="table">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Categories</th>
            <th scope="col">Links</th>
            
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>fashion</td>
            <td><input type="submit" value="details" name="fdel"> </td>
            
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>jewellery</td>
            <td><input type="submit" value="details" name="jdel" ></td>
           
          </tr>
          <tr>
            <th scope="row">3</th>
            <td >electronic</td>
            
            <td><input type="submit" value="details" name="edel" ></td>
          </tr>
        </tbody>
      </table>

    </form>
    </div>
  

    <?php 
    session_start();
    $a=$_SESSION['sub'];

    
    echo $a;
if (isset($_POST['jdel'])){
  header('Location:jdel.php');
}

if (isset($_POST['edel'])){
  header('Location:edel.php');
}

if (isset($_POST['fdel'])){
  header('Location:fdel.php');
}


    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>