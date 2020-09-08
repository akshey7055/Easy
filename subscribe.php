<?php
$servername = 'localhost';
$username = 'u740239796_admin';
$password = 'treetree123@';
$dbname = 'u740239796_easyboooks';
$conn= mysqli_connect($servername,$username,$password,$dbname);
if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
echo 'connected successfully' . "<br>";
$sql = "CREATE TABLE subscription(
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
        email VARCHAR(50) NOT NULL)
	";
mysqli_select_db($conn,$dbname);
if (mysqli_query($conn,$sql))
	{
	echo "TABLE CREATED.";
	}
else
	{
	echo "Error in CREATE TABLE.";
	}
mysqli_close($conn);
?>