<?php
// this file will demonstrate for loops and in addition to placing your php inside your html
// celcius and fahrenheit

$celcius = 15;
$far = ($celcius * 9/5) + 32;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            padding:0;
            margin:0;
            box-sizing:border-box;
            border-collapse:collapse;
            text-align:center;
        }

        table {
            width: 300px;
            margin: 20px auto;
            border:1px solid green;
        }

        td {
            border:1px solid green;
        }
        </style>
</head>
<body>
    <!-- <h1>My two tables using the forloop</h1> -->
    <h1><?= $celcius ?></h1>
    <h2>Celcius/Fahrenheit Table</h2>
</body>
<table>
<tr>
    <th>celcius</th>
    <th>Fahrenheit</th>
</tr>
<?php
for($cel = 0; $cel <= 100; $cel += 5){
    $far = ($cel * 9/5) +32;
    echo '<tr>';
    echo '<td>'.$cel.' degress </td>';
    echo '<td>'.$far.' degress </td>';
    echo '</tr>';
}
?>
</table>

<h2>Kilometer/Miles Table</h2>

</html>