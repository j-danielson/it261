<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Calculator</title>
    <link href="css/calstyles.css" type="text/css" rel="stylesheet">
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
        <div class="buttonbox">
        <input type="submit" value="Calculate">
        <button><a href="">Reset</a></button>
        </div>
    </form>
    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            //UPDATE!!!
            if(empty($_POST['name'])) {
                echo '<span class="error">Please fill out your name</span>';
            }
            if(empty($_POST['miles'])) {
                echo '<span class="error">Please fill your total miles driving</span>';
            }
            if(empty($_POST['speed'])) {
                echo '<span class="error">Please fill out how fast will you be driving</span>';
            }
            if(empty($_POST['hours'])) {
                echo '<span class="error">Please fill out how many hours your will be driving per day</span>';
            }
            if(empty($_POST['price'])) {
                echo '<span class="error">Please select a gas price</span>';
            }
            if($_POST['efficiency'] == NULL) {
                echo '<span class="error">Please select your car\'s efficiency</span>';
            }

            //name, miles, speed, hours, price, efficiency
            if(isset($_POST['name'], $_POST['miles'], $_POST['speed'],$_POST['hours'],$_POST['price'],$_POST['efficiency'],)) {
                $name = $_POST['name'];
                $miles = intval($_POST['miles']);
                $speed = intval($_POST['speed']);
                $hours = intval($_POST['hours']);
                $price = floatval($_POST['price']);
                $efficiency = intval($_POST['efficiency']);

                // I need Total Hours(miles/speed) Total Days driving(totalHours/hours), Total Gallons(miles/price), Total Cost(price*gallons)
                $totalHours = $miles / $speed;
                $totalDays = $totalHours / $hours;
                $totalGallons = $miles / $efficiency;
                $totalCost = $price * $totalGallons;
                if(!empty($name && $miles && $speed && $hours && $price && $efficiency)) {
                    echo '
                    <div class="box">
                    <h2>Hello '.$name.',</h2>
                    <p>You will be travelling a total of '.number_format($totalHours, 2).' hours, taking '.number_format($totalDays, 2).' days.</p>
                    <p>And, you will be using '.number_format($totalGallons, 2).' gallons of gas, costing you $'.number_format($totalCost, 2).' dollars.</p>
                    </div>
                    ';
                }
            } //end isset
        } //end SERVER
    ?>
</body>
</html>