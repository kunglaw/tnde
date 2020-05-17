<?php
	
	session_start();
	session_destroy();
	header("location:../index.php?link=home&pesan=0cfc6f8de4e10536d8845bc880a1a554");
	// anda telah logout

?>