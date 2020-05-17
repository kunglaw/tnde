<?php

	include "../commons/koneksi.php";

	$id = $_GET['id'];
	
	mysqli_query($conn," delete from jenis_surat where id = $id");
	
	header("location:../index.php?link=jenis_surat/viewjenissurat");



?>