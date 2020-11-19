<?php
	$servername="localhost";
	$username="root";
	$password="";
	$database="mydb1";
	
	//create a connection 
	$conn=new mysqli($servername,$username,$password,$database);
	
	//check connection
	if($conn->connect_error)
	{
	die("Connection failed").$conn->connect_error;
	}
	
		//create table
	
	$sql="CREATE TABLE reg (
	Id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	FullName VARCHAR(200),
	Contact VARCHAR(20),
	Email VARCHAR(30),
	Address VARCHAR(200),
	BDate date
	
	)";
	
	if($conn->query($sql)===TRUE){
		echo "Table created successfully";
		}
		else
		{
		echo "Error creating table:".$conn->error;
		}
		$conn->close();
?>
	