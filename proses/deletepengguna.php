<?php
	
	session_start();
	include "../commons/koneksi.php";
	
	$id_user = $_GET['id'];
	$username1 = $_GET['username'];
	
	if($username1 == $_SESSION['user'])
	{
		$href  = "location:../index.php?link=pengguna/detailpengguna&id=$id_user";
		$href .= "&pesan=anda-tidak-bisa-menghapus-diri-sendiri";
		header($href);
	}
	else
	{
		mysqli_query($conn," update personal set flag = 0 where id_user = $id_user ");
		header("location:../index.php?link=pengguna/viewuser");
	}

?>