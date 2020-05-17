<div style="width:800px;text-align:justify; margin-left:0px;" align="left" >
<div id="panelLeft" style="float:left;">
<h2> Users </h2>

<form action=<?php echo "../index.php?link=pengguna/viewuser"?> method="post">
<div><br> Search <input type="text" name="cari" style="margin-left:50px;">
<select name="tipe" style="margin-left:10px;">
	<option value="username">username</option>
    <option value="nama">nama</option>
    <option value="jabatan">jabatan</option>
    <option value="Jenis_Kelamin">Jenis Kelamin</option>
</select>
<input type="submit" value="cari" style="margin-left:10px;width:80px;" required/></div><br />
</form>

<?php
	$maxidx = 3;
	$hlm	= 1;
	if($_GET["page"]) $hlm=$_GET["page"];
	$idx = ($maxidx * $hlm)-$maxidx;
		
	include("commons/paging.php");
	$sql  = " select id_user from personal ";
	$sql .=	" where flag = 1			   ";

	//echo $sql;
	$num_array = mysqli_query($conn,$sql);
	$total_records = mysqli_num_rows($num_array);
	doPages($maxidx, 'index.php?link=pengguna/viewuser', '', $total_records);
?>

<?php
	
	$queryCount = mysqli_query($conn," select count(id_user) from personal where flag = 1");
	$rowCount = mysqli_fetch_array($queryCount);
	
	if($rowCount[0] == 0)
	{
		?><div align="center" style="background-color:#F03346;width:auto; height:30px;"> <h3>Data Tidak Ditemukan</h3> </div><?php
	}
	else
	{
		$cari = $_POST['cari'];
		$tipe = $_POST['tipe'];
		
		if($cari == "" || $tipe == "")
		{
			$sql  = " select * from personal where flag = 1 ";
			$sql .=	" order by 	id_user desc				";
			$sql .=	" limit $idx, $maxidx					";
			$queryTampil = mysqli_query($conn,$sql);
		}
		else
		{
			$sql  = " select * from personal where flag = 1 and $tipe like '%$cari%' ";
			$sql .=	" order by 	id_user desc				 				    	 ";
			$sql .=	" limit $idx, $maxidx							 				     ";
			$queryTampil = mysqli_query($conn,$sql);
			
		}
	}
	
	while ($row = mysqli_fetch_array($queryTampil))
	{
		$id = $row[0];
?>
		<div id="box" class="box2" style="border:solid; width:600px; border-width:thin; clear:both;" align="left">
		<p>ID : <?php echo $row['id_user']; ?></a></p>
		<p>Username : <?php echo $row['username']; ?></p>
		<p>nama : <?php echo $row['nama']; ?></p>
		<p>Jabatan : <?php echo $row['jabatan'];?></p>
        <p align="right"><a href="../index.php?link=pengguna/detailpengguna&id=<?php echo $id ?>"><img src="image/view.gif" /></a></p>
		</div><!-- BOX -->
<?php
	 }
	 
	 doPages($maxidx, 'index.php?link=pengguna/viewuser', '', $total_records);
?>

</div>

<!-- PanelLeft
<div id="Panelright" style="width:170px;float:right; border-style:solid; border-width:thin; margin-top:50px; text-align:center;" align="center">
<div style="background-color:#000; color:#FFF;">Operations</div>
<div id="pilihan"><a href="index.php?link=Pengguna/inputUser">Create User</a></div>
<div id="pilihan"><a href="index.php?link=Pengguna/ManageUser">Manage User</a></div>

</div>Panelright -->
</div>