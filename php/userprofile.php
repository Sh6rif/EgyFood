<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EgyFood</title>
  <!-- Render All Elemets Normally -->
  <link rel="stylesheet" href="../CSS/normalize.css">
  <!-- Font Awesome Library -->
  <link rel="stylesheet" href="../CSS/all.min.css">
  <!-- Header Template CSS file -->
  <link rel="stylesheet" href="../CSS/header.css">
  <!-- Footer Template CSS file -->
  <link rel="stylesheet" href="../CSS/footer.css">
  <!-- Main Template CSS File -->
  <link rel="stylesheet" href="../CSS/userprofile.css">
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
  <!-- Start Header -->
  <?php require_once('userheader.php') ?>
  <!-- End Header -->
  <?php
  session_start();
  if ($_SERVER['REQUEST_METHOD'] == "POST") {
    require_once('connection.php');
    $_SESSION['user_email'] = $_REQUEST['email'];
    $_SESSION['user_name'] = $_REQUEST['name'];
    $_SESSION['user_phone'] = $_REQUEST['phone'];
    $_SESSION['user_password'] = $_REQUEST['password'];
    $_SESSION['user_data'] = $_REQUEST['date'];
    $_SESSION['user_city'] = $_REQUEST['city'];
    $_SESSION['user_region'] = $_REQUEST['region'];
    $_SESSION['user_Gender'] = $_REQUEST['gender'];
    $_SESSION['user_data'] = date('Y-m-d', strtotime($_SESSION['user_data'] . ' years ago'));
    $sql = "UPDATE User_Info 
    SET User_email='{$_SESSION['user_email']}',User_Name='{$_SESSION['user_name']}',User_Phone='{$_SESSION['user_phone']}',User_Password='{$_SESSION['user_password']}'
    ,User_BirthDate='{$_SESSION['user_data']}',City='{$_SESSION['user_city']}',Region='{$_SESSION['user_region']}',User_Gender='{$_SESSION['user_Gender']}'
    WHERE id='{$_SESSION['user_id']}'";
    if ($conn->query($sql) === TRUE) {
      echo "";
    } else {
      echo "Error updating record: " . $conn->error;
    }
  }
  $from = new DateTime($_SESSION['user_data']);
  $to = new DateTime('today');
  $year = $from->diff($to)->y;
  echo " <form method=\"post\">
  <div class=\"container5\">
    <div class=\"box\">
      <img src=\"../Media/user.jpg\" alt=\"usericon\">
      <ul>
      <input type=\"text\" class=\"it2\" name=\"name\" value=\"{$_SESSION['user_name']}\" id='name' disabled>
      <p>password:</p> <input id=\"pass\" type=\"text\" class=\"it2\" name=\"password\" value=\"{$_SESSION['user_password']}\" disabled>
      <input type=\"text\" id=\"da\" class=\"it2\" name=\"date\" value=\"{$year}\" disabled> <p>years old</p>
      </ul>
    </div>
    <div class=\"About\">
      <ul>
        <h1>about</h1>
      </ul>
      <ul>
        <h3>Gender</h3>
        <input list=\"gend\" class=\"it\" name=\"gender\" id=\"gen\" value=\"{$_SESSION['user_Gender']}\" disabled>
          <datalist id=\"gend\">
            <option value=\"Male\">
            <option value=\"Female\">
          </datalist>
      </ul>
      <ul>
        <h3>Phone Number</h3>
        <input id=\"ph\"type=\"number\" class=\"it\" name=\"phone\" value=\"{$_SESSION['user_phone']}\" disabled>
      </ul>
      <ul>
        <h3>City & Region</h3>
        <input id=\"ci\" type=\"text\" class=\"it\" name=\"city\" value=\"{$_SESSION['user_city']}\" disabled>,
        <input id=\"re\" type=\"text\" class=\"it\" name=\"region\" value=\"{$_SESSION['user_region']}\" disabled>
      </ul>
      <ul>
        <h3>Email</h3>
        <input id=\"em\" type=\"text\" class=\"it\" name=\"email\" value=\"{$_SESSION['user_email']}\" disabled>
      </ul>
      <input class=\"btn\" type=\"submit\" value=\"save\" id=\"sa\">
    </div>
    </form>
  </div>
  <button class=\"edit\" onclick=\"enableButton()\">EDIT</button>";
  ?>
  <?php require_once('footer.php'); ?>
  <script src="../JS/change.js"></script>
  <script>
    if (window.history.replaceState) {
      window.history.replaceState(null, null, window.location.href);
    };
  </script>
</body>

</html>