<header>
  <div class="container">
    <a href="FullMenu.php" class="logo">
      <img decoding="async" src="../Media/Egyfood_Logo.png" alt="Logo">
    </a>
    <nav>
      <i class="fas fa-bars toggle-menu"></i><!-- Font Awesome -->
      <ul>
        <li><a href="FullMenu.php">Home</a></li>
        <li><a href="Login.php">Login</a></li>
        <li><a href="Registration.php">Register</a></li>
      </ul>
      <div class="form">
        <a href="cart.php">
          <div class="cart">
            <i class="fa-solid fa-cart-shopping fa-xl" style="color:blue"></i>
            <?php
            if (isset($_SESSION['cart'])) {
              $count = count($_SESSION['cart']);
              echo "<span id=\"cart_count\">$count</span>";
            } else {
              echo "<span id=\"cart_count\">0</span>";
            }
            ?>
          </div>
        </a>
      </div>
    </nav>
  </div>
</header>