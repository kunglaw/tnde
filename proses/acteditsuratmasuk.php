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
	$attachment = htmlentities($_POST['attachment']);
	$catatan = htmlentities($_POST['catatan']);
	$ringkasan = htmlentities($_POST['ringkasan']);
	// ==================================================//
	
	// informasi tambahan 
	$username = $_POST['username'];
	$tgl_update = $_POST['tgl_update'];
	
	$ip_address = $_SERVER['REMOTE_ADDR'];
	$flag = 1;
	
	/*
	mysqli_query($conn," update Surat_masuk set `no_agenda` = '$no_agenda',`no_surat` = '$no_surat',`perihal` = '$perihal',`tujuan` = '$tujuan',`pengirim` = '$pengirim',`jenis_surat` = '$jenis_surat',`status` = '$status',`sifat` = '$sifat',`ringkasan` = '$ringkasan',`lampiran` = '$lampiran',`attachment` = '$attachment',`catatan` = '$catatan' where `id` = $id ");*/
	
	$sql  = " update surat_masuk set";
	$sql .= " no_surat_masuk= '$no_surat'	,";
	$sql .= " tgl_surat 	= '$tgl_surat'	,";
	$sql .= " perihal 		= '$perihal'	,";
	$sql .= " tujuan 		= '$tujuan'		,";
	$sql .= " pengirim		= '$pengirim'	,";
	$sql .= " status		= '$status'		,";
	$sql .= " sifat			= '$sifat'		,";
	$sql .= " ringkasan		= '$ringkasan'	,";
	$sql .= " lampiran		= '$lampiran'	,";
	$sql .= " attachment 	= '$attachment'	,";
	$sql .= " catatan 		= '$catatan'	,";
	$sql .= " id_user		= '$username'	,";
	$sql .= " tgl_update	= now()			 ";
	$sql .= " where no_agenda_sm = '$no_agenda'";
	
	mysqli_query($conn,$sql);
	
	// insert ke log_sm
	$sqlLog  = "insert into log_sm(";
	$sqlLog .= "no_agenda_sm	,username	,tgl_update,";
	$sqlLog .= "otoritas		,no_surat_masuk,";
	$sqlLog .= "tgl_persetujuan	,ip_address	,aktifitas)";
	$sqlLog .= "values(";
	$sqlLog .= "'$no_agenda'	,'$username',now(),";
	$sqlLog .= "''				,'$no_surat',";
	$sqlLog .= "''				,'$ip_address','update')";
	
	mysqli_query($conn,$sqlLog);
	
	header("location:../index.php?link=surat_masuk/detailsuratmasuk&id=$no_agenda");
	

?>