<?php

	include "../commons/koneksi.php";
	
	// Header Surat
	$no_agenda = htmlentities($_POST['no_agenda']);
	$tujuan = htmlentities($_POST['tujuan']);
	$tgl_surat = $_POST['tanggal_surat'];
	$pengirim = htmlentities($_POST['pengirim']);
	$no_surat = htmlentities($_POST['no_surat']);
	// ==================================================//
	
	// Detail Surat
	$perihal = htmlentities($_POST['perihal']);
	$status = htmlentities($_POST['status']);
	$sifat = htmlentities($_POST['sifat']);
	$lampiran = htmlentities($_POST['lampiran']);
	$attachment = $_FILES['attachment']['name'];
	$catatan = htmlentities($_POST['catatan']);
	$ringkasan = htmlentities($_POST['ringkasan']);
	// ==================================================//
	
	/*
		$_FILES["file"]["name"] - the name of the uploaded file
		$_FILES["file"]["type"] - the type of the uploaded file
		$_FILES["file"]["size"] - the size in bytes of the uploaded file
		$_FILES["file"]["tmp_name"] - the name of the temporary copy of the file stored on the server
		$_FILES["file"]["error"] - the error code resulting from the file upload
	*/
	
	// informasi tambahan 
	$username = $_POST['username'];
	$tgl_update = $_POST['tgl_update'];
	
	$ip_address = $_SERVER['REMOTE_ADDR'];
	$flag = 1;
	
	if($_FILES['attachment']['type'] != "application/pdf")
	{
		header("location:../index.php?link=surat_keluar/inputsuratkeluar&pesan=file-harus-berbentuk-pdf");
	}
	else if(file_exists("File/Surat_Keluar/".$attachment))
	{
		header("location:../index.php?link=surat_keluar/inputsuratkeluar&pesan=file-sudah-ada");
	}
	else
	{
		// Insert ke Surat Keluar
		$sql  = "insert into surat_keluar(";
		$sql .= "no_surat_keluar,tgl_surat,";
		$sql .= "perihal       ,tujuan     ,pengirim,";
		$sql .= "status        ,sifat      ,ringkasan,";
		$sql .= "lampiran      ,attachment ,catatan,";
		$sql .= "id_user       ,tgl_update ,";
		$sql .= "ip_address    ,flag)";
		$sql .= "values (";
		$sql .= "'$no_surat'     ,'$tgl_surat' ,";
		$sql .= "'$perihal'      ,'$tujuan'    ,'$pengirim',";
		$sql .= "'$status'       ,'$sifat'     ,'$ringkasan',";
		$sql .= "'$lampiran'     ,'$attachment','$catatan',";
		$sql .= "'$username'     ,now(),";
		$sql .= "'$ip_address'   ,'$flag')";
		
		mysqli_query($conn,$sql);
		
		// insert ke log_sk
		$sqlLog  = "insert into log_sk(";
		$sqlLog .= "no_agenda_sk	,username	,tgl_update,";
		$sqlLog .= "otoritas		,no_surat_keluar,";
		$sqlLog .= "tgl_persetujuan	,ip_address	,aktifitas)";
		$sqlLog .= "values(";
		$sqlLog .= "'$no_agenda'	,'$username',now(),";
		$sqlLog .= "''				,'$no_surat',";
		$sqlLog .= "''				,'$ip_address','insert')";
		
		mysqli_query($conn,$sqlLog);
		
		// upload file
		move_uploaded_file($_FILES['attachment']['tmp_name'],"../file/surat_keluar/".$attachment);	
		
		header("location:../index.php?link=surat_keluar/inputsuratkeluar");
	}
	

?>