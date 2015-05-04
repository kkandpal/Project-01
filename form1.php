<?php
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" viewport="wnameth=device-wnameth, initial scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>

 <body>
 	 <div class="container">
 				 	<h2>Sign-up Form</h2>
 				 	 
<form action="mysql1.php" class="form" role="form" method="POST">
<div class="form-group">
<div class="row">
<div class=" col-md-3 col-md-4" >
<label for="firstname" class="control-label"> First name : </label>
<input type="text" class="form-control" name="firstname" placeholder="Enter first name">
</div>
<div class="col-md-3 col-md-4" >
<label for="lastname" class="control-label"> Last name : </label>
<input type="text" class="form-control" name="lastname" placeholder="Enter last name">
</div>
<div class="col-md-3 col-lg-4" >
<label for="email" class="control-label"> E-mail address : </label><br>
<input type="text" class="form-control" name="email" placeholder="Enter E-mail address">
</div>
<div class="col-md-3 col-lg-4" >
<label for="password" class="control-label"> Password : </label><br>
<input type="password" class="form-control" name="password" placeholder="Enter Password">
</div><br>
<div class="form-group">
<div class="col-xs-12">
<button type="signup" class="btn btn-default">Submit</button>
</div>
</div>
</body>
</html>
