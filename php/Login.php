<?php
session_start();
require_once('connection.php');
if (isset($_POST['SignUp'])) {
  $user = $_REQUEST['user'];
  $pass = $_REQUEST['pass'];
  $mill = $_REQUEST['mill'];
  $city = $_REQUEST['city'];
  $region = $_REQUEST['region'];
  $phonumber = $_REQUEST['phonumber'];
  $date = $_REQUEST['date'];
  $Gender = $_REQUEST['Gender'];

  $sql = "INSERT INTO User_Info (User_Name,User_email,User_Phone,User_Password,User_BirthDate,City,Region,User_Gender)
VALUES ('$user', '$mill', '$phonumber', '$pass', '$date','$city','$region', '$Gender')";
  if ($conn->query($sql) === TRUE) {
    echo "";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

if ($_SERVER['REQUEST_METHOD'] == "POST" && !isset($_POST['SignUp'])) {
  //something was posted
  $user_name = $_POST['user_name'];
  $password = $_POST['password'];

  if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {
    unset($_SESSION['cart']);
    //read from database
    $query = "select * from User_Info where User_Name = '$user_name' limit 1";
    $result = mysqli_query($conn, $query);
    if ($result) {
      if ($result && mysqli_num_rows($result) > 0) {
        $user_data = mysqli_fetch_assoc($result);
        if ($user_data['User_Password'] === $password) {
          $_SESSION['user_id'] = $user_data['id'];
          $_SESSION['user_email'] = $user_data['User_email'];
          $_SESSION['user_name'] = $user_data['User_Name'];
          $_SESSION['user_phone'] = $user_data['User_Phone'];
          $_SESSION['user_password'] = $user_data['User_Password'];
          $_SESSION['user_data'] = $user_data['User_BirthDate'];
          $_SESSION['user_city'] = $user_data['City'];
          $_SESSION['user_region'] = $user_data['Region'];
          $_SESSION['user_Gender'] = $user_data['User_Gender'];
          header("Location: FullMenu.php");
          die;
        }
      }
    }
    echo "<script>alert('wrong username or password!')</script>";
  } else {
    echo "<script>alert('wrong username or password!')</script>";
  }
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <!-- Render All Elemets Normally -->
  <link rel="stylesheet" href="../CSS/normalize.css">
  <!-- Font Awesome Library -->
  <link rel="stylesheet" href="../CSS/all.min.css">
  <!-- Header Template CSS file -->
  <link rel="stylesheet" href="../CSS/header.css">
  <!-- Main Template CSS File -->
  <link rel="stylesheet" href="../CSS/Login.css">
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
  <!-- Start Header -->
  <i class="fa-solid fa-kitchen-set kitchen-item fa-2xl"></i>
  <p class="egyfood"><span class="egy">Egy</span><span class="food">Food</span></p>
  <div class="main">
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
            <li><a class="active" href="#">Login</a></li>
            <li><a href="Registration.php">Register</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <!-- End Header -->
    <!-- start login form -->
    <div class="parent">
      <div class="container">
        <div class="log">LOGIN Now!</div>
        <form method="post">
          <div class="un">
            <label class="lab" for="user"><img src="../Media/user.png" alt="user-icon"></label>
            <input class="in" type="text" name="user_name" placeholder="Username" required id="user">
          </div>
          <div class="pas">
            <label class="lab" for="pass"><img src="../Media/padlock.png" alt="Pass-icon"></label>
            <input class="in" type="password" name="password" placeholder="Password" required id="pass">
          </div>
          <div>
            <input class="sub" type="submit" value="LOGIN">
          </div>
          <div class="div2">
            <p class="member">you are not a member?</p>
            <a class="rn" href="Registration.php">Register Now</a>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- End login form -->
  <script>
    if (window.history.replaceState) {
      window.history.replaceState(null, null, window.location.href);
    };
  </script>
</body>

</html>