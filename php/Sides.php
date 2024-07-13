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
          <li><a class='active' href='#'>Sides</a></li>
          <li><a class='' href='HotDrinks.php'>Hot Drinks</a></li>
          <li><a class='' href='ColdDrinks.php'>Cold Drinks</a></li>
          <li><a class='' href='SpecialMeal.php'>Special Meal</a></li>
          <li><a class='' href='Desserts.php' id="end">Desserts</a></li>
        </ul>
      </nav>
    </div>
  </section>
  <div class="container1">
    <nav>
      <ul>
        <li><a class='' href='EgyFood.html'>Full Menu</a></li>
        <li><a class='' href='EgyFood2.html'>Sandwiches</a></li>
        <li><a class='' href='EgyFood3.html'>legumes</a></li>
        <li><a class='' href='EgyFood4.html'>Chicken &amp; Fish</a></li>
        <li><a class='active' href='EgyFood5.html'>Sides</a></li>
        <li><a class='' href='EgyFood6.html'>Hot Drinks</a></li>
        <li><a class='' href='EgyFood7.html'>Cold Drinks</a></li>
        <li><a class='' href='EgyFood8.html' id="end">Spacial Meal</a></li>
        <li><a class='' href='EgyFood9.html' id="end">Desserts</a></li>
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
          <button type="submit" name="ProductID" value="13">
            <img class="mealimg" src="../Media/food/Sides/French Fries.png" alt=" meal.Png">
            <p class="name">French Fries</p>
          </button>
        </div>
        <div class="product">
          <button type="submit" name="ProductID" value="14">
            <img class="mealimg" src="../Media/food/Sides/Friskes Fries.png" alt=" meal.Png">
            <p class="name">Friskes Fries</p>
          </button>
        </div>
        <div class="product">
          <button type="submit" name="ProductID" value="15">
            <img class="mealimg" src="../Media/food/Sides/Baba Ghanoug Salad.png" alt=" meal.Png">
            <p class="name">Baba Ghanoug</p>
          </button>
        </div>
        <div class="product">
          <button type="submit" name="ProductID" value="16">
            <img class="mealimg" src="../Media/food/Sides/Salad Slices.png" alt=" meal.Png">
            <p class="name">Salad Slices</p>
          </button>
        </div>
        <div class="product">
          <button type="submit" name="ProductID" value="17">
            <img class="mealimg" src="../Media/food/Sides/Caesar.png" alt=" meal.Png">
            <p class="name">Caesar</p>
          </button>
        </div>
      </form>
    </div>
  </section>
  <!--End products -->
</article>
<!-- End Main content -->
<!-- Start Footer -->
<?php require_once('footer.php'); ?>
<!-- End Footer -->
<script src="../JS/change.js"> </script>
</body>

</html>