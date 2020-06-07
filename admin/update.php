<!DOCTYPE html>
<?php
include_once '../includes/html_head.php';
?>
<body>
    <?php
      include_once '../includes/top.php';
      @require("../requires/connection.php")
    ?>
    <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="addproduct.php">Add Product</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="viewproduct.php">View Products</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
            </li>
        </ul>
    </nav>
<?php

if($_GET){

  $id = $_GET['uid'];


$query = "SELECT * FROM tblproducts WHERE productid = '$id' ";
$result = mysqli_query($dbcon,$query);

$total = mysqli_num_rows($result);

if($total>0){

  while($row = mysqli_fetch_assoc($result)){
    $id = $row['productid'];
$name = $row['productname'];
$price = $row['productprice'];
$code = $row['productcode'];
$stock = $row['productinstock'];
$discount = $row['productdiscount'];
$size = $row['productsizes'];
$detail = $row['productdetails'];

$image = $row['productprofile'];
    

?>


    <div class="container">
    <div class="row">
    <div class="col-md-4">
      <form method="POST" action="update_verify.php" enctype="multipart/form-data">
        <div class="form-group m-2">
            <input type="text" class="form-control" name="productid" placeholder="Product ID" value="<?php echo $id; ?> " readonly>
            <input type="text" class="form-control" name="productname" placeholder="Product Name" value="<?php echo $name; ?>">
            <input type="text" class="form-control" name="productprice" placeholder="Product Price" value="<?php echo $price; ?>">
            <input type="text" class="form-control" name="productcode" placeholder="Product Code" value="<?php echo $code; ?>">
            <label>In Stock: </label>
            <?php
            if ($stock==1){
              ?>
              <label class="radio-inline"><input type="radio" name="productinstock" value="1" checked>Y</label>
              <label class="radio-inline"><input type="radio" name="productinstock" value="0"> N </label>
              <?php
            }
            else{
              ?>
              <label class="radio-inline"><input type="radio" name="productinstock" value="1">Y</label>
              <label class="radio-inline"><input type="radio" name="productinstock" value="0" checked> N </label>
              <?php
            }
            ?>
            <input type="text" class="form-control" name="productdiscount" placeholder="Product Discount" value="<?php echo $discount; ?>">
            <input type="text" class="form-control" name="productsize" placeholder="Product Size" value="<?php echo $size; ?>">
            <input type="text" class="form-control" name="productdeatails" placeholder="Product details" value="<?php echo $detail; ?>">
            <label>Choose Image: </label>
            <input type="file" class="form-control" name="productprofile" value="<?php echo $image; ?>">
            <br>
            <?php
        echo "<img src='../images/".$row['productprofile']."' width='100' height='100' >";
    ?>
            <br><button type="submit" name="submit" class="btn btn-primary mt-3">Update</button>
        </div>
        <?php
        }}}
        ?>
      </form>
    </div>
    </div>
    </div>

<?php
  include_once '../includes/footer.php';
?>
    
</body>
</html>