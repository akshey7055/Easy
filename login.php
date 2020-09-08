<?php
$servername = 'localhost';
$username = 'u740239796_admin';
$password = 'treetree123@';
$dbname = 'u740239796_easyboooks';
$email=$_POST['email'];
$idd=0;
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
if($email=="" && $pass=="")
  {
      echo "<script>alert('You Have To Enter Email And Password Here')
      window.location.replace('signin.php')</script>";
   }
 else if($email=="")
  {
      echo "<script>alert('Email Column Is Blank')
      window.location.replace('signin.php')</script>";
   }
else if($pass=="")
  {
      echo "<script>alert('Password Column Is Blank')
      window.location.replace('signin.php')</script>";
   }
  else{
        $sqli ="SELECT email,password FROM books WHERE email= '$email' AND password= '$pass' ";
        $result = mysqli_query($conn ,$sqli);
        $row = mysqli_fetch_assoc($result);
        $count=mysqli_num_rows($result);
           if($count==1)
                   {
                        $dd ="SELECT id FROM books WHERE email LIKE '%$email%'";
                        $res = mysqli_query($conn ,$dd);
                        $idd = mysqli_fetch_assoc($res);
                        $sql ="SELECT first_name FROM books WHERE email LIKE '%$email%'";
                        $result=mysqli_query($conn,$sql);
                        $row = mysqli_fetch_assoc($result);
                        $a=0;
                        if($a==0)
                        {
                            session_start();
                            $_SESSION['id']= $idd['id'];
                        }
                        $yes ="SELECT pay FROM books WHERE email LIKE '%$email%'";
                        $yesresult=mysqli_query($conn,$yes);
                        $yesrow = mysqli_fetch_assoc($yesresult);
                        if($yesrow['pay']==0)
                        {
                      echo  "<script>alert('Hi $row[first_name] Your Credentials Match, Please Pay To Access All Facilities')
              window.location.replace('home.php')   
       
                      </script>";
                        }
                        else
                        {
                      echo  "<script>alert('Hi $row[first_name] Your Credentials Match, Your Account Is Paid')
              window.location.replace('home2.php')   
       
                      </script>";
                        }
                        
                   }
       else if($sql)
           {         
               $sql ="SELECT email FROM books WHERE email= '$email'";
       $result = mysqli_query($conn ,$sql);
        $row = mysqli_fetch_assoc($result);
        $count=mysqli_num_rows($result);
           if($count==1)
                   {
                      echo "<script>alert('Incorrect Password')
                      window.location.replace('signin.php')
</script>";
                    }
            }
       else if($sql)
           {
               $sql ="SELECT password FROM books WHERE password= '$pass'";
       $result = mysqli_query($conn ,$sql);
        $row = mysqli_fetch_assoc($result);
        $count=mysqli_num_rows($result);
           if($count==1)
                   {
                      echo "<script>alert('Your Email isn't Registered & Please Signup)
                      window.location.replace('signin.php')</script>";
                    }
            }
                   else{ echo "<script>alert('Enter Proper Details')
                   window.location.replace('signin.php')</script>"; }
  }
  mysqli_close($conn);
?>

<html>
   <!--
    <body>
        <form method="POST" id="myform" action="dashboard/examples/profile.php" >
            <input type="hidden" name="t1" id="t1" value= "<?php echo $idd['id']; ?>">
            <script>document.getElementById("myform").submit()
             
 </script>
            </form>
        </body>-->
</html>
