<div style="width:800px;text-align:justify; margin-left:0px;" align="left" >
<div id="panelLeft" style="float:left;">
<h2> Surat Masuk </h2>

<form action=<?php echo "index.php?link=surat_masuk/viewsuratmasuk"?> method="post">
<div><br> Search <input type="text" name="cari" style="margin-left:50px;" >
<select name="tipe" style="margin-left:10px;">
	<option value="no_agenda_sm">no agenda</option>
    <option value="no_surat_masuk">no surat masuk</option>
    <option value="tgl_surat">tanggal surat</option>
    <option value="perihal">perihal</option>
    <option value="tujuan">tujuan</option>
    <option value="pengirim">pengirim</option>
    <option value="id_user">username</option>
</select>
<input type="submit" value="cari" style="margin-left:10px;width:80px;" /></div><br />
</form>

<?php
	$maxidx = 3;
	$hlm	= 1;
	if($_GET["page"]) $hlm=$_GET["page"];
	$idx = ($maxidx * $hlm)-$maxidx;
		
	include("commons/paging.php");
	$sql  = " select no_agenda_sm from surat_masuk ";
	$sql .=	" where flag = 1						";

	//echo $sql;
	$num_array = mysqli_query($conn,$sql);
	$total_records = mysqli_num_rows($num_array);
	doPages($maxidx, 'index.php?link=surat_masuk/viewsuratmasuk', '', $total_records);
?>


<?php
	$queryCount = mysqli_query($conn," select count(no_agenda_sm) from surat_masuk where flag = 1");
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
			$sql  = " select * from surat_masuk where flag = 1 ";
			$sql .=	" order by 	no_agenda_sm desc				";
			$sql .=	" limit $idx, $maxidx						";
			$queryTampil = mysqli_query($conn,$sql);
		}
		else
		{
			$sql  = " select * from surat_masuk where flag = 1 and $tipe like '%$cari%' ";
			$sql .=	" order by 	no_agenda_sm desc				 				    	 ";
			$sql .=	" limit $idx, $maxidx							 				     ";
			$queryTampil = mysqli_query($conn,$sql);
		}
	}
	
	while ($row = mysqli_fetch_array($queryTampil))
	{
		$id = $row[0];
?>

<div id="box" class="box2" style="border:solid; width:600px; border-width:thin; clear:both;" align="left">
<table width="593" cellspacing="10">
<tr><td width="100">No.Agenda </td><td width="481">: <?php echo $row['no_agenda_sm']; ?></td></tr>
<tr><td>No.Surat </td><td>: <?php echo $row['no_surat_masuk']; ?></td></tr>
<tr><td>Tgl.Surat </td><td>: <?php echo date('d M Y',strtotime($row['tgl_surat'])); ?></td></tr>
<tr><td>Perihal </td><td>: <?php echo $row['perihal'];?></p></td></tr>
<tr><td>Pengirim </td><td>: <?php echo $row['pengirim'];?></p></td></tr>
<tr><td>Attachment </td><td>: <a href="../file/surat_masuk/<?php echo $row['attachment'];?>"><?php echo $row['attachment'];?></a></td></tr>
</table>
<p align="right"><a href="<?php echo "http://localhost:81/tnde/index.php?link=surat_masuk/detailsuratmasuk&id="?><?php echo $id ?>"><img src="image/view.gif" /></a></p>
</div><!-- BOX -->
<?php
	}
	
	doPages($maxidx, 'index.php?link=surat_masuk/viewsuratmasuk', '', $total_records);
?>
</div> <!-- end of Panel Left -->

<!--PanelRight -->
<!--<div id="Panelright" style="width:170px;float:right; border-style:solid; border-width:thin; margin-top:50px; text-align:center;" align="center">
<div style="background-color:#000; color:#FFF;">Operations</div>
<div id="pilihan"><a href="index.php?link=Surat_Masuk/inputSuratMasuk">Create Surat Masuk</a></div>
<div id="pilihan"><a href="index.php?link=Surat_Masuk/manageSuratMasuk">Manage Surat Masuk</a></div>-->

</div> 
<!--PanelRight -->
