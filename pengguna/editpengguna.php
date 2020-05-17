<div id="tampung" style="width:800px;text-align:justify; margin-left:0px;" align="left" >

<div style="float:left;" id="Paneleft">

<h2> Update User </h2>

<?php  echo "<br>" ?>
<form action="../proses/acteditpengguna.php" method="post">
<fieldset>
<legend><b>Ubah Password</b></legend>
<table width="800" border="0" cellspacing="20" cellpadding="0">
  <tr>
    <td width="168">Username</td>
    <td width="572"><input name="username" type="text" readonly="readonly" value="<?php echo $_SESSION['user']?>"/></td>
  </tr>
  <tr>
    <td>Password Lama</td>
    <td><input type="password" name="password_lama"  /></td>
  </tr>
   <tr>
    <td>Password Baru</td>
    <td><input type="password" name="password_baru"  /><br /></td>
  </tr>
  <tr>
    <td>Ulangi Password Baru</td>
    <td><input type="password" name="password_baru2"  /><br /></td>
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
<div id="pilihan"><a href="index.php?link=Pengguna/viewUser">List User</a></div>
<div id="pilihan"><a href="index.php?link=Pengguna/ManageUser">Manage User</a></div>



</div>Panelright -->


</div>