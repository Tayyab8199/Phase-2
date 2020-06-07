<!DOCTYPE html>
<?php
include_once '../includes/html_head.php';
?>
<body>
    <?php
      include_once '../includes/top.php';
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
    <div class="container">
    <div class="row">
    <div class="col-md-4">
      <form method="POST" action="addproduct_verify.php" enctype="multipart/form-data">
        <div class="form-group m-2">
            <input type="text" class="form-control" name="productid" placeholder="Product ID">
            <input type="text" class="form-control" name="productname" placeholder="Product Name">
            <input type="text" class="form-control" name="productprice" placeholder="Product Price">
            <input type="text" class="form-control" name="productcode" placeholder="Product Code">
            <label>In Stock: </label>
            <label class="radio-inline"><input type="radio" name="productinstock" value="1">Y</label>
            <label class="radio-inline"><input type="radio" name="productinstock" value="0"> N </label>
            <input type="text" class="form-control" name="productdiscount" placeholder="Product Discount">
            <input type="text" class="form-control" name="productsize" placeholder="Product Size">
            <input type="text" class="form-control" name="productdeatails" placeholder="Product details">
            <label>Choose Image: </label>
            <input type="file" class="form-control" name="productprofile">
            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </div>
      </form>
    </div>
    </div>
    </div>    

    <?php
          include_once '../includes/footer.php';
        ?>
    </body>
</html>