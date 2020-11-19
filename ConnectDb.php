<?php
	$servername="localhost";
	$username="root";
	$password="";
	$database="mydb1";
	
	//create a connection 
	$conn1=new mysqli($servername,$username,$password,$database);
	
	//check connection
	if($conn1->connect_error)
	{
	die("Connection failed").$conn1->connect_error;
	
	}
?>