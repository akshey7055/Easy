<?php
$servername = 'localhost';
$username = 'u740239796_admin';
$password = 'treetree123@';
$dbname = 'u740239796_easyboooks';
$name=$_POST["name"];
$email=$_POST["emailid"];
$contact=$_POST["mnumber"];
$college=$_POST["college"];
$year=$_POST["year"];
$skills=$_POST["skills"];
$position=$_POST["position"];
$id="";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
            }
     
                $sql="INSERT INTO career (id , name , email , contact_no, college, year , skills , position) VALUES (ID ,  '$name' , '$email', '$contact', '$college' , '$year' , '$skills' , '$position')";
                if(mysqli_query($conn, $sql))
	            {
                     echo "<script>alert('Your Application Is Submitted')
                window.location.replace('../../index.html')</script>";
	            }
                else
	            {
	                echo "Error:" . $sql . "<br>" . mysqli_error($conn);
	            }
 
    
mysqli_close($conn);
?>