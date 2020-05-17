<div style="width:800px;text-align:justify; margin-left:0px;" align="left" >

<div id="panelLeft" style="float:left;"><!--panel Left -->
<h2> Laporan Surat Keluar </h2>
<br />

<form action="../index.php" method="get">
<fieldset>
<!-- <legend> <strong>Periode Laporan</strong> </legend> -->
<input type="hidden" name="link" value="surat_keluar/view_lsk" />
<table cellpadding="10" cellspacing="10" width="800" class="laporan">
<tr><td colspan="2"><p style="color:#F00"> * Klik Textbox untuk memilih tanggal laporan </p></td></tr>
<tr>
<td>Tanggal Awal</td>
<td> 
<input type="text" name="awal"  class="tanggal"/>
</td>
</tr>
<tr>
<td>Tanggal Akhir</td>
<td> 
<input type="text" name="akhir" class="tanggal"/>
</td>
</tr>
</table>
<br />
<div align="center" style="width:800px;">
    <input type="submit" id="button" value="view" />&nbsp;
    <input type="button" id="button" value="reset" onclick="reset()"/>
</div>
<br />
</fieldset>
</form>
<br />
</div>

<!-- PanelLeft
<div id="Panelright" style="width:170px;float:right; border-style:solid; border-width:thin; margin-top:50px; text-align:center;" align="center">
<div style="background-color:#000; color:#FFF;">Operations</div>
<div id="pilihan"><a href="index.php?link=Pengguna/inputUser">Create User</a></div>
<div id="pilihan"><a href="index.php?link=Pengguna/ManageUser">Manage User</a></div>

</div>Panelright -->

</div>

