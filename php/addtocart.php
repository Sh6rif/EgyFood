<?php
session_start();
//Set no caching
require_once('connection.php');
$num = $_REQUEST['ProductID'];
$sql = mysqli_query($conn, "SELECT * FROM products Where id='$num'");
$result = mysqli_fetch_assoc($sql);
if (isset($_POST['add'])) {
  // print_r($_POST['product_id']);
  if (isset($_SESSION['cart'])) {
    $item_array_id = array_column($_SESSION['cart'], column_key: "product_id");
    // print_r($item_array_id);
    // print_r($_SESSION['cart']);
    if (in_array($_POST['product_id'], $item_array_id)) {
      echo "<script>alert('product is already added in the cart')</script>";
      echo "<script>window.location = 'FullMenu.php'</script>";
    } else {
      $count = count($_SESSION['cart']);
      $item_array = array(
        'product_id' => $_POST['product_id']
      );
      $_SESSION['cart'][$count] = $item_array;
      // print_r($_SESSION['cart']);
    }
  } else {
    $item_array = array(
      'product_id' => $_POST['product_id']
    );
    $_SESSION['cart'][0] = $item_array;
  }
}
$conn->close();
echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
  <meta charset=\"UTF-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <title>addtocart</title>
  <!-- Render All Elemets Normally -->
  <link rel=\"stylesheet\" href=\"../CSS/normalize.css\">
  <!-- Font Awesome Library -->
  <link rel=\"stylesheet\" href=\"../CSS/all.min.css\">
  <!-- Header Template CSS file -->
  <link rel=\"stylesheet\" href=\"../CSS/header.css\">
  <!-- Main Template CSS File -->
  <link rel=\"stylesheet\" href=\"../CSS/addtocart.css\">
  <!-- Footer Template CSS file -->
  <link rel=\"stylesheet\" href=\"../CSS/footer.css\">
  <!-- Google Fonts -->
  <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
  <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
  <link href=\"https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap\" rel=\"stylesheet\">
</head>

<body>
  <!-- Start Header -->";
if (isset($_SESSION['user_id'])) {
  require_once('userheader.php');
} else {
  require_once("header.php");
}
// <!-- End Header -->
// <!-- start main content -->
echo "
<article>
  <!-- start image side -->
  <section class=\"left-side\">
    <div class=\"container1\">
      <div class=\"picture\">
        <a href=\"#\">
          <img src=\"{$result['Product_image']}\" alt=\"meal png\"></a>
      </div>
    </div>
  </section>
<!-- end image side -->
<!-- start addtocart side -->
<section class=\"right-side\">
  <div class=\"container2\">
    <div class=\"product-description\">
    <p class=\"name\"> {$result['Product_Name']} ({$result['Product_Type']})</p>
                <p class=\"price\">{$result['Product_Price']}.00 EGP</p>
                <p class=\"description\">{$result['Product_Description']}</p>
    </div>
        <form method=\"post\" action=\"addtocart.php\" class=\"btn-add\">
          <button type=\"submit\" name=\"add\">ADD TO CART</button>
          <input type='hidden' name='product_id' value=\"{$num}\">
          <input type='hidden' name='ProductID' value=\"{$num}\">
        </form>
    <hr>
    <div class=\" Drivery\">
      <i class=\"fa-solid fa-truck-fast fa-xl\"></i>
      <p>Delivery within 2 hours in Cairo, Giza & Alexandria, as for the rest of the governorates within 72 hours
      </p>
    </div>
    <hr>
    <div class=\"payment-Methods\">
      <p>Payment Methods</p>
      <div class=\"pay\">
        <img src=\"../Media/pay1.png\" alt=\"pay png\">
        <img src=\"../Media/pay2.png\" alt=\"pay png\">
        <img src=\"../Media/pay3.png\" alt=\"pay png\">
        <img src=\"../Media/pay4.png\" alt=\"pay png\">
        <img src=\"../Media/pay5.png\" alt=\"pay png\">
      </div>
    </div>
    <hr>
  </div>
</section>
<!-- End addtocart side -->
</article>
<!-- End main content -->"; ?>
<?php require_once('footer.php');
echo "
</body>
</html>";
?>