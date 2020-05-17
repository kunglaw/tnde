<?php
	
	session_start();
	include "../commons/koneksi.php";
	
	$username = htmlentities(htmlspecialchars($_POST['username'],ENT_QUOTES));
	$password = htmlentities(htmlspecialchars($_POST['password'],ENT_QUOTES));
	
	$query1 = "select * from personal where username = '".$username."' and ";
	$query1 .= "password = md5('".$password."') and Privilege = 'Operator' and flag = 1";
	
	$query2 = "select * from personal where username = '".$username."' and ";
	$query2 .= "password = md5('".$password."') and Privilege = 'admin' and flag = 1";
	
	$query3 = "select * from personal where username = '".$username."' and ";
	$query3 .= "password = md5('".$password."') and Privilege = 'Pimpinan' and flag = 1";
	
	$queryOperator = mysqli_query($conn,$query1);
	$queryAdmin = mysqli_query($conn,$query2);
	$queryPimpinan = mysqli_query($conn,$query3);		
	
	if($username == "" || $password == "")
	{
		header("location:../index.php?link=login&pesan=f207ad63636ddcdab072f16459be7c29");
		// username dan password harus diisi
	}
	else
	{		
		if($row = mysqli_fetch_array($queryOperator))
		{
			$_SESSION['user'] = $row['username'];
			$_SESSION['nama'] = $row['nama'];
			$_SESSION['akses'] = $row['Privilege'];
			header("location:../index.php?link=home");
		}
		else if($row = mysqli_fetch_array($queryAdmin))
		{
			$_SESSION['user'] = $row['username'];
			$_SESSION['nama'] = $row['nama'];
			$_SESSION['akses'] = $row['Privilege'];
			header("location:../index.php?link=home");
		}
		else if($row = mysqli_fetch_array($queryPimpinan))
		{
			$_SESSION['user'] = $row['username'];
			$_SESSION['nama'] = $row['nama'];
			$_SESSION['akses'] = $row['Privilege'];
			header("location:../index.php?link=home");
		}
		else
		{
			header("location:../index.php?link=login&pesan=e0218f71e16d6720861b7d437e98988d");
			// username atau password salah	
		}
	}	

?>