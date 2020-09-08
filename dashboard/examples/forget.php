<?php
$servername = 'localhost';
$username = 'u740239796_admin';
$password = 'treetree123@';
$dbname = 'u740239796_easyboooks';
$email=$_POST['email'];
$mobile=$_POST['mobilenumber'];
$pass=$_POST['password'];
$conn=mysqli_connect($servername,$username,$password,$dbname);
if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
                }   
/*   
$email_err = $pass_err = "";
    if(empty(trim($_POST["email"]))){
        $email_err = "Please Enter Email.";
       } 
      else{
        $email = trim($_POST["email"]);
        }
    
      if(empty(trim($_POST["password"]))){
        $pass_err = "Please Enter Your Password.";
    } else{
        $pass = trim($_POST["password"]);
        }
   if(empty($email_err) && empty($pass_err))
      {
*/

      if($email=="" && $mobile=="" &&  $pass=="")
  {
      echo "<script>alert('Email, Mobile And Password Column Is Blank')
      window.location.replace('forget.html')</script>";
   }
   
   else if($email=="" && $mobile=="" && $pass=="")
  {
      echo "<script>alert('Email, Mobile And Password Column Is Blank')
      window.location.replace('forget.html')</script>";
   }
      else if($email=="" && $mobile=="")
  {
      echo "<script>alert('Email And Mobile Column Is Blank')
      window.location.replace('forget.html')</script>";
   }
   else if($mobile=="" && $pass=="")
  {
      echo "<script>alert('Mobile And Password Column Is Blank')
      window.location.replace('forget.html')</script>";
   }
   else if($email=="")
  {
      echo "<script>alert('Email Column Is Blank')
      window.location.replace('forget.html')</script>";
   }
  /* else if($email=="" && $mobile=="")
  {
      echo "<script>alert('Email And Mobile Column Is Blank')
      window.location.replace('forget.html')</script>";
   }*/
   else if($email=="" && $pass=="")
  {
      echo "<script>alert('Email And Password Column Is Blank')
      window.location.replace('forget.html')</script>";
   }
   
    else if($pass=="")
  {
      echo "<script>alert('Password Column Is Blank')
      window.location.replace('forget.html')</script>";
   }
   
    /*else if($pass=="" && $mobile=="")
  {
      echo "<script>alert('Password And Mobile Column Is Blank')
      window.location.replace('forget.html')</script>";
   }*/
   
    else if($mobile=="")
  {
      echo "<script>alert('Mobile Column Is Blank')
      window.location.replace('forget.html')</script>";
   }
 /*else if($email=="")
  {
      echo "<script>alert('Email Column Is Blank')
      window.location.replace('forget.html')</script>";
   }
 else if($birth=="")
  {
      echo "<script>alert('DOB Column Is Blank')
      window.location.replace('forget.html')</script>";
   }
    else if($mobile=="")
  {
      echo "<script>alert('Email Column Is Blank')
      window.location.replace('forget.html')</script>";
   }
else if($pass=="")
  {
      echo "<script>alert('Password Column Is Blank')
      window.location.replace('forget.html')</script>";
   }*/
  else {
        $sqli ="SELECT email,contact_no FROM books WHERE email= '$email' AND contact_no='$mobile' ";
        $result = mysqli_query($conn ,$sqli);
        $row = mysqli_fetch_assoc($result);
        $count=mysqli_num_rows($result);
           if($count==1)
                   {
                      $sql="UPDATE books SET password='$pass' where email= '$email'";
                      if(mysqli_query($conn, $sql))
                      { 
                      $sql ="SELECT first_name FROM books WHERE email LIKE '%$email%'";
                      $result=mysqli_query($conn,$sql);
                      $row = mysqli_fetch_assoc($result);
                      echo  "<script>alert('Hi $row[first_name] Your Password Change Successfully')
                      window.location.replace('signin.php')</script>";
                      }
            }
            
       elseif($sqli)
           {
               $sqli ="SELECT email,contact_no FROM books WHERE email= '$email' || contact_no= '$mobile' ";
        $result = mysqli_query($conn ,$sqli);
        $row = mysqli_fetch_assoc($result);
        $count=mysqli_num_rows($result);
           if($count==1)
                   {
                      echo "<script>alert('Incorrect Email Or Mobile Number')
                      window.location.replace('forget.html')</script>";
                    }
            }
                          echo "<script>alert('Please Register First')
                      window.location.replace('signup.php')</script>";
        
  }        
       /*else if($sqli)
           {
               $sql ="SELECT contact_no FROM books WHERE contact_no= '$mobile'";
       $result = mysqli_query($conn ,$sql);
        $row = mysqli_fetch_assoc($result);
        $count=mysqli_num_rows($result);
           if($count==1)
                   {
                      echo "<script>alert('Your Email isnt Registered & Please Signup')
                      window.location.replace('signin.php')</script>";
                    }
            }*/
                 
  mysqli_close($conn);
?>