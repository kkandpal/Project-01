<?php


$firstname = $_POST[ 'firstname' ] ; 

$lastname = $_POST[ 'lastname' ] ;

$age = $_POST[ 'age' ] ;

$address = $_POST[ 'address' ] ;

$email = $_POST[ 'email' ] ;

$username = $_POST[ 'username' ] ;

$password1 = $_POST[ 'password1' ] ;

$password2 = $_POST[ 'password2' ] ;

$submit = $_POST[ 'submit' ] ;

$flag = 0 ;

if( !( $firstname ) )  {

	echo "First Name Not Entered <br><br>" ;
	$flag++;
}

if( !( $lastname ) )  {

	echo "Last Name Not Entered<br><br>" ;
    $flag++;
}
if( !( $age ) )  {

	echo "Age Not Entered<br><br>" ;
    $flag++ ;

}
if( !( $address ) )  {

	echo "Address Not Entered<br><br>" ;
    $flag++; 
}
if( !( $email ) )  {

	echo "Email Id Not Entered<br><br>" ;
    $flag++ ;

}
if( !( $username ) )  {

	echo "User Name Not Entered<br><br>" ;
    $flag++ ;

}
if( !( $password1 ) )  {

	echo "Password Not Entered<br><br>" ;
    $flag++ ;

}
if( $password1 != $password2)  {

	echo "Passwords Do Not Match. Please Re-Enter Your Password" ;
    $flag++ ;
}
  
  if($flag !=0)
{
  echo $flag ;	
}

?>


<!DOCTYPE html>

<hmtl lang = "en">

<head>

  <meta charset = "utf-8">
O
  <meta name = "viewport" content = "device-width , initial-scale = 1" >

  <link rel = "stylesheet" href = "css/bootstrap.min.css">

  <script src = "js/bootstrap.min.js">

  </script>

</head>

<body>

<div class = "container">


	<div class = "row">

<h2> Registration Form </h2><br>

<form action = "<?php echo $_SERVER['PHP_SELF'] ; ?> " method = "POST" role = "form" class = "form"> 

   
	<div class = "col-sm-6 col-xs-15 ">

       <div class = "form-group col-sm-offset-2">
	     
	    <label for = "firstname"> First Name </label>

	    <input class = "form-control" type = "text" name = "firstname" value = "<?php echo $firstname  ; ?>" /> 

	    </div>


	</div> 
  

      <div class = "col-sm-6 col-xs-15 ">

       <div class = "form-group">
	     
	    <label for = "lastname"> Last Name </label>

	    <input class = "form-control" type = "text" name = "lastname" value = "<?php echo $lastname  ; ?>" /> 

	    </div>


	</div> 
</div>
  
   <div class = "row">
	<div class = "col-sm-6 col-xs-15 ">

       <div class = "form-group col-sm-offset-2">
	     
	    <label for = "age"> Age </label>

	    <input class = "form-control" type = "text" name = "age" value = "<?php echo $age  ; ?> " /> 

	    </div>


	</div> 
  

      <div class = "col-sm-6 col-xs-15 ">

       <div class = "form-group">
	     
	    <label for = "address"> Address </label>

	    <input class = "form-control" type = "text" name = "address" value = "<?php echo $address  ; ?> " /> 

	    </div>


	</div> 
</div>
  
  <div class = "row">

     <div class = "col-sm-6 col-xs-15 ">

       <div class = "form-group col-sm-offset-2">
	     
	    <label for = "email"> Email Id</label>

	    <input class = "form-control" type = "email" name = "email" value = "<?php echo $email  ; ?> " /> 

	    </div>


	</div> 

     <div class = "col-sm-6 col-xs-15 ">

       <div class = "form-group">
	     
	    <label for = "username"> Username </label>

	    <input class = "form-control" type = "text" name = "username" value = "<?php echo $username  ; ?> "/> 

	    </div>


	</div> 
 </div>

 <div class = "row">

     <div class = "col-sm-6 col-xs-15 ">

       <div class = "form-group col-sm-offset-2">
	     
	    <label for = "password1"> Password</label>

	    <input class = "form-control" type = "Password" name = "password1" placeholder = "Enter Your Password" /> 

	    </div>




	</div> 
<div class = "col-sm-6 col-xs-15 ">

       <div class = "form-group">
	     
	    <label for = "password2"> Confirm Password </label>

	    <input class = "form-control" type = "Password" name = "password2" placeholder = "Re-Enter Your Password" /> 

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



<?php

 
 	if ($flag == 0)  
 	{

 	   session_start();

 	   $_SESSION[ 'firstname']  = $firstname ;
 	   
 	   $_SESSION[ 'lastname']  = $lastname ;

 	   $_SESSION[ 'age']  = $age ;

 	   $_SESSION[ 'address']  = $address ;

 	   $_SESSION[ 'email']  = $email ;

 	   $_SESSION[ 'username']  = $username ;

 	   $_SESSION[ 'password']  = $password1 ;
 	  
 	header("location:sample.php") ;
 	}
  

 ?>
