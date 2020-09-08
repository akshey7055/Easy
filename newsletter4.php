<?php
$servername = 'localhost';
$username = 'u740239796_admin';
$password = 'treetree123@';
$dbname = 'u740239796_easyboooks';
$email=$_POST['emailid'];
$id="";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
            }
                $sql="INSERT INTO subscription (id , email) VALUES (ID , '$email')";
                if(mysqli_query($conn, $sql))
	            {
                      echo "<script>alert('You Are Subscribed')
                              window.location.replace('home2.php')</script>";
	            }
                else
	            {
	                echo "Error:" . $sql . "<br>" . mysqli_error($conn);
	            }
mysqli_close($conn);
?>