<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		

		
		// Create conn1ection
	    $conn1 = new mysqli($servername, $username, $password);

        // Check conn1ection
        if ($conn1->connect_error) 
		{
        die("conn1ection failed: ") . $conn1->connect_error;
		}
		//create database
		$sql="CREATE DATABASE mydb1";
		if($conn1->query($sql)==True)
		{
			echo "Datbase created";
		}
		else{
			echo"Error creating db:" .$conn1->error;
		}
		

		$conn1->close();
		
?>