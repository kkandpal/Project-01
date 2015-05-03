<html>
<body>
<?php
require_once 'first.php';
$Fname = $_POST['firstname'];
$Lname = $_POST['lastname'];
$Dateofbirth = $_POST['dob'];
$emailaddress = $_POST['email'];
$Password = $_POST['password'];
$query="INSERT INTO file VALUES('$Fname','$Lname','$Dateofbirth','$emailaddress', '$Password')";
$result=$connect->query($query);
if(!$result)
{
 die("could not enter data into database".$connect->error);
}


$connect->close();
?>
</body>
</html>
