<div id="tampung" style="width:800px;text-align:justify; margin-left:0px;" align="left" >

<div style="float:left;" id="Paneleft">

<h2> Update Surat Masuk </h2>
<?php 
	echo "<br>";
	$id = $_GET['id'];
	$tampil = mysqli_query($conn,"select * from surat_masuk where no_agenda_sm = $id");
	$tampil2 = mysqli_fetch_array($tampil);

?>
<form action="../proses/acteditsuratmasuk.php" method="post" enctype="multipart/form-data" name="sm">
<fieldset>
<legend> <h4>Header Surat</h4> </legend>
<table width="700" style="text-indent:30px;" border="0" cellspacing="10">
<tr>
	<td>No Agenda</td>
    <td><input type="text" readonly="readonly" name="no_agenda" value="<?php echo $tampil2['no_agenda_sm']; ?>"/>
    <input type="hidden" value="<?php echo $tampil2['no_agenda_sm']; ?>" name="id" />
    </td>
    <td>Tujuan</td>
    <td>
    <select name="tujuan" onchange="getnsm()">
    	<optgroup label="default">
    	<option value="<?php echo $tampil2['tujuan']; ?>"><?php echo $tampil2['tujuan']; ?></option>
        </optgroup>
        <optgroup label="pilhan baru">
    	<option value="Umum(Ketua)">Umum(Ketua)</option>
        <option value="Umum(sekjen)">Umum(sekjen)</option>
        <option value="Perencanaan">Perencanaan</option>
        <option value="Teknis + Humas">Teknis + Humas</option>
        <option value="Dislog">Dislog</option>
        <option value="Inspektorat">Inspektorat</option>
        <option value="Hukum">Hukum</option>
        <option value="Keuangan">Keuangan</option>
        <option value="SDM">SDM</option>
        </optgroup>
    </select>
    </td> 
</tr>
<tr>
	<td>Tanggal Surat</td>
    <td>
    <input type="text" class="tanggal" name="tanggal_surat" value="<?php echo $tampil2['tgl_surat']?>" onchange="getnsm()"/>
    </td>
    <td>
   		Pengirim
    </td>
    <td><input type="text" name="pengirim" required value="<?php echo $tampil2['pengirim']?>"/></td>
</tr>
<tr>
	<td>No Surat</td>
    <td><input type="text" name="no_surat" readonly="readonly" value="<?php echo $tampil2['no_surat_masuk']?>"/></td>
</tr>

</table>
</fieldset>
<br />
<fieldset>
<legend> <h4>Detail Surat</h4> </legend>
<table width="700" style="text-indent:30px;" border="0" cellspacing="10">
<tr>
	<td>Perihal</td>
    <td><input type="text" name="perihal" value="<?php echo $tampil2['perihal']?>"/></td>
    <td>Status</td>
    <td><input type="text" name="status" value="<?php echo $tampil2['status']?>"/></td> 
</tr>
<tr>
	<td>Sifat</td>
    <td>
    	<input type="text" name="sifat" value="<?php echo $tampil2['sifat']?>"/>
    </td>
    <td>Lampiran</td>
    <td><input type="text" name="lampiran" value="<?php echo $tampil2['lampiran']?>"/></td>
</tr>
<tr>
	<td>Attachment</td>
    <td><input type="text" name="attachment" value="<?php echo $tampil2['attachment']?>" readonly="readonly"/></td>
</tr>
<tr>
	<td>Catatan <br /></td>
    <td colspan="3"><textarea name="catatan" cols="50" rows="5"><?php echo $tampil2['catatan']?></textarea></td>
</tr>
<tr>
	<td>Ringkasan <br /></td>
    <td colspan="3"><textarea name="ringkasan" cols="50" rows="5"><?php echo $tampil2['ringkasan']?></textarea></td>
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