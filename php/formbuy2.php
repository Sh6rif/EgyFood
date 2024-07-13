<?php
echo "
  <div class=\"backg\" id=\"b1\" onclick=\"closeform()\"></div>
  <div class=\"info\" id=\"f1\" style=\"height: 340px;\">
    <i class=\"fa-solid fa-x fa-xl\" onclick=\"closeform()\"></i>
    <form action=\"../Database/buyuser.php\" method=\"get\" class=\"userinfo\">
      <input class=\"input2\" type=\"text\" placeholder=\"FullName\" name=\"FullName\" value=\"{$_SESSION['user_name']}\" readonly>
      <input class=\"input2\" type=\"tel\" id=\"pnum\" name=\"Phonenumber\" placeholder=\"Phone Format: 0111-111-1111 \"
        pattern=\"[0-9]{4}[0-9]{3}[0-9]{4}\" value=\"{$_SESSION['user_phone']}\" readonly>"; ?>
<?php
foreach ($product_id as $id) {
  echo " <input type=\"hidden\" name=\"product_id\" value=\"$id\">";
}
?>
<?php echo "
      <div class=\"adds\">
        <h2>Your Address Region?</h2>
      </div>
      <input class=\"input2\" type=\"text\" name=\"City\" id=\"cty\" placeholder=\"City\" value=\"{$_SESSION['user_city']}\" readonly>
      <input class=\"input2\" type=\"text\" name=\"Region\" id=\"reg\" placeholder=\"Region\" value=\"{$_SESSION['user_region']}\" readonly>
      <div class=\"adds\">
        <h2>pay with Visa? Option</h2>
      </div>
      <input class=\"input2\" type=\"number\" name=\"cardnumber\" id=\"cardnum\"  placeholder=\"Card Number\" pattern=\"[0-9]{4}[0-9]{4}[0-9]{4}[0-9]{4}\">
      <input class=\"input2\" type=\"month\" name=\"monthyear\" id=\"date\" placeholder=\"ExpDate\">
      <input class=\"input2\" type=\"number\" name=\"cvv\" id=\"cvv\" placeholder=\"cvv\"  pattern=\"[0-9]{3}\">
      <input class=\"sub\" type=\"submit\" value=\"Buy\" id=\"save\">
    </form>
  </div>";
?>