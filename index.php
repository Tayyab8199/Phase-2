<!DOCTYPE html>
<?php
include_once 'includes/html_head.php';
?>
<body>
    <?php
      include_once 'includes/top1.php';
    ?>
    <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="About_Us.php">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Product.php">Products</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Contact_Us.php">Contact Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
            </li>
        </ul>
    </nav>
    <div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <!--<li data-target="#demo" data-slide-to="1"></li>-->
            <!--<li data-target="#demo" data-slide-to="2"></li>-->
        </ul>
        <div class="carousel-inner">
          <!--  <div class="carousel-item ">-->
          <!--  <img src="images/slider(0).png" alt="Mobile" height="500" />-->
          <!--</div>-->
          <!--<div class="carousel-item">-->
          <!--  <img src="images/slider(1).png" alt="Mobile" height="500" />-->
          <!--</div>-->
          <div class="carousel-item active">
            <img src="images/Slider(2).png" alt="Mobile" height="500" />
          </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div> 
      <div class="jumbotron ">
          <h1 class="d-flex justify-content-center">
              MobiGene
          </h1>
          <p class="d-flex justify-content-center">
              Pakistan's 1st online B2B mobile selling website.
          </p>
      </div>
      <div class="container">
          <h1>Latest Products</h1>
        <div class="card-deck">
            <div class="card">
                <img class="card-img-top" src="images/Product(1).jpg" alt="p30 pro" style="width:100%">
                <div class="card-body">
                <h4 class="card-title">Hauwei P30 Pro</h4>
                <a href="Product_Detail.php" class="btn btn-primary stretched-link">Veiw Details</a>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="images/Product(1).jpg" alt="p30 pro" style="width:100%">
                <div class="card-body">
                <h4 class="card-title">Hauwei P30 Pro</h4>
                <a href="Product_Detail.php" class="btn btn-primary stretched-link">Veiw Details</a>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="images/Product(1).jpg" alt="p30 pro" style="width:100%">
                <div class="card-body">
                <h4 class="card-title">Hauwei P30 Pro</h4>
                <a href="Product_Detail.php" class="btn btn-primary stretched-link">Veiw Details</a>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="images/Product(1).jpg" alt="p30 pro" style="width:100%">
                <div class="card-body">
                <h4 class="card-title">Hauwei P30 Pro</h4>
                <a href="Product_Detail.php" class="btn btn-primary stretched-link">Veiw Details</a>
                </div>
            </div>
        </div>
      </div>
        <?php
          include_once 'includes/footer.php';
        ?>
    </body>
</html>