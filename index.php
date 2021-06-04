<?php
   include('User.Controller.php');

   if(isset($_GET['class'])&& isset($_GET['method']))	
	{
  	  $class= $_GET['class'];
	  $method = $_GET['method'];
	}
	else
	{
	  echo "primera carga";
	}
	$c = new $class();
	$c-> $method();  
    
?>
