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
	
	// informasi tambahan 
	$username = $_POST['username'];
	$tgl_update = $_POST['tgl_update'];
	
	$ip_address = $_SERVER['REMOTE_ADDR'];
	$flag = 1;
	
	if($_FILES['attachment']['type'] != "application/pdf")
	{
		header("location:../index.php?link=surat_masuk/inputsuratmasuk&pesan=file-harus-berbentuk-pdf");
	}
	else if(file_exists("File/Surat_Masuk/".$attachment))
	{
		header("location:../index.php?link=surat_masuk/inputsuratmasuk&pesan=file-sudah-ada");
	}
	else
	{
		$sql  = "insert into surat_masuk(";
		$sql .= "no_surat_masuk,tgl_surat,";
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
		
		// insert ke log_sm
		$sqlLog  = "insert into log_sm(";
		$sqlLog .= "no_agenda_sm	,username	,tgl_update,";
		$sqlLog .= "otoritas		,no_surat_masuk,";
		$sqlLog .= "tgl_persetujuan	,ip_address	,aktifitas)";
		$sqlLog .= "values(";
		$sqlLog .= "'$no_agenda'	,'$username',now(),";
		$sqlLog .= "''				,'$no_surat',";
		$sqlLog .= "''				,'$ip_address','insert')";
		
		mysqli_query($conn,$sqlLog);
		
		move_uploaded_file($_FILES['attachment']['tmp_name'],"../file/surat_masuk/".$attachment);
		
		header("location:../index.php?link=surat_masuk/inputsuratmasuk");
	}
	

?>