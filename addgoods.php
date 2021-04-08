<?php
$hostname = "localhost";
$username = "root";
$password = "12345";
$goodsId = $_POST['goodsId'];
$goodsName = $_POST['goodsName'];
$goodsPrice = $_POST['goodsPrice'];
$goodsQuanity = $_POST['goodsQuanity'];
$dbName = "departmentstore";


// Create connection
$conn = mysqli_connect($hostname, $username, $password,$dbName);
// Check connection
if (!$conn) 
die("Can't connect with mySQL");
mysqli_select_db($conn, $dbName) or die ("Cannot select departmentstore");


$sql = "INSERT INTO goods (goodsId,goodsName,goodsPrice,goodsQuantity) VALUES ('$goodsId', '$goodsName', '$goodsPrice', '$goodsQuanity')";
mysqli_query($conn, $sql) or die ("Insert into the goods table an error occurred" .mysqli_error());
echo '<br><br><h4>The Code' .$goodsId.' has been saved<h4>';
mysqli_close($conn);
echo '<br><br><a href = "showGoods.php"> Show goods </a>';
