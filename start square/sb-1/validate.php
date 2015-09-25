<!DOCTYPE HTML> 
<html>
<body>
<?php
// define variables and set to empty values
$firstnameErr = $lastnameErr = $usernameErr = $emailErr = $passwordErr = $retypeErr = $passwordErr = $individualErr ="";
$firstname = $lastname = $username = $retype =  $email = $username = $password = $individual ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["firstname"])) {
     $firstnameErr = "Name is required";
   } else {
     $firstname = test_input($_POST["firstname"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$firstname)) {
       $firstnameErr = "Only letters and white space allowed"; 
     }
   }
   if (empty($_POST["lastname"])) {
     $lastnameErr = "Name is required";
   } else {
     $lastname = test_input($_POST["lastname"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$lastname)) {
       $lastnameErr = "Only letters and white space allowed"; 
     }
   }
   if (empty($_POST["email"])) {
     $emailErr = "Email is required";
   } else {
     $email = test_input($_POST["email"]);
     // check if e-mail address is well-formed
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $emailErr = "Invalid email format"; 
     }
   }
   if (empty($_POST["username"])) {
     $usernameErr = "username is required";
   } else {
	   
     $username = test_input($_POST["username"]);
	 $username=filter_var($username,FILTER_SANITIZE_STRING);
     // check if e-mail address is well-formed
   }
     
   if (empty($_POST["password"])) {
     $passwordErr="Please Enter the password";
   } else {
     $password = test_input($_POST["password"]);
  
     }
   if (empty($_POST["retype"])) {
     $retpeErr="Please Enter the password";
   } else {
     $password = test_input($_POST["retype"]);
	 if($password===$retype)
		 $retypeErr="Entered password do not match";
  
     }
  
   if (empty($_POST["individual"])) {
     $individualrErr = "Gender is required";
   } else {
     $gender = test_input($_POST["individual"]);
   }

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
}
?>
</body>
<?php
/*
echo "<h2>Your Input:</h2>";
echo $firstname;
echo "<br>";
echo $lastname;
echo "<br>";
echo $username;
echo "<br>";
echo $email;
echo "<br>";
echo $password;
echo "<br>";
echo $password;
echo "<br>";
echo $individual;*/
?>
</html>