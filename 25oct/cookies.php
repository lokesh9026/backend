<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <form action="check.php" method="GET">
        <div class="mb-3">
          <label for="exampleInputEmail1" name="n1">NUMBER1</label>
          <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text"></div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" name="n2">number2</label>
          <input type="number" class="form-control" id="exampleInputPassword1">
        </div>
  
        <button type="submit" name="check">Submit</button>
      </form>

      $cookie_name = $_GET["n1"];
      $cookie_value = $_GET["n2"];
      setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
      
     
      
    
      if(!isset($_COOKIE[$check])) {
        echo "Cookie named '" . $cookie_name . "' is not set!";
      } else {
        echo "Cookie '" . $cookie_name . "' is set!<br>";
        echo "Value is: " . $_COOKIE[$cookie_name];
      }





</body>
</html>