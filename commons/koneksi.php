<?php

	$server = "localhost";
	$username = "root";
	$password = "";
	$database = "tatanaskah";
	
	$conn = mysqli_connect($server,$username,$password);
	
	if(!$conn)
	{
		die(" tak bisa konek server ");
	}
	
	$select = mysqli_select_db($conn,$database);
	
	if(!$select)
	{
		die(" tak bisa mengakses database ");
	}
	


?>