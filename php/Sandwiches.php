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
          <li><a class='active' href='#'>Sandwiches</a></li>
          <li><a class='' href='Legumes.php'>legumes</a></li>
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
          <button type="submit" name="ProductID" value="30">
            <img class="mealimg" class="mealimg" src="../Media/food/Sandwiches/Chicken Shawrma.png" alt=" meal.Png">
            <p class="name">Chicken Shawrma</p>
          </button>
        </div>
        <div class="product">
          <button type="submit" name="ProductID" value="31">
            <img class="mealimg" class="mealimg" src="../Media/food/Sandwiches/French Fries With Ketchup.png"
              alt=" meal.Png">
            <p class="name">French Fries</p>
          </button>
        </div>
        <div class="product">
          <button type="submit" name="ProductID" value="32">
            <img class="mealimg" class="mealimg" src="../Media/food/Sandwiches/Cordon Bleu.png" alt=" meal.Png">
            <p class="name">Cordon Bleu</p>
          </button>
        </div>
        <div class="product">
          <button type="submit" name="ProductID" value="33">
            <img class="mealimg" src="../Media/food/Sandwiches/Spicy Chicken.png" alt=" meal.Png">
            <p class="name">Spicy Chicken</p>
          </button>
        </div>
        <div class="product">
          <button type="submit" name="ProductID" value="34">
            <img class="mealimg" src="../Media/food/Sandwiches/Red Hot Chicken.png" alt=" meal.Png">
            <p class="name">Red Hot Chicken</p>
          </button>
        </div>
        <div class="product">
          <button type="submit" name="ProductID" value="35">
            <img class="mealimg" src="../Media/food/Sandwiches/Excellent Hawawshi.png" alt=" meal.Png">
            <p class="name">Excellent Hawawshi</p>
          </button>
        </div>
        <div class="product">
          <button type="submit" name="ProductID" value="36">
            <img class="mealimg" src="../Media/food/Sandwiches/Shrimp Sandwich.png" alt=" meal.Png">
            <p class="name">Shrimp Sandwich</p>
          </button>
        </div>
        <div class="product">
          <button type="submit" name="ProductID" value="37">
            <img class="mealimg" src="../Media/food/Sandwiches/foul san.png" alt=" meal.Png">
            <p class="name">Foul</p>
          </button>
        </div>
        <div class="product">
          <button type="submit" name="ProductID" value="38">
            <img class="mealimg" src="../Media/food/Sandwiches/Falafel Sandwich.png" alt=" meal.Png">
            <p class="name">Falafel</p>
          </button>
        </div>
        <div class="product">
          <button type="submit" name="ProductID" value="39">
            <img class="mealimg" src="../Media/food/Sandwiches/Foul With Eggs.png" alt=" meal.Png">
            <p class="name">Foul & Eggs</p>
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