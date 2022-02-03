<?php
error_reporting(E_ALL);
?>

<html>
<head>
<title>My Adder Assignment</title>
<style>

</style>
</head>
<body>
<h1>Adder.php</h1> 
<form action="" method="post">
    <label>Enter the first number:</label>
    <input type="number" name="num1"><br>
    <label>Enter the second number:</label>
    <input type="number" name="num2"><br>
    <input type="submit" value="Submit">
</form>
<p><a href="">Reset page</a>
<!--here are my errors--> <!--here are my errors--><!--here are my errors--><!--here are my errors--><!--here are my errors--><!--here are my errors-->
<?php
//adder-wrong.php
if(isset($_POST['num1'],$_POST['num2'])){
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$myTotal = $num1 + $num2;
echo '<h2>You added "'. $num1 .' and '.$num2.'"</h2>';
echo '<p> and the answer is</p>
<p style="color:red">"'.$myTotal.'!"</p>';
}
?>
</body>
</html>