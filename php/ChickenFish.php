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
          <li><a class='active' href='#'>Chicken &amp; Fish</a></li>
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
          <button type="submit" name="ProductID" value="18">
            <img class="mealimg" src="../Media/food/Chicken and Fish/Alexandrian liver.png" alt=" meal.Png">
            <p class="name">Liver</p>
          </button>
        </div>
        <div class="product">
          <button type="submit" name="ProductID" value="19">
            <img class="mealimg" src="../Media/food/Chicken and Fish/Alexandrian Sausage.png" alt=" meal.Png">
            <p class="name">Sausage</p>
          </button>
        </div>
        <div class="product">
          <button type="submit" name="ProductID" value="20">
            <img class="mealimg" src="../Media/food/Chicken and Fish/Quinoa Chicken.png" alt=" meal.Png">
            <p class="name">Quinoa Chicken</p>
          </button>
        </div>
        <div class="product">
          <button type="submit" name="ProductID" value="21">
            <img class="mealimg" src="../Media/food/Chicken and Fish/Grilled Chicken.png" alt=" meal.Png">
            <p class="name">Grilled Chicken</p>
          </button>
        </div>
        <div class="product">
          <button type="submit" name="ProductID" value="22">
            <img class="mealimg" src="../Media/food/Chicken and Fish/Shawarma fatteh.png" alt=" meal.Png">
            <p class="name">Chicken fatteh</p>
          </button>
        </div>
        <div class="product">
          <button type="submit" name="ProductID" value="23">
            <img class="mealimg" src="../Media/food/Chicken and Fish/Meat Shawrma Fattah.png" alt=" meal.Png">
            <p class="name">Shawrma Fattah</p>
          </button>
        </div>
        <div class="product">
          <button type="submit" name="ProductID" value="24">
            <img class="mealimg" src="../Media/food/Chicken and Fish/Fried Fish.png" alt=" meal.Png">
            <p class="name">Fried Fish</p>
          </button>
        </div>
        <div class="product">
          <button type="submit" name="ProductID" value="25">
            <img class="mealimg" src="../Media/food/Chicken and Fish/Grilled Fish.png" alt=" meal.Png">
            <p class="name">Grilled Fish</p>
          </button>
        </div>
        <div class="product">
          <button type="submit" name="ProductID" value="26">
            <img class="mealimg" src="../Media/food/Chicken and Fish/Fried Shrimp.png" alt=" meal.Png">
            <p class="name">Fried Shrimp</p>
          </button>
        </div>
        <div class="product">
          <button type="submit" name="ProductID" value="27">
            <img class="mealimg" src="../Media/food/Chicken and Fish/Grilled Shrimp.png" alt=" meal.Png">
            <p class="name">Grilled Shrimp</p>
          </button>
        </div>
        <div class="product">
          <button type="submit" name="ProductID" value="28">
            <img class="mealimg" src="../Media/food/Chicken and Fish/Crap with Hot Sauce.png" alt=" meal.Png">
            <p class="name">Crap Hot Sauce</p>
          </button>
        </div>
        <div class="product">
          <button type="submit" name="ProductID" value="29">
            <img class="mealimg" src="../Media/food/Chicken and Fish/Seafood Soup.png" alt=" meal.Png">
            <p class="name">Seafood Soup</p>
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