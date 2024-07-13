<?php
function cartElement($product_image2, $product_name2, $prodeuct_price2, $product_id2)
{
  $element = "
  <form action=\"cart.php?action=remove&id=$product_id2\" method=\"post\" class=\"cart-items\">
        <div class=\"container1\">
          <div class=\"item\">
            <div class=\"pic\">
              <img src=\"{$product_image2}\" alt=\"meal.png\">
            </div>
            <div class=\"data\">
              <h5 class=\"pname\">{$product_name2}</h5>
              <p>Seller: EgyFood</p>
              <h5 class=\"pcost\">{$prodeuct_price2} EGP</h5>
              <button type=\"sumbit\" class=\"REmove\" name=\"remove\">Remove</button>
            </div>
          </div>
        </div>
      </form>";
  echo $element;
}
?>