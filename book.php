<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
</head>
<body>
<!-- header section starts -->
<section class="header">
    <a href="home.php" class="logo">TOURISMO</a>
    <nav class="navbar">
        <a href="home.php">home</a>
        <a href="about.php">about</a>
        <a href="package.php">package</a>
        <a href="book.php">book</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->


<!-- booking section starts -->

<div class="heading">
    <img src="images/city-view-with-river.jpg" alt="city view">
    <h1>Book your Trip!!</h1>
</div>

<?php
$emailErr = "";
$email="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<section class="booking">
    <!-- <h1 class="heading-title">Book your Trip!!</h1> -->
    <form action="book_form.php" method="post" class="book-form" id="bookingForm">
        <div class="flex">
            <div class="inputBox">
                <span>name :</span>
                <input type="text" placeholder="Please enter your name" name="name" required>
            </div>
            <div class="inputBox">
                <span>email :</span>
                <input type="text" placeholder="Please enter your email address" name="email">
                <span class="error">* <?php echo $emailErr;?></span>
            </div>
            <div class="inputBox">
                <span>Mobile :</span>
                <input type="number" placeholder="Please enter your phone number" name="mobile" required>
            </div>
            <div class="inputBox">
                <span>address :</span>
                <input type="text" placeholder="Please enter your address" name="address" required>
            </div>
            <div class="inputBox">
                <span>Destination :</span>
                <input type="text" placeholder="Places you want to visit" name="destinations" required>
            </div>
            <div class="inputBox">
                <span>Total Guests :</span>
                <input type="number" placeholder="Number of guests on trip" name="guests">
            </div>
            <div class="inputBox">
                <span>Arrival Address :</span>
                <input type="text" placeholder="Address of arrival" name="arrivalAdd" required>
            </div>
            <div class="inputBox">
                <span>Arrival Date :</span>
                <input type="date" placeholder="Date of arrival" name="arrivalDate" required>
            </div>
            <div class="inputBox">
                <span>Departure Date :</span>
                <input type="date" placeholder="Date of arrival" name="departureDate" required>
            </div>
        </div>
        <input type="submit" name="send" value="Submit" class="btn">
    </form>

    <!-- Confirmation message div -->
    <div id="confirmationMessage"></div>
    
    <button id="myBtn">Try it</button>
</section>

<!-- booking section ends -->







<section class="footer">

    <div class="box-container">
        <div class="box">
            <h3>quick links</h3>
            <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
            <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
            <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
            <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
        </div>
        <div class="box">
            <h3>extra links</h3>
            <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
            <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
            <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
            <a href="#"> <i class="fas fa-angle-right"></i> terms & conditions</a>
        </div>
        <div class="box">
            <h3>Contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +91-9076925667</a>
            <a href="#"> <i class="fas fa-phone"></i> +91-8467046519</a>
            <!-- <a href="#"> <i class="fas fa-phone"></i> +91-7985623406</a> -->
            <a href="#"> <i class="fas fa-envelope"></i> hellotourismo@gmail.com</a>
            <a href="#"> <i class="fas fa-map"></i> varanasi, india - 221106</a>
        </div>
        <div class="box">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook</a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter</a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram</a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin</a>
        </div>
    </div>
    <div class="credit"> made with 💖 by <span> Mr. Aman </span> | all rights reserved!
    </div>

</section>

<!-- footer section ends -->

<!-- swiper js link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- custom js file link -->
<script src="js/script.js"></script>
</body>
</html>