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
          <li><a class='' href='HotDrinks.php'>Hot Drinks</a></li>
          <li><a class='active' href='#'>Cold Drinks</a></li>
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
          <button type="submit" name="ProductID" value="40">
            <img class="mealimg" src="../Media/food/Cold Drinks/Orange Juice.png" alt=" meal.Png">
            <p class="name">Orange Juice</p>
          </button>
        </div>
        <div class="product">
          <button type="submit" name="ProductID" value="41">
            <img class="mealimg" src="../Media/food/Cold Drinks/Mango Juice.png" alt=" meal.Png">
            <p class="name">Mango Juice</p>
          </button>
        </div>
        <div class="product">
          <button type="submit" name="ProductID" value="42">
            <img class="mealimg" src="../Media/food/Cold Drinks/Strawberry Juice.png" alt=" meal.Png">
            <p class="name">Strawberry Juice</p>
          </button>
        </div>
        <div class="product">
          <button type="submit" name="ProductID" value="43">
            <img class="mealimg" src="../Media/food/Cold Drinks/Lemon Juice.png" alt=" meal.Png">
            <p class="name">Lemon Juice</p>
          </button>
        </div>
        <div class="product">
          <button type="submit" name="ProductID" value="44">
            <img class="mealimg" src="../Media/food/Cold Drinks/Pepsi.png" alt=" meal.Png">
            <p class="name">Pepsi</p>
          </button>
        </div>
        <div class="product">
          <button type="submit" name="ProductID" value="45">
            <img class="mealimg" src="../Media/food/Cold Drinks/Fanta Orange.png" alt=" meal.Png">
            <p class="name">Fanta Orange</p>
          </button>
        </div>
        <div class="product">
          <button type="submit" name="ProductID" value="46">
            <img class="mealimg" src="../Media/food/Cold Drinks/Red Bull.png" alt=" meal.Png">
            <p class="name">Red Bull</p>
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