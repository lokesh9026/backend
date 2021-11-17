if ($a){

$sql="select * from fashion where subcat='$a'";
$query1=mysqli_query($con,$sql) or die("error in query");                      

while($row2=mysqli_fetch_array($query1)){
        $name=$row2['name'];
        $price=$row2['price'];
        $img=$row2['img_url'];
        //  echo $name;
        $sid=$row2['id'];
        $sub=$row2['table_name'];
        // echo $sub;
        // echo $sid;
        $ss=$row2['subcat'];
        // echo $ss;


?>
    <div class="col-lg-4 col-sm-4">
    <a ><div class="box_main" href="final.php" ></a>
        <h4 class="shirt_text"><?php echo $name;?></h4>
        <p class="price_text">Price  <span style="color: #262626;"> <?php echo "$".$price;?></span></p>
        <div class="tshirt_img"><a href="new22.php?sub=<?php echo $ss; ?>"><img src="<?php echo $img;?>" ></a></div>
        <div class="btn_main">
            <?php echo "<div class='buy_bt'><a href=buy.php?id=$sid>Buy</a></div>" ?>
            <div class="seemore_bt"><a href="subcat.php">See More</a></div>
        </div>
    </div>
    </div>
    <?php }?>
    <?php }?>

</div>
</div>
</div>
</div>