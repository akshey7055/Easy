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
$sql = "CREATE TABLE books(
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	first_name VARCHAR(50) NOT NULL,
        last_name VARCHAR(50) NOT NULL,
        email VARCHAR(50) NOT NULL,
        password VARCHAR(25) NOT NULL,
	contact_no VARCHAR(10) NOT NULL,
	 college VARCHAR(100) NOT NULL,
	 year VARCHAR(10) NOT NULL,
	 branch VARCHAR(50) NULL,
	 parents_email VARCHAR(50) NOT NULL,
	 pay INT NOT NULL,
	 date_time DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP)
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