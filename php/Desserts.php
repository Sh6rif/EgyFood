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
          <li><a class='' href='ColdDrinks.php'>Cold Drinks</a></li>
          <li><a class='' href='SpecialMeal.php'>Special Meal</a></li>
          <li><a class='active' href='#' id="end">Desserts</a></li>
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
          <button type="submit" name="ProductID" value="52">
            <img class="mealimg" src="../Media/food/Desserts/Milky Rice.png" alt=" meal.Png">
            <p class="name">Milky Rice</p>
          </button>
        </div>
        <div class="product">
          <button type="submit" name="ProductID" value="53">
            <img class="mealimg" src="../Media/food/Desserts/Milky Rice with Nuts.png" alt=" meal.Png">
            <p class="name">Rice & Nuts</p>
          </button>
        </div>
        <div class="product">
          <button type="submit" name="ProductID" value="54">
            <img class="mealimg" src="../Media/food/Desserts/Om Ali.png" alt=" meal.Png">
            <p class="name">Om Ali</p>
          </button>
        </div>
        <div class="product">
          <button type="submit" name="ProductID" value="55">
            <img class="mealimg" src="../Media/food/Desserts/Basbusa with Nuts.png" alt=" meal.Png">
            <p class="name">Basbusa & Nuts</p>
          </button>
        </div>
        <div class="product">
          <button type="submit" name="ProductID" value="56">
            <img class="mealimg" src="../Media/food/Desserts/Kunafa Nabulsieh.png" alt=" meal.Png">
            <p class="name">Kunafa Nabulsieh</p>
          </button>
        </div>
        <div class="product">
          <button type="submit" name="ProductID" value="57">
            <img class="mealimg" src="../Media/food/Desserts/Vanilla Ice Cream.png" alt=" meal.Png">
            <p class="name">Vanilla Ice</p>
          </button>
        </div>
        <div class="product">
          <button type="submit" name="ProductID" value="58">
            <img class="mealimg" src="../Media/food/Desserts/Strawberry Ice Cream.png" alt=" meal.Png">
            <p class="name">Strawberry Ice</p>
          </button>
        </div>
        <div class="product">
          <button type="submit" name="ProductID" value="59">
            <img class="mealimg" src="../Media/food/Desserts/Chocolate Ice Cream.png" alt=" meal.Png">
            <p class="name">Chocolate Ice</p>
          </button>
        </div>
        <div class="product">
          <button type="submit" name="ProductID" value="60">
            <img class="mealimg" src="../Media/food/Desserts/Pistachio Ice Cream.png" alt=" meal.Png">
            <p class="name">Pistachio Ice</p>
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