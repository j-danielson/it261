<?php

// $canadian_rate = .8;
// $canadian_us = 2000*$canadian_rate;

// $Rubles_rate = .013;
// $rubles_us = 2000*$Rubles_rate;

// $pounds_rate = 1.37;
// $pounds_us = 2000*$pounds_rate;

// $euros_rate = 1.14;
// $euros_us = 2000*$euros_rate;

// $yen_rate = .0087;
// $yen_us = 2000*$yen_rate;

$canadian = 2000;
$canadian *= .80;

$rubles = 4000;
$rubles *= .013;

$pounds = 5500;
$pounds *= 1.37;

$euros = 1400;
$euros *= 1.14;

$yen = 12000;
$yen *= 0.0087;

$total = $canadian + $rubles + $pounds + $euros + $yen;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency Logic</title>
    <style>
        table {
            width:500px;
            margin:0 auto;
            border:1px solid red;
            border-collapse:collapse;
        }

        th {
            font-size:2em;
            padding:10px;
        }

        td {
            border: 1px solid red;
            padding:10px;
            font-size:1.2em;
        }

        h1, h2 {
            text-align: center;
        }
    </style>
</head>
<body>
<table>
    <tr>
        <th>Currency</th>
        <th>US Dollars </th>
    </tr>

    <tr>
    <td>Canadian</td>
    <td><?php echo number_format($canadian, 2)      ;?></td>
    </tr>

    <tr>
    <td>Rubles</td>
    <td><?php echo number_format($rubles, 2)      ;?></td>
    </tr>

    <tr>
    <td>Pounds</td>
    <td><?php echo number_format($pounds, 2)      ;?></td>
    </tr>

    <tr>
    <td>Euros</td>
    <td><?php echo number_format($euros, 2)      ;?></td>
    </tr>

    <tr>
    <td>Yen</td>
    <td><?php echo number_format($yen, 2)      ;?></td>
    </tr>

    <tr>
        <td><b>Total</b></td>
        <td><?php echo ' <b>$'.number_format($total, 2).' US Dollars </b>'; ?></td>

    </table>
</body>
</html>