<div id="tampung" style="width:800px;text-align:justify; margin-left:0px;" align="left" >

<div style="float:left;" id="Paneleft">

<h2> Manage User </h2>

<p>PAGE :</p>
<br />
<table width="600" border="1" cellspacing="0" cellpadding="0" style="text-indent:10px;">
  <tr>
    <td>ID</td>
    <td>Username</td>
    <td>Jenis Kelamin</td>
    <td>Nama</td>
    <td>action</td>
  </tr>
  <?php
  	
	$query = mysqli_query($conn," select * from personal ");
		
	while($row = mysqli_fetch_array($query))
	{
  ?>
  <tr>
    <td><?php echo $row['id_user'] ?></td>
    <td><?php echo $row['username'] ?></td>
    <td><?php echo $row['Jenis_Kelamin'] ?></td>
    <td><?php echo $row['nama'] ?></td>
    <td>
    <a href="../index.php?link=pengguna/detailpengguna&id=<?php echo $row[0] ?>" title="View"><img src="../image/view.png"></a>
    <a href="../index.php?link=pengguna/editpengguna&id=<?php echo $row[0] ?>" title="Update" style="margin-left:5px;"><img src="../Image/update.png"></a>
    </td>
  </tr>
  <?php
	}
  
  ?>
</table>

<br>


</div>

<!--
<div id="Panelright" style="width:170px; border-style:solid; border-width:thin;text-align:center; margin-bottom:100px; float:right; margin-top:49px;" align="center">
<div style="background-color:#000; color:#FFF;">Operations</div>
<div id="pilihan"><a href="index.php?link=Pengguna/viewUser">List User</a></div>
<div id="pilihan"><a href="index.php?link=Pengguna/inputUser">Create User</a></div>

</div>Panelright -->


</div>