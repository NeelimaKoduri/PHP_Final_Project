<?php
$db_hostname="localhost";
$db_username="nk20bo";
$db_password="MDkzMTZkMGEy";
echo "1";
try
{
    $conn=new PDO("mysql:host=$db_hostname;dbname='nk20bo', $db_username, $db_password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
}
catch(PDOException $e)
{
	System.out.println( 'Connection failed: '. $e->getMessage());
}

