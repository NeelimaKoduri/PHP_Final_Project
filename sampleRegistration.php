<html>
	<head>
		<title>Registration</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
	</head>
	<body>
	<h4> Registration</h4>
	<form action="sampleRegistration.php" method="post">
		<input name="firstname" type="text-box" placeholder="Firstname"><br>
		<input name="lastname" type="text-box" placeholder="Lastname"><br>
		<input name="dob" type="date" placeholder="Date of birth"><br>
		<input name="email" type="email" placeholder="Email Address"><br>
		<input name="password" type="password" placeholder="Password"><br>
		<input name="confpassword" type="password" placeholder="Confirm Password"><br>
		<input name="register" type="submit" placeholder="Register"><br>
	</form>
	<?php 
    	
   /*getting property values from Form*/
   $f_name=$_POST['firstname'];
   $l_name=$_POST['lastname'];
   $dob=$_POST['dob'];
   $email=$_POST['email'];
   $password=$_POST['password'];
   $confpassword=$_POST['confpassword'];
echo "confpassword";
   include("RegistrationClass.php"); 
   
   echo "RegistrationClass";
   /*instantiate and populate the current subject*/
   $currUser=new user();
   		echo "currUser";
   /*calling setter methods by passing username and password from the login form*/
  
   $currUser->setFirstname($f_name);
   echo "f_name executed";
   $currUser->setLastname($l_name);
   echo "l_name executed";
   $currUser->setDob($dob);
   echo "dob executed";
   $currUser->setEmail($email);
   echo "email executed";
   $currUser->setPassword($password);
   echo "password executed";
   $currUser->setConfpassword($confpassword);
  echo "confpassword executed";
  echo "hello!! welcome ".$currUser->getFirstname()."".$currUser->getLastname()."".$currUser->getDob()."".$currUser->getEmail()."".$currUser->getPassword()."".$currUser->getConfpassword();
  
   ?>
	</body>
</html>
		
		
