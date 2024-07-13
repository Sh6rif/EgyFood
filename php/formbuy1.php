<?php
echo "
  <div class=\"backg\" id=\"b1\" onclick=\"closeform()\"></div>
  <div class=\"info\" id=\"f1\">
    <i class=\"fa-solid fa-x fa-xl\" onclick=\"closeform()\"></i>
    <form action=\"../Database/buy.php\" method=\"get\" class=\"userinfo\">
      <input class=\"input2\" type=\"text\" placeholder=\"FullName\" name=\"FullName\" required>
      <input class=\"input2\" type=\"tel\" id=\"pnum\" name=\"Phonenumber\" placeholder=\"Phone Format: 0111-111-1111 \"
        pattern=\"[0-9]{4}[0-9]{3}[0-9]{4}\" required>"; 
?>
<?php
    foreach ($product_id as $id) {
      echo " <input type=\"hidden\" name=\"product_id\" value=\"$id\">";
    }
    ?>
<?php echo "
      <div class=\"adds\">
        <h2>Your Address Region?</h2>
      </div>
      <input class=\"input2\" type=\"text\" name=\"City\" id=\"cty\" required placeholder=\"City\">
      <input class=\"input2\" type=\"text\" name=\"Region\" id=\"reg\" required placeholder=\"Region\">
      <input class=\"sub\" type=\"submit\" value=\"Buy\" id=\"save\">
    </form>
  </div>";
    ?>