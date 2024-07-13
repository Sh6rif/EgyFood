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
          <li><a class='active' href='#'>legumes</a></li>
          <li><a class='' href='ChickenFish.php'>Chicken &amp; Fish</a></li>
          <li><a class='' href='Sides.php'>Sides</a></li>
          <li><a class='' href='HotDrinks.php'>Hot Drinks</a></li>
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
          <button type="submit" name="ProductID" value="5">
            <img class="mealimg" src="../Media/food/legumes/Foul.png" alt=" meal.Png">
            <p class="name">Foul</p>
          </button>
        </div>
        <div class="product">
          <button type="submit" name="ProductID" value="6">
            <img class="mealimg" src="../Media/food/legumes/falafel.png" alt="meal Png">
            <p class="name">Falafel</p>
          </button>
        </div>
        <div class="product">
          <button type="submit" name="ProductID" value="7">
            <img class="mealimg" src="../Media/food/legumes/Plain Omelet.png" alt=" meal.Png">
            <p class="name">Plain Omelet</p>
          </button>
        </div>
        <div class="product">
          <button type="submit" name="ProductID" value="8">
            <img class="mealimg" src="../Media/food/legumes/Shakshuka.png" alt=" meal.Png">
            <p class="name">Shakshuka</p>
          </button>
        </div>
        <div class="product">
          <button type="submit" name="ProductID" value="9">
            <img class="mealimg" src="../Media/food/legumes/Scrambled.png" alt=" meal.Png">
            <p class="name">Scrambled</p>
          </button>
        </div>
        <div class="product">
          <button type="submit" name="ProductID" value="10">
            <img class="mealimg" src="../Media/food/legumes/Eggs Medahrag.png" alt=" meal.Png">
            <p class="name">Eggs Medahrag</p>
          </button>
        </div>
        <div class="product">
          <button type="submit" name="ProductID" value="11">
            <img class="mealimg" class="mealimg" src="../Media/food/legumes/Eggplant Box.png" alt=" meal.Png">
            <p class="name">Eggplant Box</p>
          </button>
        </div>
        <div class="product">
          <button type="submit" name="ProductID" value="12">
            <img class="mealimg" src="../Media/food/legumes/Koshary.png" alt=" meal.Png">
            <p class="name">Koshary</p>
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