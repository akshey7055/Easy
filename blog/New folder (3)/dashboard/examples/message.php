<?php
$servername = 'localhost';
$username = 'u323994119_admin';
$password = '12345678';
$dbname = 'u323994119_library';
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$email=$_POST["email"];
$contact=$_POST["mnumber"];
$branch=$_POST["branch"];
$year=$_POST["year"];
$message=$_POST["msg"];
$id="";
/*echo " $fname, $lname, $email, $contact, $message";*/
$conn=mysqli_connect($servername,$username,$password,$dbname);
if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
            }
 
                $sql="INSERT INTO complaint (id , first_name , last_name , email , contact_no, branch, year, message) VALUES (ID ,  '$fname' , '$lname' , '$email' ,  '$contact', '$branch', '$year', '$message')";
                if(mysqli_query($conn, $sql))
	            {
                      echo "<script>alert('Your Complaint Is Registered')
                      window.location.replace('query.php')</script>";
	            }
                else
	            {
	                 echo "<script>alert('Your Complaint Is  Not Registered')
                      window.location.replace('query.php')</script>" . $sql . "<br>" . mysqli_error($conn);
	            }
	      
mysqli_close($conn);
?>