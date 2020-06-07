
<!DOCTYPE html>
<?php
// For HTML Header
include_once 'includes/html_head.php';
?>
<body>
<?php
// For WebPage Header
  include_once 'includes/top1.php';
?>
    <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
        <ul class="navbar-nav">
            <li class="nav-item">
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
            <li class="nav-item active">
                <a class="nav-link" href="login.php">Login</a>
            </li>
        </ul>
    </nav>
    <div class="container">
    <div class="row">
    <div class="col-md-4">
      <form method="POST" action="admin/login_verify.php">
        <div class="form-group m-4">
            <label>Username:</label>
            <input type="text" class="form-control" id="myusername" name="myusername" placeholder="Enter Username">
            <label>Password:</label>
            <input type="password" class="form-control" id="mypassword" name="mypassword" placeholder="Enter Password">
            <div id="error" style="color:red;display:none">Invalid username or password</div>
            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </div>
      </form>
    </div>
    </div>
    </div>    
    <?php
    // For webpage Footer
          include_once 'includes/footer.php';
    ?>
    </body>
</html>