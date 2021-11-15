<?php
$del=$_GET['id'];
include "con.php";
echo $del;
 $sql="delete from wishlist where prod_id='$del'";
 echo $del;
 $query2=mysqli_query($con,$sql) or die("error in query");

if ($query2) {
    echo "product deleted";
    header ('Location:cart.php');
}

?>