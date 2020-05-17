<?php
	
	session_start();
	include "../commons/koneksi.php";

	// variabel
	$no_agenda = $_GET['id'];
	$no_surat = $_GET['no_surat'];
	$username = $_SESSION['user'];
	$ip_address = $_SERVER['REMOTE_ADDR'];
	
	$sql = "update surat_keluar set flag = 0 where no_agenda_sk = $no_agenda";
	mysqli_query($conn,$sql);
	
	// insert ke log_sk
	$sqlLog  = "insert into log_sk(";
	$sqlLog .= "no_agenda_sk	,username	,tgl_update,";
	$sqlLog .= "otoritas		,no_surat_keluar,";
	$sqlLog .= "tgl_persetujuan	,ip_address	,aktifitas)";
	$sqlLog .= "values(";
	$sqlLog .= "'$no_agenda'	,'$username',now(),";
	$sqlLog .= "''				,'$no_surat',";
	$sqlLog .= "''				,'$ip_address','delete')";
	
	mysqli_query($conn,$sqlLog);
	
	header("location:../index.php?link=surat_keluar/viewsuratkeluar");



?>