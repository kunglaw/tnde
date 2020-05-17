<div id="tampung" style="width:800px;text-align:justify; margin-left:0px;" align="left" >

<div style="float:left;" id="Paneleft">

<h2> Manage Surat Masuk </h2>

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
	doPages($maxidx, 'index.php?link=surat_masuk/managesuratmasuk', '', $total_records);
?>

<br>
<?php
	
	$sqlCount = mysqli_query($conn,"select count(no_agenda_sm) from surat_masuk");
	$pasang = mysqli_fetch_array($sqlCount);

if($pasang[0] == 0)
{
?>
	<div align="center" style="background-color:#F03346;width:auto; height:30px;"> <h3>Data Tidak Ditemukan</h3> </div>
<?php
}
else
{
	
?>
<table width="600" border="1" cellspacing="0" cellpadding="0" style="text-indent:10px;">
  <tr>
    <th width="98">No Agenda</td>
    <th width="133">No Surat</td>
    <th width="102">Tgl Surat</td>
    <th width="132">Pengirim</td>
    <th width="123">action</td>
  </tr>
  <?php
  	
	$sql  = " select * from surat_masuk where flag = 1 	";
	$sql .=	" order by 	no_agenda_sm desc				";
	$sql .=	" limit $idx, $maxidx						";
	$query = mysqli_query($conn,$sql);
	
	while($row = mysqli_fetch_array($query))
	{		
  ?>
  <tr>
    <td><?php echo $row['no_agenda_sm'] ?></td>
    <td><?php echo $row['no_surat_masuk'] ?></td>
    <td><?php echo $row['tgl_surat'] ?></td>
    <td><?php echo $row['pengirim'] ?></td>
    <td>
    	<a href="../index.php?link=surat_masuk/detailsuratmasuk&id=<?php echo $row[0] ?>" title="View"><img src="../image/view.png"></a>
    	<a href="../index.php?link=surat_masuk/updatesuratmasuk&id=<?php echo $row[0] ?>" title="Update" style="margin-left:5px;"><img src="../image/update.png"></a></td>
  </tr>
  <?php
	}
	
	
  ?>
  
</table>
<?php
}

doPages($maxidx, 'index.php?link=surat_masuk/managesuratmasuk', '', $total_records);
?>
<br>


</div>

<!--<div id="Panelright" style="width:170px; border-style:solid; border-width:thin;text-align:center; margin-bottom:100px; float:right; margin-top:49px;" align="center">
<div style="background-color:#000; color:#FFF;">Operations</div>
<div id="pilihan"><a href="index.php?link=Surat_Masuk/viewSuratMasuk">List Surat Masuk</a></div>
<div id="pilihan"><a href="index.php?link=Surat_Masuk/inputSuratMasuk">Create Surat Masuk</a></div>

</div>Panelright -->


</div>