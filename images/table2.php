<?php
$servername = 'localhost';
$username = 'id13858900_root';
$password = 'ABCD1234=def';
$dbname = 'id13858900_books';
$conn= mysqli_connect($servername,$username,$password,$dbname);
if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
echo 'connected successfully' . "<br>";
$sql = "CREATE TABLE complaint(
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	first_name VARCHAR(50) NOT NULL,
        last_name VARCHAR(50) NOT NULL,
        email VARCHAR(50) NOT NULL,
	contact_no VARCHAR(10) NOT NULL,
	 message TEXT NOT NULL)
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