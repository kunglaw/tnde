<?php
	
	include "../commons/koneksi.php";
	
	$username 	= htmlentities($_POST['username']);
	$password 	= htmlentities($_POST['password']);
	$email 		= htmlentities($_POST['email']);
	$nama 		= htmlentities($_POST['nama']);
	$jk 		= htmlentities($_POST['JK']);
	$alamat		= htmlentities($_POST['alamat']);
	$no_telp 	= htmlentities($_POST['no_telp']);
	$jabatan 	= htmlentities($_POST['jabatan']);
	$privilege 	= htmlentities($_POST['privilege']);
	$flag 		= 1;
	
	if($username == "" || $password == "")
	{
		header("location:../index.php?link=Pengguna/inputuser&pesan=username-atau-password-harus-diisi");
	}
	else
	{
		$sqlOtentifikasi = mysqli_query($conn,"select * from personal where username = '$username' and flag = 1 ");
		
		if($o = mysqli_fetch_array($sqlOtentifikasi))
		{
			header("location:../index.php?link=pengguna/inputuser&pesan=username-sudah-ada");
		}
		else
		{
			$sqlP  = "insert into personal(";
			$sqlP .= "username		,password	,nama,";
			$sqlP .= "Jenis_Kelamin	,alamat		,email,";
			$sqlP .= "no_telp		,tgl_daftar	,jabatan,";
			$sqlP .= "Privilege		,flag)";
			$sqlP .= "values(";
			$sqlP .= "'$username'	,md5('$password'),'$nama',";
			$sqlP .= "'$jk'			,'$alamat'	,'$email',";
			$sqlP .= "'$no_telp'	,now(),'$jabatan',";
			$sqlP .= "'$privilege'	,'$flag')";
			
			mysqli_query($conn,$sqlP);
			
			header("location:../index.php?link=pengguna/inputuser&pesan=bisa_masuk");
		}
	}
?>