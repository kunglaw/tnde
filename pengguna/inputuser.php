<div id="tampung" style="width:800px;text-align:justify; margin-left:0px;" align="left" >

<div style="float:left;" id="Paneleft">

<h2> Create User </h2>

<?php  echo "<br>" ?>

<form action="../proses/actpengguna.php" method="post">
<fieldset style="margin-bottom:30px;">
<table height="240" style="margin-left:20px; width:500px; ">
<tr>
<td height="60">Username<br>
<input name="username" type="text" size="50" maxlength="50">
</td>
</tr>

<tr>
<td height="60">
Password<br>
<input name="password" type="text" size="50" maxlength="50" value="guest">
</td>
</tr>

<tr>
<td height="60">
nama<br>
<input name="nama" type="text" size="50" maxlength="50">
</td>
</tr>

<tr>
<td height="60">
Jenis Kelamin<br>
<input type="radio" value="Pria" name="JK" />Pria
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="radio" value="Wanita" name="JK" />Wanita
</td>
</tr>

<tr>
<td height="60">
Alamat<br>
<textarea name="alamat" cols="45" type="text"></textarea>
</td>
</tr>

<tr>
<td height="60">
email<br>
<input name="email" type="text" size="50" maxlength="50">
</td>
</tr>

<tr>
<td height="60">
No Telp<br>
<input name="no_telp" type="text" size="50" maxlength="50">
</td>
</tr>

<tr>
<td height="60">
Jabatan<br>
<input name="jabatan" type="text" size="50" maxlength="50">
</td>
</tr>

<tr>
<td height="60">
Privilege<br>
<select name="privilege">
  <option value="Operator" style="width:200px">Operator</option>
  <option value="Admin">Admin</option>
  <option value="Pimpinan">Pimpinan</option>
</select>
</td>
</tr>

<tr>
<td height="60">
<input type="submit" value="Submit" id="button"/><?php echo "&nbsp;&nbsp;" ?>
<input type="button" value="reset" id="button" onclick="reset()"/>
<br>
</td>
</tr>

</table>
</fieldset>
</form>

<!--
</div>

<div id="Panelright" style="width:170px; border-style:solid; border-width:thin;text-align:center; margin-bottom:100px; float:right; margin-top:49px;" align="center">
<div style="background-color:#000; color:#FFF;">Operations</div>
<div id="pilihan"><a href="index.php?link=Pengguna/viewUser">List User</a></div>
<div id="pilihan"><a href="index.php?link=Pengguna/ManageUser">Manage User</a></div>



</div>Panelright -->


</div>