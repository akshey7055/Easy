<?php
$servername = 'localhost';
$username = 'u740239796_admin';
$password = 'treetree123@';
$dbname = 'u740239796_easyboooks';
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$email=$_POST["email"];
$contact=$_POST["mnumber"];
$message=$_POST["msg"];
$id="";
/*echo " $fname, $lname, $email, $contact, $message";*/
$conn=mysqli_connect($servername,$username,$password,$dbname);
if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
            }
 
                $sql="INSERT INTO complaint (id , first_name , last_name , email , contact_no, message) VALUES (ID ,  '$fname' , '$lname' , '$email' ,  '$contact', '$message')";
                if(mysqli_query($conn, $sql))
	            {
                      echo "<script>alert('Your Complaint Is Registered')
                      window.location.replace('complaint2.php')</script>";
	            }
                else
	            {
	                 echo "<script>alert('Your Complaint Is  Not Registered')
                      window.location.replace('complaint2.php')</script>" . $sql . "<br>" . mysqli_error($conn);
	            }
	      
mysqli_close($conn);
?>