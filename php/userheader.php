<header id="back">
  <div class="container">
    <a href="FullMenu.php" class="logo">
      <img decoding="async" src="../Media/Egyfood_Logo.png" alt="Logo">
    </a>
    <nav>
      <i class="fas fa-bars toggle-menu"></i><!-- Font Awesome -->
      <ul>
        <li><a href="FullMenu.php">Home</a></li>
        <li><a href="logout.php">logout</a></li>
      </ul>
      <a href="userprofile.php"><i id="icus" class="fa-regular fa-circle-user fa-2xl"></i></a>
      <div class="form">
        <a href="cart.php"><i class="fa-solid fa-cart-shopping fa-xl"></i></a>
        <?php
        if (isset($_SESSION['cart'])) {
          $count = count($_SESSION['cart']);
          echo "<span id=\"cart_count\">$count</span>";
        } else {
          echo "<span id=\"cart_count\">0</span>";
        }
        ?>
      </div>
    </nav>
  </div>
</header>