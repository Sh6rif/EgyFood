<?php
if (isset($_POST['Remove'])) {
  unset($_SESSION['cart']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EgyFood</title>
  <!-- Render All Elemets Normally -->
  <link rel="stylesheet" href="../CSS/normalize.css">
  <!-- Font Awesome Library -->
  <link rel="stylesheet" href="../CSS/all.min.css">
  <!-- Header Template CSS file -->
  <link rel="stylesheet" href="../CSS/header.css">
  <!-- Main Template CSS File -->
  <link rel="stylesheet" href="../CSS/EgyFood.css">
  <!-- Footer Template CSS file -->
  <link rel="stylesheet" href="../CSS/footer.css">
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
  <!-- Start Header -->
  <header id="back">
    <div class="container">
      <a href="#" class="logo">
        <img decoding="async" src="../Media/Egyfood_Logo.png" alt="Logo">
      </a>
      <nav>
        <i class="fas fa-bars toggle-menu"></i><!-- Font Awesome -->
        <ul>
          <li><a class="active" href="#">Home</a></li>
          <li><a href="logout.php">logout</a></li>
        </ul>
        <a href="userprofile.php"><i class="fa-regular fa-circle-user fa-2xl"></i></a>
        <div class="form">
          <a href="cart.php"><i class="fa-solid fa-cart-shopping fa-xl"></i></a>
          <?php
          if (isset($_SESSION['cart'])) {
            $count = count($_SESSION['cart']);
            echo "<span id=\"cart_count\">$count</span>";
          } else {
            echo "<span id=\"cart_count\">0</span>";
          }
          ?>
        </div>
      </nav>
    </div>
  </header>
  <!-- End Header -->
  <!-- Start landing -->
  <div class="landing" id="land">
    <div class="overlay">
      <div class="text" id="tex">
        <div class="content">
          <h2>Hello World! <br>
            We Are EgyFood We Make Art.
          </h2>
          <p>We Make Many Type Of Food ,We Have The Most Delicious Egyption Food <br>Quick delivery Of The Order</p>
        </div>
      </div>
      <div class="text2" id="tex2">
        <div class="content2">
          <h2>EgyFood site <br>
            is bigger site for Food ,we are Art.
          </h2>
          <p>you can order from Us and your order will be in your location <br>in few minutes</p>
        </div>
      </div>
    </div>
    <i class="fas fa-angle-left change-background fa-2x" onclick="changeleft()"></i>
    <i class="fas fa-angle-right change-background fa-2x" onclick="changeright()"></i>
    <ul class="bullets">
      <li id="actleft"></li>
      <li id="actright"></li>
    </ul>
  </div>
  <!-- End landing -->