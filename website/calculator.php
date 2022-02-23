?<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Calculator</title>
</head>
<body>
    <h1>My Travel Calculator</h1>
    <form action="<?php echo htmlspecialchars($_SERVER ['PHP_SELF']);?>" method="post">
        <label>Name</label>
        <input type="text" name="name" value="<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST['name']);?>">
        <label>Total miles driving?</label>
        <input type="number" name="miles" value="<?php if(isset($_POST['miles'])) echo htmlspecialchars($_POST['miles']);?>">
        <label>How fast do you typically drive?</label>
        <input type="number" name="speed" value="<?php if(isset($_POST['speed'])) echo htmlspecialchars($_POST['speed']);?>">
        <label>How many hours per day do you plan on driving?</label>
        <input type="number" name="hours" value="<?php if(isset($_POST['hours'])) echo htmlspecialchars($_POST['hours']);?>">
        <label>Price of gas</label>
        <ul>
            <li>
                <input type="radio" name="price" value="3.00" <?php if(isset($_POST['price']) && $_POST['price'] == 3.00)  echo 'checked = "checked" ' ;?>>$3.00
            </li>
            <li>
                <input type="radio" name="price" value="3.50" <?php if(isset($_POST['price']) && $_POST['price'] == 3.50)  echo 'checked = "checked" ' ;?>>$3.50
            </li>
            <li>
                <input type="radio" name="price" value="4.00" <?php if(isset($_POST['price']) && $_POST['price'] == 4.00)  echo 'checked = "checked" ' ;?>>$4.00
            </li>
        </ul> 
        <label>Fuel efficiency</label>
        <select name="efficiency">
            <option value="" NULL <?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == NULL) echo 'selected = "unselected" ' ;?>>Select One</option>
            <option value="10" <?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == '10') echo 'selected = "selected" ' ;?>>10mpg</option>
            <option value="25" <?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == '25') echo 'selected = "selected" ' ;?>>25mpg</option>
            <option value="40" <?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == '40') echo 'selected = "selected" ' ;?>>40mpg</option>
            <option value="55" <?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == '55') echo 'selected = "selected" ' ;?>>55mpg</option>
        </select>
        <input type="submit" value="Calculate">
        <button><a href="">Reset</a></button>
    </form>
    <?php
        //name, miles, speed, hours, gas, efficiency
        if(isset($_POST['name'], $_POST['email'], $_POST['amount'],$_POST['currency'],$_POST['bank'],)) {
            $name = $_POST['name'];
            $miles = intval($_POST['miles']);
            $speed = intval($_POST['speed']);
            $hours = intval($_POST['hours']);
            $gas = floatval($_POST['gas']);
            $efficiency = intval($_POST['efficiency']);
        }
    ?>
</body>
</html>