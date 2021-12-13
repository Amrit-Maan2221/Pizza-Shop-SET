<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/orderPizzaStyle.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script type="text/javascript">
        function changePrice()
        {  
            var pepperoni_price ;
            var mushroom_price;
            var double_cheese_price; 
            var green_peppers_price;
            var green_olives_price;

            if(document.getElementById("pepperoni").checked)
            {
            pepperoni_price = 1.5;
            }
            else{
            pepperoni_price = 0;
            }

            if(document.getElementById("mushrooms").checked)
            {
            mushroom_price = 1.0;
            }
            else
            {
            mushroom_price = 0.0;
            }

            if(document.getElementById("double_cheese").checked)
            {
            double_cheese_price = 2.25;
            }
            else
            {
            double_cheese_price = 0.0;
            }
            if(document.getElementById("green_peppers").checked)
            {
            green_peppers_price = 1.0;
            }
            else{
            green_peppers_price = 0.0;
            }
            if(document.getElementById("green_olives").checked)
            {
            green_olives_price = 1.0;
            }
            else
            {
            green_olives_price = 0.0;
            }

            const url= "updatePrice.php?toppings_pepperoni=" + pepperoni_price + "&toppings_mushrooms=" + mushroom_price + "&toppings_green_olives=" + green_olives_price + "&toppings_green_peppers=" + green_peppers_price + "&toppings_double_cheese=" + double_cheese_price;


            $.get(url, function(data, status){
            document.getElementById("txtPrice").innerHTML = data;
            document.getElementById("price").value = data;
            });
        }

        function submit(){
            document.pizzaForm.submit();
        }
    </script>
    <title>SET Pizza Shop</title>
</head>
<body>
    <div class="login"> 
        <div class="login_header">
            <h1>SET Pizza Shop</h1>
        </div>
        
     <form name="pizzaForm" action="confirmOrder.php" method="POST">     
        <h3>Ciao 
            <?php 
                $pieces = explode(" ", $_POST["namePrompt"]);
                echo $pieces[0];
            ?>
        </h3>
        <h2>What we Offer...</h2>
        <div class="product">
            <div class="product_info">
                <img src="images/pizza.png" alt="Pizza" />
                <p>Large Pizza</p>
                <p class="product_price">
                    Base Prize: <small>$</small>
                    <strong>10.00</strong>
                </p>
            </div>
            <div class="product_toppings">
                <fieldset>      
                    <legend>Choose your toppings....</legend>      
                    <input type="checkbox" id="pepperoni" name="toppings_pepperoni" value="pepperoni" onchange="changePrice()">pepperoni <small>(+ $1.5)</small><br>      
                    <input type="checkbox" id="mushrooms" name="toppings_mushrooms" value="mushrooms" onchange="changePrice()">mushrooms <small>(+ $1.0)</small><br>      
                    <input type="checkbox" id="green_olives" name="toppings_green_olives" value="green_olives" onchange="changePrice()">green olives <small>(+ $1.0)</small><br> 
                    <input type="checkbox" id="green_peppers" name="toppings_green_peppers" value="green_peppers" onchange="changePrice()">green peppers <small>(+ $1.0)</small><br>   
                    <input type="checkbox" id="double_cheese" name="toppings_double_cheese" value="double_cheese" onchange="changePrice()">double cheese <small>(+ $2.25)</small><br>   
                    <input type="hidden" name="userName" id="userName" value=<?php echo $_POST["namePrompt"]; ?>>
                    <input type="hidden" id="price" name="price" >
                    <p>Include free sauce and cheese</p>      
                </fieldset>      
            </div>
        </div>
        <div class="product_total">
            Total Prize: $ <span id="txtPrice">10.00</span>
        </div>
        <input type="submit" id="makeit" value="Make It!">
      </form>
    </div>
    <script>
        document.getElementById("price").value = 10.0;
    </script>
</body>
</html>