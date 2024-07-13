<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration</title>
  <!-- Render All Elemets Normally -->
  <link rel="stylesheet" href="../CSS/normalize.css">
  <!-- Font Awesome Library -->
  <link rel="stylesheet" href="../CSS/all.min.css">
  <!-- Header Template CSS file -->
  <link rel="stylesheet" href="../CSS/header.css">
  <!-- Main Template CSS File -->
  <link rel="stylesheet" href="../CSS/Registration.css">
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
  <i class="fa-solid fa-kitchen-set kitchen-item fa-2xl"></i>
  <p class="egyfood"><span class="egy">Egy</span><span class="food">Food</span></p>
  <div class="main">
    <!-- Start Header -->
    <header>
      <div class="container">
        <a href="FullMenu.php" class="logo">
          <img src="../Media/Egyfood_Logo.png" alt="Logo">
        </a>
        <nav>
          <i class="fas fa-bars toggle-menu"></i>
          <ul>
            <li><a href="FullMenu.php">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="Login.php">Login</a></li>
            <li><a class="active" href="#">Register</a></li>
          </ul>
          <div></div>
        </nav>
      </div>
    </header>
    <!-- End Header -->
    <!-- start sign up form -->
    <div class="parent">
      <div class="container">
        <div class="sign-up">Sign Up</div>
        <form action="Login.php" method="post">
          <input type="hidden" name="SignUp">
          <input class="input1" type="text" id="usname" name="user" placeholder="UserName" required>
          <input class="input1" type="email" id="e" name="mill" placeholder="Email" required>
          <input class="input1" type="text" id="cit" name="city" placeholder="City" required>
          <input class="input1" type="text" id="rion" name="region" placeholder="Region" required>
          <input class="input1" type="tel" id="pnum" name="phonumber" placeholder="Phone Format: 0111-111-1111 "
            pattern="[0-9]{4}[0-9]{3}[0-9]{4}" required>
          <input class=" input1" type="password" id="pa" name="pass" placeholder="Password" required>
          <input class="input1" type="password" id="conf" name="confpass" placeholder="confirm password" required>
          <input class="input1" type="date" id="da" name="date" required>
          <br>
          <div class="Gender">
            <label>Gender: </label>
            <input type="radio" name="Gender" value="Male" id="male">
            <label for="male">Male</label>
            <input type="radio" name="Gender" id="female" value="Female">
            <label for="female">Female</label>
          </div>
          <br>
          <input class="btn" type="reset" value="Reset" id="res">
          <input class="btn" type="submit" value="Submit" id="save">
          <div class="acclogin">have Account? <a href="Login.php">login</a></div>
      </div>
    </div>
    </form>
  </div>
  <script src="../JS/passconfig.js"></script>
</body>

</html>