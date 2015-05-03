<!DOCTYPE html>

<html>
<head>       
<title>Sign up</title>       
<meta name="viewport" content="wnameth=device-wnameth, initial-scale=1.0">          
<link href="css/bootstrap.min.css" rel="stylesheet">  
</head>
<body>
<div name="header" style="background color: #FFD700;">
<h1 align="center" style= "font-color:white;" > Signup Form </h1>
</div>
<form action="second.php" role="form-horizontal" method="POST">
<div class="form-group">

<div class="row" style="padding:40px">
  <div class=" col-md-3 col-lg-4" >  
<label for="firstname" class="control-label"> First name :  </label><br>
<input type="text" class="form-control" name="firstname" placeholder="Enter first name">
</div>


  <div class="col-md-3 col-lg-4" >  
<label for="lastname" class="control-label"> Last name :  </label><br>
<input type="text" class="form-control" name="lastname" placeholder="Enter last name">
</div>
</div>
<div class="row"  style="padding:40px">

<div class="col-md-2 col-lg-2" >
<label for="dob" class="control-label"> Date Of Birth : </label><br>
<input type="text" class="form-control" name="dob" placeholder="Enter date of birth">
</div>


<div class="row">

<div class="col-md-3 col-lg-4" >
<label for="email" class="control-label"> E-mail address : </label><br>
<input type="text" class="form-control" name="email" placeholder="Enter E-mail address">
</div>


<div class="col-md-3 col-lg-4" >
<label for="password" class="control-label"> Password : </label><br>
<input type="password" class="form-control" name="password" placeholder="Enter Password">
</div>
</div>

<div class="row" style="padding:40px">
<div class="btn-group"> 
<button type="signup" class="btn btn-primary" >Submit</button> 
</div>
</div>
</div>
</form>
</body>
</html>
