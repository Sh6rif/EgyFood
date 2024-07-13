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
          <li><a class='active' href='#'>Special Meal</a></li>
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
          <button type="submit" name="ProductID" value="1">
            <img class="mealimg" src="../Media/food/Special meal/Pot-roast pork.png" alt=" meal.Png">
            <p class="name">Pot-roast pork</p>
          </button>
        </div>
        <div class="product">
          <button type="submit" name="ProductID" value="2">
            <img class="mealimg" src="../Media/food/Special meal/Jamie’s meatloaf.png" alt=" meal.Png">
            <p class="name">Jamie’s meatloaf</p>
          </button>
        </div>
        <div class="product">
          <button type="submit" name="ProductID" value="3">
            <img class="mealimg" src="../Media/food/Special meal/Chocolate & avocado mousse.png" alt=" meal.Png">
            <p class="name">avocado mousse</p>
          </button>
        </div>
        <div class="product">
          <button type="submit" name="ProductID" value="4">
            <img class="mealimg" src="../Media/food/Special meal/EgyFood Special.png" alt=" meal.Png">
            <p class="name">EgyFood Special</p>
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