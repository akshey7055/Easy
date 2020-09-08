<?php
$servername = 'localhost';
$username = 'u740239796_admin';
$password = 'treetree123@';
$dbname = 'u740239796_easyboooks';
   $fname=$_POST["firstname"];
$lname=$_POST["lastname"];
$email=$_POST["emailid"];
$pass=$_POST["password"];
$contact=$_POST["mobilenumber"];
$college=$_POST["college"];
$pmail=$_POST["pemail"];
$id="";
$pay=0;
$conn=mysqli_connect($servername,$username,$password,$dbname);
if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
            }
 $sqli = "SELECT * FROM books WHERE email LIKE '%$email%' AND contact_no LIKE '%$contact%'" ;
$result = mysqli_query($conn , $sqli);
$row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result)==0)
    {
        $sqli = "SELECT * FROM books WHERE email LIKE '%$email%'" ;
        $result = mysqli_query($conn , $sqli);
        $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result)==0)
        {
            $sqli = "SELECT * FROM books WHERE contact_no LIKE '%$contact%'" ;
            $result = mysqli_query($conn , $sqli);
            $row = mysqli_fetch_assoc($result);
            if(mysqli_num_rows($result)==0)
            {
                $sql="INSERT INTO books (id , first_name , last_name , email , password , contact_no, college, parents_email,pay) VALUES (ID ,  '$fname' , '$lname' , '$email' , '$pass' , '$contact',  '$college' , '$pmail', PAY)";
                if(mysqli_query($conn, $sql))
	            {
                      echo "<script>window.location.replace('../../index.html')</script>";
	            }
                else
	            {
	                echo "Error:" . $sql . "<br>" . mysqli_error($conn);
	            }
	       }
	       else
            {
              echo "<script>alert('Number already exists')
                     window.location.replace('./signup.php')</script>";
            }
        }    
        else
        {
           echo "<script>alert('Email already exists')
                window.location.replace('./signup.php')</script>"; 
        }
    }
    else
      {
         echo "<script>alert('Email and Number already exists')
              window.location.replace('./signup.php')</script>";
      }
    
mysqli_close($conn);
?>