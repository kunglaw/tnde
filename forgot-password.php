<div style="width:800px;text-align:justify; margin-left:0px;" align="left" >

<div id="panelLeft" style="float:left;"><!--panel Left -->
<h2> Forgot Passsword </h2>
<br />

<form action="#" method="post">
<fieldset>
<legend> <strong>detail personal</strong> </legend>

<table width="500" border="0" cellspacing="10" cellpadding="0">
  <tr>
    <td width="160">Username</td>
    <td width="310"><input type="text" name="username" /></td>
  </tr>
  <tr>
    <td>Tanggal Lahir</td>
    <td>
     <select name="tglL">
        <option value="" selected="selected">Tanggal</option>
        <?php
            for($i = 1; $i < 32; $i++)
            {
        ?>
        <option value="<?php echo $i ?>"><?php echo $i ?></option>
        <?php
            }
        ?>
    </select>
     <?php echo "&nbsp;" ?>
    <select name="bulanL">
        <option value="" selected="selected">Bulan</option>
        <?php
            for($i = 1; $i < 13; $i++)
            {
        ?>
        <option value="<?php echo $i ?>"><?php echo $i ?></option>
        <?php
            }
        ?>
    </select>
     <?php echo "&nbsp;" ?>
    <select name="tahunL">
        <option value="" selected="selected">Tahun</option>
        <?php
            for($i = 1990; $i < 2002; $i++)
            {
        ?>
        <option value="<?php echo $i ?>"><?php echo $i ?></option>
        <?php
            }
        ?>
    </select>
    
    </td>
  </tr>
</table>



</fieldset>
<br>
<fieldset>
<legend> <strong>Pertanyaan password </strong> </legend>

<table width="500" border="0" cellspacing="10" cellpadding="0">
  <tr>
    <td width="160">Pertanyaan pertama</td>
    <td width="310"><input type="text" value="" name="ppert"></td>
  </tr>
  <tr>
    <td width="160">Jawaban pertama</td>
    <td width="310"><input type="text" value="" name="jpert"></td>
  </tr>
  <tr>
    <td>Pertanyaan kedua </td>
    <td><input type="text" value="" name="pkedua"></td>
  </tr>
  <tr>
    <td width="160">Jawaban pertama</td>
    <td width="310"><input type="text" value="" name="jkedua"></td>
  </tr>
</table>


</fieldset>
<br />
<div align="center" style="width:500px;">
    <input type="submit" id="button" value="submit" />&nbsp;
    <input type="button" id="button" value="reset" onclick="reset()"/>
</div>
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

