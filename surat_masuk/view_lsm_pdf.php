<div id="lsm">
<?php
	include("../commons/koneksi.php");
	$tgl_awal = $_GET['awal'];
	$tgl_akhir = $_GET['akhir'];
	
	if($_GET["print"])
	{
		echo"<script>window.print()</script>";
	}
?>
<fieldset style="width:800px;">
<h2> Laporan Surat Masuk </h2>
<h4> Periode <?php print date("d M Y",strtotime($tgl_awal))." - ".date("d M Y",strtotime($tgl_akhir)) ?></h4>
<hr width="800" style="border-style:ridge"/>
<br />
<p style="margin-right:50px;" align="right"><?php $skrg = date("d M Y",time());print $skrg;?></p><br />
<table width="700" border="1" cellspacing="0" cellpadding="0" style="text-indent:10px;">
  <tr>
    <th scope="col"> no agenda </th>
    <th scope="col"> no surat </th>
    <th scope="col"> kepada </th>
    <th scope="col"> tanggal </th>
    <th scope="col"> perihal </th>
    <th scope="col"> ket. pemohon </th>
  </tr>
  <?php 
  	
	$q = mysqli_query($conn," select * from surat_masuk where flag = 1  and tgl_surat between '$tgl_awal' and '$tgl_akhir' ");
	
	while($row = mysqli_fetch_array($q))
	{	
  ?>
  <tr>
    <td><?php print $row['no_agenda_sm']; ?></td>
    <td><?php print $row['no_surat_masuk'];?></td>
    <td><?php print $row['tujuan'];?></td>
    <td><?php print $row['tgl_surat'];?></td>
    <td><?php print $row['perihal'];?></td>
    <td><?php print $row['pengirim'];?></td>
  </tr>
  <?php
	}
  ?>
</table>

<br />
</fieldset>


</div>