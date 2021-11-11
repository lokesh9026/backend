<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>signup</title>
  </head>
  <body>
    <h1></h1>

    <div class="container">

    <!--Section: Contact v.2-->
<section class="mb-4">

    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-center my-4">Sign Up</h2>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5">Begins the Journey with us!!</p>

    <div class="row">

        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5">
            <form id="contact-form" name="contact-form"  method="POST">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <label for="name" class="">Your name</label>
                            <input type="text" id="name"  name="name" class="form-control">
                            
                        </div>
                    </div>

                </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <label for="email" class="">Your email</label>
                            <input type="text" id="email" name="email" class="form-control">
                            
                        </div>
                    </div>
                    <!--Grid column-->

                
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-6">

                        <div class="md-form mb-0">
                            <label for="subject" class="">Mobile</label>
                            <input type="text" id="subject" name="mobile" class="form-control">
                            
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <label for="message">Address</label>
                            <textarea type="text" id="message" name="address" rows="2" class="form-control md-textarea"></textarea>
                            
                        </div>

                    </div>
                </div>
                <!--Grid row-->
                 <br>
                <input type="submit" name="submit" class="btn btn-primary" value="register"></input>

            </form>

            <div class="status"></div>
        </div>
    



    </div>

</section>
</div>
<!--Section: Contact v.2-->

<?php

echo "hi";
include "con.php";


if(isset( $_POST['submit'])){

$name = $_POST['name'];

$email = $_POST['email'];

$mobile = $_POST['mobile'];

$address = $_POST['address'];




// $sql="Insert into signup(name,email,mobile,address)
// values('$name','$email',$mobile,'$address')" ;
// echo $sql;



$query=mysqli_query($con,"Insert into signup(name,email,mobile,address)
        values('$name','$email',$mobile,'$address')") or die ("Error in Query");

}
// $content="From: $name \n Email: $email \n Message: $message";
// $recipient = "youremail@here.com";
// $mailheader = "From: $email \r\n";
// mail($recipient, $subject, $content, $mailheader) or die("Error!");
// echo "Email sent!";
?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
  </body>
</html>