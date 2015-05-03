<?php

require_once 'connection.php' ;


session_start();

 	   $firstname = $_SESSION[ 'firstname'] ; 
 	   
 	   $lastname = $_SESSION[ 'lastname']   ;

 	    $age = $_SESSION[ 'age']   ;

 	    $address  = $_SESSION[ 'address']   ;

 	    $email =  $_SESSION[ 'email']  ;

 	    $username = $_SESSION[ 'username']   ;

 	    $password1 = $_SESSION[ 'password']   ;
 	  



$register = "INSERT INTO user VALUES ('$firstname' , '$lastname' , '$age' , 'address' , '$email' , '$username' , '$password1' ) " ;

$result = $connect->query( $register ) ;

if( !$result ) {

	die("Couldnt Enter Data into Database " . $connect->error ) ;
}

else
	 {
	 	echo "User Successfully Registered Into Our Database" ;
	    

	 }

session_destroy() ;
?>
