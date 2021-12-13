<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/reviewPageStyle.css" />
    <script>
        function makeTheOrder(){
            document.getElementById("action").value = "order made";
            document.confirmForm.submit();
        }
        function cancelOrder(){
            document.getElementById("action").value = "cancel order";
            document.confirmForm.submit();
        }
    </script>
    <title>SET Pizza Shop</title>
  </head>
  <body>
    <div class="checkout_header">
      <h1>SET Pizza Shop</h1>
    </div>
    <div class="checkout">
      <h3>Hello, 
            <?php 
                $pieces = explode(" ", $_POST["userName"]);
                echo $pieces[0];
            ?>
        </h3>
      <div class="checkout_left">
        <div>
          <h2 class="checkout_title">Review your Order</h2>
          <div class="checkoutProduct">
            <img class="checkoutProduct_image" src="images/pizza.png" />
            <div class="checkoutProduct_info">
              <p class="checkoutProduct_title">Large Pizza</p>
              <p class="checkoutProduct_price">
                <small>$</small>
                <strong><?php echo $_POST["price"] ?></strong>
              </p>
              <h4>Toppings:</h4>
              <ul>
              <?php 
                $pepperoni = $_POST["toppings_pepperoni"];
                if($pepperoni == "pepperoni")
                {
                    echo "<li>". $pepperoni . "</li>";
                }

                $mushrooms = $_POST["toppings_mushrooms"];
                if($mushrooms == "mushrooms")
                {
                    echo "<li>". $mushrooms . "</li>";
                }

                $green_olives = $_POST["toppings_green_olives"];
                if($green_olives == "green_olives")
                {
                    echo "<li> green olives </li>";
                }

                $green_peppers = $_POST["toppings_green_peppers"];
                if($green_peppers == "green_peppers")
                {
                    echo "<li> green peppers </li>";
                }

                $double_cheese = $_POST["toppings_double_cheese"];
                if($double_cheese == "double_cheese")
                {
                    echo "<li> double cheese </li>";
                }
                ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="checkout_right">
        <div class="subtotal">
          <p>
            Subtotal (1 item): $
            <strong><?php echo $_POST["price"] ?></strong>
          </p>
          <form name="confirmForm" action="feedbackForUser.php" method="POST">
            <input type="hidden" name="userName" id="userName" value=<?php echo $_POST["userName"]; ?>>
            <input type="hidden" id="action" name="action" >
            <button onclick="makeTheOrder()">Confirm</button>
            <button onclick="cancelOrder()">Cancel</button>
           </form>
        </div>
      </div>
    </div>
  </body>
</html>
