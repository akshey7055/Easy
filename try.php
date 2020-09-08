<?php
$servername = 'localhost';
$username = 'u740239796_admin';
$password = 'treetree123@';
$dbname = 'u740239796_easyboooks';
$id=$_POST['t1'];
echo $id;
$conn=mysqli_connect($servername,$username,$password,$dbname);
if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
                }      

        $first ="SELECT first_name FROM books WHERE id = '$id'";
        $firstresult = mysqli_query($conn ,$first);
        $firstrow = mysqli_fetch_assoc($firstresult);
        $second ="SELECT last_name FROM books WHERE id = '$id'";
        $secondresult = mysqli_query($conn ,$second);
        $secondrow = mysqli_fetch_assoc($secondresult);
        $email ="SELECT email FROM books WHERE id = '$id'";
        $emailresult = mysqli_query($conn ,$email);
        $emailrow = mysqli_fetch_assoc($emailresult);
        $contact ="SELECT contact_no FROM books WHERE id = '$id'";
        $contactresult = mysqli_query($conn ,$contact);
        $contactrow = mysqli_fetch_assoc($contactresult);
        $birth ="SELECT birth FROM books WHERE id = '$id'";
        $birthresult = mysqli_query($conn ,$birth);
        $birthrow = mysqli_fetch_assoc($birthresult);
        
  mysqli_close($conn);
?>
<html>
    <body>
        <form>
                          <input type="text" class="form-control" value= "<?php echo $firstrow['first_name']; ?>" disabled>
                        </form>
                         </body>
                         </html>