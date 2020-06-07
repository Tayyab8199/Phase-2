<!DOCTYPE html>
<?php
include_once '../includes/html_head.php';
?>
<body>
<?php
      include_once '../includes/top.php';
      @require("../requires/connection.php");
    ?>
    <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
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
    <?php

if($_GET){

  $id = $_GET['uid'];


$query = "SELECT * FROM tblproducts WHERE productid = '$id' ";
$result = mysqli_query($dbcon,$query);
while($fetc = mysqli_fetch_assoc($result)){
?>
        <h1>
        <?php
        echo $fetc['productname'];
        ?>
        </h1>
        <div class="row">
            <div class="d-flex justify-content-center">
            <?php
        echo "<img src='../images/".$fetc['productprofile']."' height='250'  >";
    ?>
                <div class="float-right ml-5 mt-5">
                <ul class="list-unstyled">
                    <li>
                        Product Price: RS.<?php
        echo $fetc['productprice'];
    ?>
                    </li>
                    <li>
                        Product in Stock: <?php
        if($fetc['productinstock']==1)
            echo "Yes";
        else
            echo "No";
    ?>
                    </li>
                    <li>
                        Product Discount: <?php
        echo $fetc['productdiscount'];
    ?>%
                    </li>
                    <li>
                        Product Size: <?php
        echo $fetc['productsizes'];
    ?>
                    </li>
                </ul>
                </div>
        </div>
    </div>
    <div class="row">
        <h2>
            Product Description
        </h2>
        <p>
            <br/>
        <?php
        echo $fetc['productdetails'];
    ?>   
        </p>
        
    </div>
<?php
}}
?>
    </div>
    <?php
      include_once '../includes/footer.php';
    ?>
    </body>
</html>