<?php
$servername = 'localhost';
$username = 'id13691110_root';
$password = "ABCD1234=def";
$conn = mysqli_connect($servername,$username,$password);
if(!$conn)
	{
		die("connection failed:" . mysqli_connect_error());
	}
$sql = "CREATE DATABASE id13691110_books" ;
if (mysqli_query($conn,$sql)) 
	{
		echo "Database created successfully";
	}
else
	{
		echo "Error creating Database:" . mysqli_error($conn);
	}
	mysqli_close($conn);
?>