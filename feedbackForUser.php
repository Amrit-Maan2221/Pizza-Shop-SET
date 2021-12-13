<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/feedbackStyle.css" />
    <title>SET Pizza Shop</title>
</head>
<body>
    
<div class="heading">
    <div class="heading_header">
        <h1>SET Pizza Shop</h1>
    </div>
    <h3>
        <?php 
            if($_POST["action"] == "order made")
            {
                echo "Thank you ". $_POST["userName"] . ", Your Order has been made.";
            }
            else if($_POST["action"] == "cancel order")
            {
                echo $_POST["userName"] . " , Your Order has been cancelled.";
            }
        ?>
    </h3>
    
</body>
</html>