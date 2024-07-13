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
          <li><a class='active' href='#'>Full Menu</a></li>
          <li><a class='' href='Sandwiches.php'>Sandwiches</a></li>
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