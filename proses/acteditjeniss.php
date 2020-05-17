<?php
	
	include "../commons/koneksi.php";
	
	$id = $_GET['id2'];
	$kode = $_GET['kode'];
	$kelompok = $_GET['kelompok'];
	$jenis_surat = $_GET['jenis_surat'];
	
	mysqli_query($conn," update jenis_surat set kode = '$kode', kelompok = '$kelompok', jenis_surat = '$jenis_surat' where id = $id");
	header("location:../index.php?link=jenis_surat/detailjenissurat&id=$id");

?>