<html>
<body>
<?php
require_once 'mysql.php';
$Firstname = $_POST['firstname'];
$Lastname = $_POST['lastname'];
$Emailaddress = $_POST['email'];
$Password = $_POST['password'];
$query="INSERT INTO file VALUES('$Firstname','$Lastname', '$Emailaddress', '$Password')";
$result=$connect->query($query);
if(!$result)
{
die("could not enter data into database".$connect->error);
}
$connect->close();
?>
</body>
</html>
