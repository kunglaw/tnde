<div style="width:800px;text-align:justify; margin-left:0px;" align="left" >
<div id="panelLeft" style="float:left;">
<h2> Log Surat Masuk </h2>

<form action=<?php echo "index.php?link=surat_masuk/v_logsm"?> method="post">
<div><br> Search <input type="text" name="cari" style="margin-left:50px;" >
<select name="tipe" style="margin-left:10px;">
	<option value="kd_log_sm">kode log</option>
    <option value="username">username</option>
    <option value="tgl_update">tanggal update</option>
    <option value="no_agenda_sm">no agenda</option>
    <option value="no_surat_masuk">no surat</option>
    <option value="ip_address">ip address</option>
    <option value="aktifitas">aktifitas</option>
</select>
<input type="submit" value="cari" style="margin-left:10px;width:80px;" /></div><br />
</form>

<?php
	$maxidx = 15;
	$hlm	= 1;
	if($_GET["page"]) $hlm=$_GET["page"];
	$idx = ($maxidx * $hlm)-$maxidx;
		
	include("commons/paging.php");
	$sql  = " select kd_log_sm from log_sm ";

	//echo $sql;
	$num_array = mysqli_query($conn,$sql);
	$total_records = mysqli_num_rows($num_array);
	doPages($maxidx, 'index.php?link=surat_masuk/v_logsm', '', $total_records);
	
?>

<table width="800" border="1" style="border-collapse:collapse; padding:7px;">
  <tr>
    <th scope="col">kode log</th>
    <th scope="col">username</th>
    <th scope="col">tanggal update</th>
    <th scope="col">no agenda</th>
    <th scope="col">no surat</th>
    <th scope="col">ip address </th>
    <th scope="col">aktifitas</th>
  </tr>
  <?php
	$queryCount = mysqli_query($conn," select count(kd_log_sm) from log_sm ");
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
			$sql  = " select * from log_sm 						";
			$sql .=	" order by 	kd_log_sm desc					";
			$sql .=	" limit $idx, $maxidx						";
			$queryTampil = mysqli_query($conn,$sql);
		}
		else
		{
			$sql  = " select * from log_sm where $tipe = '$cari' ";
			$sql .=	" order by kd_log_sm desc					      ";
			$sql .=	" limit $idx, $maxidx						      ";
			$queryTampil = mysqli_query($conn,$sql);
		}
	}
  ?>
  <?php
  	
	while ($row = mysqli_fetch_array($queryTampil))
	{	
  ?>
  <tr>
    <td><?php echo $row['kd_log_sm']; ?></td>
    <td><?php echo $row['username']; ?></td>
    <td><?php echo $row['tgl_update']; ?></td>
    <td><?php echo $row['no_agenda_sm']; ?></td>
    <td><?php echo $row['no_surat_masuk']; ?></td>
    <td><?php echo $row['ip_address']; ?></td>
    <td><?php echo $row['aktifitas']; ?></td>
  </tr>
  <?php
	}
	
	
  ?>
</table>
<?php
	
	doPages($maxidx, 'index.php?link=surat_masuk/v_logsm', '', $total_records);
?>

</div> <!-- end of Panel Left -->

</div> 
<!--PanelRight -->