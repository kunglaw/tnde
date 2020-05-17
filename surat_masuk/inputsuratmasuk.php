<div id="tampung" style="width:800px;text-align:justify; margin-left:0px;" align="left" >

<div style="float:left;" id="Paneleft">

<h2> Create Surat Masuk </h2>

<?php  echo "<br>" ?>

<form action="../proses/actsuratmasuk.php" method="post" enctype="multipart/form-data" name="sm">

<fieldset>
<legend> <h4>Header Surat</h4> </legend>
<table width="700" style="text-indent:30px;" border="0" cellspacing="10">
<tr>
	<td>No Agenda</td>
    <?php
			
			$max_agenda = mysqli_query($conn," select max(no_agenda_sm) from surat_masuk ");
			$max_agenda2 = mysqli_fetch_array($max_agenda);
					
	?>
    <td><input name="no_agenda" type="text" readonly="readonly" value="<?php echo $max_agenda2[0]+1?>"/></td>
    <td>Tujuan</td>
    <td>
    <select name="tujuan" onchange="getnsm()">
    	<option value="Umum(Ketua)">Umum(Ketua)</option>
        <option value="Umum(sekjen)">Umum(sekjen)</option>
        <option value="Perencanaan">Perencanaan</option>
        <option value="Teknis + Humas">Teknis + Humas</option>
        <option value="Dislog">Dislog</option>
        <option value="Inspektorat">Inspektorat</option>
        <option value="Hukum">Hukum</option>
        <option value="Keuangan">Keuangan</option>
        <option value="SDM">SDM</option>
    </select>
    </td> 
</tr>
<tr>
	<td>Tanggal Surat</td>
    <td>
    <input type="text" class="tanggal" name="tanggal_surat" onchange="getnsm()" required/>
    </td>
    <td>
   		Pengirim
    </td>
    <td><input type="text" name="pengirim" required /></td>
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
<table width="700" style="text-indent:30px;" border="0" cellspacing="10">
<tr>
	<td>Perihal</td>
    <td><input type="text" name="perihal" /></td>
    <td>Status</td>
    <td><input type="text" name="status" /></td> 
</tr>
<tr>
	<td>Sifat</td>
    <td>
    	<input type="text" name="sifat" />
    </td>
    <td>Lampiran</td>
    <td><input type="text" name="lampiran"/></td>
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
    <td colspan="3"><textarea name="ringkasan" cols="50" rows="5"></textarea></td>
</tr>

</table>
</fieldset>
<br />
<fieldset>
	<legend><h4>Detail akses</h4></legend>
    <table width="350" style="text-indent:30px;" border="0" cellspacing="10">
    <tr>
	<td>Username</td>
    <td><input type="text" name="username" readonly="readonly" value="<?php echo $_SESSION['user']?>"/></td>
    </tr>
    <tr>
    <td>Tgl Update</td>
    <td><input type="text" name="tgl_update" readonly="readonly" value="<?php echo date('d M Y')?>"/></td> 
	</tr>
    </table>
</fieldset>
<br />
<div align="center" style="width:700px;">
    <input type="submit" id="button" value="submit" />&nbsp;
    <input type="button" id="button" value="reset" onclick="reset()"/>
</div>
</form>

<br />
</div>


<!--
<div id="Panelright" style="width:170px; border-style:solid; border-width:thin;text-align:center; margin-bottom:100px; float:right; margin-top:49px;" align="center">
<div style="background-color:#000; color:#FFF;">Operations</div>
<div id="pilihan"><a href="index.php?link=Surat_Masuk/viewSuratMasuk">List Surat Masuk</a></div>
<div id="pilihan"><a href="index.php?link=Surat_Masuk/ManageSuratMasuk">Manage Surat Masuk</a></div>



</div>Panelright -->


</div>