<div id="tampung" style="width:800px;text-align:justify; margin-left:0px;" align="left" >

<div style="float:left;" id="Paneleft">

<h2> Create Surat Keluar </h2>

<?php  
	echo "<br>";
	
?>
<form action="../proses/actsuratkeluar.php" method="post" enctype="multipart/form-data" name="sk">

<fieldset>
<legend> <h4>Header Surat</h4> </legend>
<table width="800" style="text-indent:30px;" border="0" cellspacing="10">
<tr>
	<td width="123">No Agenda</td>
    <td width="278">
    	<?php
			
			$max_agenda = mysqli_query($conn," select max(no_agenda_sk) from surat_keluar ");
			$max_agenda2 = mysqli_fetch_array($max_agenda);
					
		?>
    	<input type="text" readonly="readonly" name="no_agenda" value="<?php echo $max_agenda2[0]+1;?>"/>
        
    </td>
    <td width="86">Pengirim</td>
    <td width="255">
    <select name="pengirim" onchange="getnsk()">
    	<option value="Surat Keluar Ketua">Surat Keluar Ketua</option>
        <option value="Surat Keluar Sekjen">Surat Keluar Sekjen</option>
        <option value="Surat Sekjen">Surat Sekjen</option>
        <option value="Surat Keluar Ketua">Surat Keluar Ketua</option>
        <option value="Undangan">Undangan</option>
        <option value="Surat Tugas">Surat Tugas</option>
        <option value="Surat Perintah">Surat Perintah</option>
        <option value="Surat Keputusan Bersama(MOU)">Surat Keputusan Bersama(MOU)</option>
        <option value="Surat Keluar Pengaturan">Surat Keluar Pengaturan</option>
        <option value="Berita Acara">Berita Acara</option>
    </select>
    </td> 
</tr>
<tr>
	<td>Tanggal Surat</td>
    <td>
    <input type="text" class="tanggal" name="tanggal_surat" onchange="getnsk()" required/>
    </td>
    <td>
   		Tujuan
    </td>
    <td><input type="text" name="tujuan" required id="tujuan" /></td>
</tr>
<tr>
	<td>No Surat</td>
    <td><input name="no_surat" type="text" readonly="readonly" /></td>
</tr>

</table>
</fieldset>
<br />
<fieldset>
<legend> <h4>Detail Surat</h4> </legend>
<table width="800" style="text-indent:30px;" border="0" cellspacing="10">
<tr>
	<td>Perihal</td>
    <td><input type="text" name="perihal" id="perihal" /></td>
    <td>Status</td>
    <td><input type="text" name="status" id="status" /></td> 
</tr>
<tr>
	<td>Sifat</td>
    <td>
    	<input type="text" name="sifat" id="sifat" />
    </td>
    <td>Lampiran</td>
    <td><input type="text" name="lampiran" id="lampiran"/></td>
</tr>
<tr>
	<td>Attachment</td>
    <td><input type="file" name="attachment" required/></td>
</tr>
<tr>
	<td>Catatan <br /></td>
    <td colspan="3"><textarea name="catatan" cols="50" rows="5"></textarea></td>
</tr>
<tr>
	<td>Ringkasan <br /></td>
    <td colspan="3"><textarea name="ringkasan" cols="50" rows="5" id="ringkasan"></textarea></td>
</tr>

</table>
</fieldset>
<br />
<fieldset>
	<legend><h4>Detail akses</h4></legend>
    <table width="350" style="text-indent:30px;" border="0" cellspacing="10">
    <tr>
	<td width="117">Username</td>
    <td width="199"><input type="text" name="username" readonly="readonly" value="<?php echo $_SESSION['user']?>"/></td>
    </tr>
    <tr>
    <td>Tgl Update</td>
    <td><input type="text" name="tgl_update" readonly="readonly" value="<?php echo date('d M Y')?>"/></td> 
	</tr>
    </table>
</fieldset>
<br />
<div align="center" style="width:800px;">
    <input type="submit" id="button" value="submit" />&nbsp;
    <input type="button" id="button" value="reset" onclick="reset()"/>
</div>

<br />
</form>


</div>

<!--
<div id="Panelright" style="width:170px; border-style:solid; border-width:thin;text-align:center; margin-bottom:100px; float:right; margin-top:49px;" align="center">
<div style="background-color:#000; color:#FFF;">Operations</div>
<div id="pilihan"><a href="index.php?link=Surat_Keluar/viewSuratKeluar">List Surat Keluar</a></div>
<div id="pilihan"><a href="index.php?link=Surat_Keluar/ManageSuratKeluar">Manage Surat Keluar</a></div>



</div><!-- Panelright -->


</div>