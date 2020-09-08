<?php
$servername = 'localhost';
$username = 'u740239796_admin';
$password = 'treetree123@';
$dbname = 'u740239796_easyboooks';
$pass=$_POST['pass'];
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
 if($pass=="")
  {
      echo "<script>alert('Password Column Is Blank')
      window.location.replace('profile.php')</script>";
   }
  else{
        
                      $sql="UPDATE books SET password='$pass' where id= '$id'";
                      if(mysqli_query($conn, $sql)){ 
                      $sql ="SELECT first_name FROM books WHERE id LIKE '%$id%'";
                      $result=mysqli_query($conn,$sql);
                      $row = mysqli_fetch_assoc($result);
                      echo  "<script>alert('Hi $row[first_name] Your Password Change Successfully')
                      window.location.replace('profile.php')</script>";
                   }
  }
  mysqli_close($conn);
?>