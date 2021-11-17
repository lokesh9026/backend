<?php 


$id=$_GET['id'];
echo $id;
echo "hi";
$sub=$_GET['sub'];
include "con.php";

echo $sub;


// $query2=mysqli_query($con,$sql) or die("error in query");

       
        
// while($row2=mysqli_fetch_array($query2))

$sql="select * from $sub where prod_id='$id'";
$query=mysqli_query($con,$sql);
while ($row=mysqli_fetch_array($query)){
$h=$row['hide'];}
echo $h;
if ($h==0){
    $h=1;
    echo $h;
}
else{
    $h=0;
}

$sql2="update $sub set hide=$h where prod_id='$id'";
$query=(mysqli_query($con,$sql2));

header ("Location:fdel2.php?sub=".$sub);
?>