<?php
	
	session_start();
	include "../commons/koneksi.php";
	
	$username = $_SESSION['user'];
	$password_lama = $_POST['password_lama'];
	$password_baru = $_POST['password_baru'];
	$ulang_pb = $_POST['password_baru2'];
	
	if($password_baru == "" || $password_lama == "" || $ulang_pb == "")
	{
		header("location:../index.php?link=pengguna/editpengguna&pesan=gagal");
	}
	else
	{
		$query = mysqli_query($conn,"select * from personal where username = '$username' and password = md5('$password_lama')");
				
		if($password_baru != $ulang_pb)
		{
			header("location:../index.php?link=pengguna/editpengguna&pesan=tidakSama");
		}
		if($row = mysqli_fetch_array($query))
		{
			mysqli_query($conn," update personal set password = md5('$ulang_pb') where username = '$username'");
			header("location:../index.php?link=pengguna/editpengguna&pesan=berhasil");
		}
		else
		{
			header("location:../index.php?link=pengguna/editpengguna&pesan=passSalah");
		}
	}

?>