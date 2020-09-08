<?php
$servername = 'localhost';
$username = 'u323994119_admin';
$password = '12345678';
$dbname = 'u323994119_library';
   $fname=$_POST["fname"];
$lname=$_POST["lname"];
$email=$_POST["email"];
$pass=$_POST["pass"];
$contact=$_POST["mnumber"];
$college=$_POST["college"];
$year=$_POST["year"];
$branch=$_POST["branch"];
$a=0;
if($a==0)
{
    session_start();
    $id=$_SESSION['id'];
}
$conn=mysqli_connect($servername,$username,$password,$dbname);
if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
                }   
 if($fname=="")
  {
      echo "<script>alert('First Name Column Is Blank')
      window.location.replace('profile.php')</script>";
   }
    if($lname=="")
  {
      echo "<script>alert('Last Name Column Is Blank')
      window.location.replace('profile.php')</script>";
   }
    if($contact=="")
  {
      echo "<script>alert('Contact Number Column Is Blank')
      window.location.replace('profile.php')</script>";
   }
    if($pass=="")
  {
      echo "<script>alert('Password Column Is Blank')
      window.location.replace('profile.php')</script>";
   }
    if($college=="")
  {
      echo "<script>alert('College Column Is Blank')
      window.location.replace('profile.php')</script>";
   }
    if($branch=="")
  {
      echo "<script>alert('Branch Column Is Blank')
      window.location.replace('profile.php')</script>";
   }
    if($year=="")
  {
      echo "<script>alert('Year Column Is Blank')
      window.location.replace('profile.php')</script>";
   }
  else{
                        $sql="UPDATE records SET first_name='$fname' where id= '$id'";
                        $sql="UPDATE records SET last_name='$lname' where id= '$id'";
                        $sql="UPDATE records SET email='$email' where id= '$id'";
                        $sql="UPDATE records SET contact_number='$contact' where id= '$id'";
                        $sql="UPDATE records SET password='$pass' where id= '$id'";
                        $sql="UPDATE records SET branch='$branch' where id= '$id'";
                        $sql="UPDATE records SET college='$college' where id= '$id'";
                        $sql="UPDATE records SET year='$year' where id= '$id'";
                      if(mysqli_query($conn, $sql)){ 
                      $sql ="SELECT first_name FROM records WHERE id LIKE '%$id%'";
                      $result=mysqli_query($conn,$sql);
                      $row = mysqli_fetch_assoc($result);
                      echo  "<script>alert('Hi $row[first_name] Your Profile Updated Successfully')
                      window.location.replace('profile.php')</script>";
                      }
  }                  
  mysqli_close($conn);
?>