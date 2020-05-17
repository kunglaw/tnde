<?php
	
	include "../commons/koneksi.php";
	
	$kode = $_GET['kode'];
	$kelompok = $_GET['kelompok'];
	$jenis_surat = $_GET['jenis_surat'];
	
	mysqli_query($conn," insert into jenis_surat(kode,kelompok,jenis_surat) values('$kode','$kelompok','$jenis_surat')");
	
	header("location:../index.php?link=jenis_surat/inputjenissurat&pesan=bisa_masuk");

?>