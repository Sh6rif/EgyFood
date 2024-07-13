<?php
session_start();
if (isset($_SESSION['user_id'])) {
  require_once('userhead&header.php');
} else {
  require_once('head&header&landing.php');
}
?>
<article>
  <!-- start nav bar -->
  <section class="navbar">
    <div class="container1">
      <nav>
        <ul>
          <li><a class='' href='FullMenu.php'>Full Menu</a></li>
          <li><a class='' href='Sandwiches.php'>Sandwiches</a></li>
          <li><a class='' href='Legumes.php'>legumes</a></li>
          <li><a class='' href='ChickenFish.php'>Chicken &amp; Fish</a></li>
          <li><a class='' href='Sides.php'>Sides</a></li>
          <li><a class='active' href='#'>Hot Drinks</a></li>
          <li><a class='' href='ColdDrinks.php'>Cold Drinks</a></li>
          <li><a class='' href='SpecialMeal.php'>Special Meal</a></li>
          <li><a class='' href='Desserts.php' id="end">Desserts</a></li>
        </ul>
      </nav>
    </div>
  </section>
  <!--End nav bar -->
  <!--start products -->
  <section class="main-product-menu">
    <div class="container1">
      <form action="addtocart.php" method="post">
        <div class="product">
          <button type="submit" name="ProductID" value="47">
            <img class="mealimg" src="../Media/food/Hot Drinks/Tea.png" alt=" meal.Png">
            <p class="name">Tea</p>
          </button>
        </div>
        <div class="product">
          <button type="submit" name="ProductID" value="48">
            <img class="mealimg" src="../Media/food/Hot Drinks/Coffee.png" alt=" meal.Png">
            <p class="name">Coffee</p>
          </button>
        </div>
        <div class="product">
          <button type="submit" name="ProductID" value="49">
            <img class="mealimg" src="../Media/food/Hot Drinks/Sahlab.png" alt=" meal.Png">
            <p class="name">Sahlab</p>
          </button>
        </div>
        <div class="product">
          <button type="submit" name="ProductID" value="50">
            <img class="mealimg" src="../Media/food/Hot Drinks/Sahlab with Nuts.png" alt=" meal.Png">
            <p class="name">Sahlab & Nuts</p>
          </button>
        </div>
        <div class="product">
          <button type="submit" name="ProductID" value="51">
            <img class="mealimg" src="../Media/food/Hot Drinks/Hot Chocolate.png" alt=" meal.Png">
            <p class="name">Hot Chocolate</p>
          </button>
        </div>
      </form>
    </div>
  </section>
  <!--End products -->
</article>
<!-- End Main content -->
<?php require_once('footer.php'); ?>
<script src="../JS/change.js"> </script>
</body>

</html>