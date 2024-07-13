<?php
session_start();
require_once("cartItem.php");
require_once('connection.php');
if (isset($_POST['remove'])) {
  if ($_GET['action'] == 'remove') {
    foreach ($_SESSION['cart'] as $key => $value) {
      if ($value['product_id'] == $_GET['id']) {
        unset($_SESSION['cart'][$key]);
        echo "<script>alert('Product has been Removed')</script>";
        echo "<script>window.location = 'cart.php'</script>";
      }
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cart</title>
  <!-- Render All Elemets Normally -->
  <link rel="stylesheet" href="../CSS/normalize.css">
  <!-- Font Awesome Library -->
  <link rel="stylesheet" href="../CSS/all.min.css">
  <!-- Header Template CSS file -->
  <link rel="stylesheet" href="../CSS/header.css">
  <!-- Footer Template CSS file -->
  <link rel="stylesheet" href="../CSS/footer.css">
  <!-- Main Template CSS File -->
  <link rel="stylesheet" href="../CSS/cart.css">
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
  <!-- start header -->
  <?php if (isset($_SESSION['user_id'])) {
    require_once('userheader.php');
  } else {
    require_once("header.php");
  } ?>
  <!-- end header -->
  <article>
    <section class="top">
      <h3>My Cart</h3>
      <hr>
    </section>
    <section class="Products">
      <?php
      $totalprice = 0;
      if (isset($_SESSION['cart'])) {
        $product_id = array_column($_SESSION['cart'], column_key: 'product_id');
        $sql = mysqli_query($conn, "SELECT * FROM products");
        if (mysqli_num_rows($sql) > 0) {
          // OUTPUT DATA OF EACH ROW
          while ($row = mysqli_fetch_assoc($sql)) {
            foreach ($product_id as $id) {
              if ($row['id'] == $id) {
                cartElement($row['Product_image'], $row['Product_Name'], $row['Product_Price'], $row['id']);
                $totalprice += (int) $row['Product_Price'];
                echo "<br>";
              }
            }
          }
        } else {
          echo "<h5>Cart is Empty</h5>";
        }
      }
      ?>
    </section>
    <?php if (isset($_SESSION['user_id'])) {
      require_once('formbuy2.php');
    } else {
      require_once("formbuy1.php");
    } ?>
    <aside class="right_side">
      <div class="details">
        <div class="headPrice">
          <h4>PRICE DETAILS</h4>
          <hr>
        </div>
        <div class="price">
          <div class="left">
            <?php
            if (isset($_SESSION['cart'])) {
              $count = count($_SESSION['cart']);
            } else {
              $count = 0;
            }
            echo "
            <p class=\"Pitem\">Price ($count items)</p>
            <p class=\"delivery\">Delivery Charges</p>
            <hr>
          </div>
          <div class=\"right\">
            <p class=\"Tprice\">$totalprice EGP</p>
            <p class=\"tax\">FREE</p>
            <hr>
          </div>
        </div>
        <div class=\"total_price\">
          <p>Ammoumt Payable<span>$totalprice EGP</span></p>
        </div>";
            ?>
          </div>
    </aside>
    <div class="buy"><button onclick="openform()">Buy</button></div>
  </article>
  <script src="../JS/change.js"> </script>
</body>

</html>