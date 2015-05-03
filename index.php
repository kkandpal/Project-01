<?php

?>

<!DOCTYPE html>

<hmtl lang = "en">

<head>

  <meta charset = "utf-8">

  <meta name = "viewport" content = "device-width , initial-scale = 1" >

  <link rel = "stylesheet" href = "css/bootstrap.min.css">

  <script src = "js/bootstrap.min.js">

  

  </script>

</head>

<body>

<div class = "container">


	<div class = "row">

<h2> Registration Form </h2><br>

<form action = "register.php" method = "POST" role = "form" class = "form"> 

   
	<div class = "col-sm-6 col-xs-15 ">

       <div class = "form-group col-sm-offset-2">
	     
	    <label for = "firstname"> First Name </label>

	    <input class = "form-control" type = "text" name = "firstname" placeholder = "Enter your First Name"> 

	    </div>


	</div> 
  

      <div class = "col-sm-6 col-xs-15 ">

       <div class = "form-group">
	     
	    <label for = "lastname"> Last Name </label>

	    <input class = "form-control" type = "text" name = "lastname" placeholder = "Enter Your Last Name"> 

	    </div>


	</div> 
</div>
  
   <div class = "row">
	<div class = "col-sm-6 col-xs-15 ">

       <div class = "form-group col-sm-offset-2">
	     
	    <label for = "age"> Age </label>

	    <input class = "form-control" type = "text" name = "age" placeholder = "Enter your Age"> 

	    </div>


	</div> 
  

      <div class = "col-sm-6 col-xs-15 ">

       <div class = "form-group">
	     
	    <label for = "address"> Address </label>

	    <input class = "form-control" type = "text" name = "address" placeholder = "Enter Your Address"> 

	    </div>


	</div> 
</div>
  
  <div class = "row">

     <div class = "col-sm-6 col-xs-15 ">

       <div class = "form-group col-sm-offset-2">
	     
	    <label for = "email"> Email Id</label>

	    <input class = "form-control" type = "email" name = "email" placeholder = "Enter Your Email Id"> 

	    </div>


	</div> 

     <div class = "col-sm-6 col-xs-15 ">

       <div class = "form-group">
	     
	    <label for = "username"> Username </label>

	    <input class = "form-control" type = "text" name = "username" placeholder = "Enter Your Username"> 

	    </div>


	</div> 
 </div>

 <div class = "row">

     <div class = "col-sm-6 col-xs-15 ">

       <div class = "form-group col-sm-offset-2">
	     
	    <label for = "password1"> Password</label>

	    <input class = "form-control" type = "Password" name = "password1" placeholder = "Enter Your Password"> 

	    </div>




	</div> 
<div class = "col-sm-6 col-xs-15 ">

       <div class = "form-group">
	     
	    <label for = "password2"> Confirm Password </label>

	    <input class = "form-control" type = "Password" name = "password2" placeholder = "Re-Enter Your Password"> 

	    </div>


	</div> 
	</div>

<div class = "row">

<div class = "col-sm-12 col-xs-20">

<input type = "submit" class = "btn btn-success col-sm-offset-5" value="Register">
</div>
</div>
</div>
</div>


</body>

</hmtl>
