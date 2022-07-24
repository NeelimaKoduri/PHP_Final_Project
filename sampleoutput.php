<html>
    <head>
        <title> PHP and Processing</title>
    </head>
    <body>
    <?php 
    	
   /*getting property values from Form*/
   $user=$_POST['username'];
   $pwd=$_POST['password'];

   include("helloWorld.php"); 
   
   
   /*instantiate and populate the current subject*/
   $currsub=new subject();
   		
   /*calling setter methods by passing username and password from the login form*/
  
   $currsub->setUsername($user);
   $currsub->setPassword($pwd);
   echo "hello!! welcome ".$currsub->getUsername()." and here is your password ".$currsub->getPassword();

  $host="localhost";
  $dbname="nk20bo";
  $username="nk20bo";
  $password="MDkzMTZkMGEy";

  $conn=mysqli_connect($host, $username, $password, $dbname);
  
  if(mysqli_connect_errno()){
  	  die("Connection error:".mysqli_connect_errno());
  }
  echo "Connection sucessful";
  
  $sql="Insert into LoginForm(username,password)
  		values(?,?)";
  		
  $stmt=mysqli_stmt_init($conn);
  
  if(!mysqli_stmt_prepare($stmt, $sql)){
  	  die(mysqli_error($conn));
  }
  
  mysqli_stmt_bind_param($stmt, "ss",
  	  $currsub->getUsername(), $currsub->getPassword());
  
  mysqli_stmt_execute($stmt);
  
  echo "Record saved";
   ?>
</body>
</html>