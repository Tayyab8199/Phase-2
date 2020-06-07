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
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="About_Us.php">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Product.php">Products</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="Contact_Us.php">Contact Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
            </li>
        </ul>
    </nav>
    <div class="container">
    <form method="post">
      <h1>Contact Us</h1>
      <div class="row">
        <div class="col-md-8">
        <table width="50" border="0" >
          <tr><td>Date:</td> <td><input type="Date" name="Date"></td></tr>
          <tr><td>E-Mail:</td> <td><input type="EMail" name="EMail"></td></tr>
          <tr><td>Phone:</td> <td><input type="text" name="text"></td></tr>
          <tr><td>Role:</td> <td><input type="radio" name="text" value="Student">Student<input type="radio" name="text" value="Teacher">Teacher</td></tr>
          <tr><td>City:</td> <td><select name="City">
            <option value="Lahore">Lahore</option>
            <option value="Islamabad">Islamabad</option>
            <option value="Karachi">Karachi</option>
          </select></td></tr>
      </table>
    </div>
      <div class="col-md-4">
        <h3>Address</h3>
        <ul class="list-unstyled">
          <li>
            <p>
              <i class="fa fa-home mr-3"></i> Pakistan, LHR 123</p>
          </li>
          <li>
            <p>
              <i class="fa fa-envelope mr-3"></i> info@mobigene.com</p>
          </li>
          <li>
            <p>
              <i class="fa fa-phone mr-3"></i> +92 345 6789100</p>
          </li>
        </ul>
      </div>
      </div>
<div class="row">
  <div class="col-md-8">
    <table>
		  <tr><td><h3>Message:</h3></td></tr>
		  <tr><td><textarea id="Message" rows="5" cols="50"></textarea></td></tr>
		  <tr><td><input type="submit" class="btn btn-info" value="Submit"></td></tr>
  	</table>
  </div>
  <div class="col-md-4">
    <div id="map-container-google-9" class="z-depth-1-half map-container-5" style="height: 300px">
      <iframe src="https://maps.google.com/maps?q=Madryt&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
        style="border:0" allowfullscreen></iframe>
    </div> 
  </div>
</div>
</form>
</div>
<?php
  include_once 'includes/footer.php';
?>
    </body>
</html>
