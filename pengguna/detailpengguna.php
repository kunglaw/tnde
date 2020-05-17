<div id="tampung" style="width:800px;text-align:justify; margin-left:0px;" align="left" >

<script language="javascript">
<?php
	
	$id = $_GET['id'];
	$sqlAtas = mysqli_query($conn," select * from personal where id_user = $id and flag = 1");
	$rowAtas = mysqli_fetch_array($sqlAtas);
	
?>
function confirmDelP(delP) 
{
  if (confirm("Anda Yakin ingin menghapus User ini ? ")) 
  {
    document.location = "../proses/deletepengguna.php?&id=<?php echo $id?>&username=<?php echo $rowAtas['username'];?>";
  }
}

</script>

<div style="float:left;" id="Paneleft">

<h2> Detail User </h2>

<?php
	
	echo "<br>";
	
	//$id = $_GET['id'];
	
	$query = mysqli_query($conn," select * from personal where id_user=$id");
	
	while($row = mysqli_fetch_array($query))
	{

?>

<table width="600" border="1" cellspacing="0" cellpadding="0" style="text-indent:15px;">
  <tr>
    <td width="250">ID</td>
    <td width="344"><?php echo $row[0] ?><input name="id" type="hidden" value="<?php echo $row[0] ?>" /></td>
  </tr>
  <tr>
    <td>Username </td>
    <td><?php echo $row['username'] ?></td>
  </tr>
  <tr>
    <td>Nama</td>
    <td><?php echo $row['nama'] ?></td>
  </tr>
  <tr>
    <td>Jenis Kelamin</td>
    <td><?php echo $row['Jenis_Kelamin'] ?></td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td><?php echo $row['alamat'] ?></td>
  </tr>
  <tr>
    <td>Email</td>
    <td><?php echo $row['email'] ?></td>
  </tr>
  <tr>
    <td>No_Telp</td>
    <td><?php echo $row['no_telp'] ?></td>
  </tr>
  <tr>
    <td>Tanggal Daftar</td>
    <td><?php print date('d M Y',strtotime($row['tgl_daftar'])); ?></td>
  </tr>
  <tr>
  	<td>Jabatan</td>
    <td><?php echo $row['jabatan'] ?></td>
  </tr>
  <tr>
  	<td>Privilege</td>
    <td><?php echo $row['Privilege'] ?></td>
  </tr>
  
</table>


<?php
	}
?>

<br />

 <form action=<?php echo "../index.php?link=pengguna/viewuser"?> method="post">
 <center><input type="submit" value="Kembali" id="button"/></center>
 </form>

<br />

</div>

<!-- panel right -->
<div id="Panelright" style="width:170px; border-style:solid; border-width:thin;text-align:center; margin-bottom:100px; float:right; margin-top:49px;" align="center">
<div style="background-color:#000; color:#FFF;">Operations</div>
<div id="pilihan"><a href="javascript:confirmDelP('delP.page')">Delete User</a></div>
</div><!-- Panelright -->


</div><!-- tampung -->