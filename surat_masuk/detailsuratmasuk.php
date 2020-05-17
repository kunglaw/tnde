<div class="marginLeft">
<script language="javascript">
<?php
	
	$id = $_GET['id'];
	$sqlAtas = mysqli_query($conn," select * from surat_masuk where no_agenda_sm = $id and flag = 1");
	$rowAtas = mysqli_fetch_array($sqlAtas);
	
?>
function confirmDelSm(delSm) {
  if (confirm("Anda Yakin ingin Hapus Surat Masuk Ini ? ")) {
    document.location = "../proses/deletesuratmasuk.php?&id=<?php echo $id?>&no_surat=<?php echo $rowAtas['no_surat_masuk']?>";
	// ../Proses/Logout.php
  }
}
</script>

<?php
	$a = "";
	$b = "";
	
	if($_SESSION['akses'] != "Operator")
	{
		$a = "<!--";
		$b = "-->";
	}
	
	echo $a;
?>
<div id="Panelright" style="width:170px; border-style:solid; border-width:thin;text-align:center; float:right; margin-right:100px; margin-top:60px" align="center">
<div style="background-color:#000; color:#FFF;">Operations</div>

<div id="pilihan"><a href=<?php echo "index.php?link=surat_masuk/updatesuratmasuk&id=$id" ?>>Update Surat Masuk</a></div>
<div id="pilihan"><a href="javascript:confirmDelSm('delSm.page')">Delete Surat Masuk</a></div>
</div>
<?php
	echo $b;
?>

<div id="kotak" style="border:solid; width:650px;margin-left:30px; border-width:1px;">
<?php
	
	$id = $_GET['id'];
	$sql = mysqli_query($conn," select * from surat_masuk where no_agenda_sm = $id and flag = 1");
	$row = mysqli_fetch_array($sql);
	
?>
<div id="head" style="float:right; margin-right:50px; ">
    	
        <p><h2> Surat Masuk </h2></p>
        
<table width="600" border="0" cellspacing="5" cellpadding="0" style="margin-top:10px;margin-bottom:10px;text-indent:10px;">
        <tr>
          <td colspan="2"><h3 style="color:#03F">Header</h3><hr width="500"><br></td>
        </tr>
        <tr>
          <td width="113"><strong>No. Agenda</strong></td>
          <td width="472">: <?php echo $row['no_agenda_sm']; ?>
          </td>
        </tr>
        <tr>
          <td><strong>No. Surat</strong></td>
          <td>: <?php echo $row['no_surat_masuk']; ?>
          </td>
        </tr>
        <tr>
          <td><strong>Tujuan</strong></td>
          <td>: <?php echo $row['tujuan']; ?></td>
        </tr>
        <tr>
          <td><strong>Pengirim</strong></td>
          <td>: <?php echo $row['pengirim']; ?></td>
        </tr>
    </table>

    </div>
    <div id="tanggal" style="clear:both;margin-right:60px;">
      <table width="600" border="0" cellspacing="5" cellpadding="" style="margin-top:20px;margin-bottom:20px;text-indent:10px">
        <tr>
          <td colspan="2"><h3 style="color:#03F">Tanggal</h3><hr width="500"><br></td>
        </tr>
        <tr>
          <td width="133"><strong>Tanggal Surat</strong></td>
          <td width="452">: <?php echo date('d M Y',strtotime($row['tgl_surat'])); ?></td>
        </tr>
    </table>

    </div>
    
    <div id="isi_surat" style="margin-right:60px;">
<table width="600" border="0" cellspacing="5" cellpadding="0" style="margin-top:10px;margin-bottom:10px;text-indent:10px">
        <tr>
          <td colspan="2"><h3 style="color:#03F">Isi Surat</h3><hr width="500"><br></td>
        </tr>
        <tr>
          <td width="93"><strong>Perihal</strong></td>
          <td width="412">: <?php echo $row['perihal']; ?> <br></td>
        </tr>
        
        <tr>
          <td colspan="2"><strong>Ringkasan</strong> : <br>
          <div style="margin-left:20px; text-align:justify">
          <?php echo $row['ringkasan']; ?>
            </div><br> 
          </td>
        </tr>
        <!--
        <tr>
          <td colspan="2"><strong>Isi Surat</strong> : <br>
          <div style="margin-left:20px; text-align:justify">
		  <?php echo $row['tgl_diterima']; ?>
            </div><br>      
          
          </td>
        </tr>
        -->
        <tr>
          <td colspan="2"><strong>Catatan</strong> :</td>
        </tr>
        <tr>
        	<td colspan="2">
            <div style="margin-left:20px; text-align:justify">
			<?php echo $row['catatan']; ?>
            </div><br>      
            </td>
        </tr>
        <tr>
          <td><strong>Attachment</strong></td>
          <td>: <a href="../File/Surat_Masuk/<?php echo $row['attachment']; ?>" title="download">
		  <?php echo $row['attachment']; ?></a></td></td>
        </tr>
    </table>
    </div>
    
    <div id="detail" style="margin-right:60px;">
    <table width="600" border="0" cellspacing="5" cellpadding="" style="margin-top:20px;margin-bottom:20px;text-indent:10px">
        <tr>
          <td colspan="2"><h3 style="color:#03F">Info Akses</h3><hr width="500"><br></td>
        </tr>
        <tr>
          <td width="125"><strong>Username</strong></td>
          <td width="460">: <?php echo $row['id_user']; ?></td>
        </tr>
        <tr>
          <td><strong>Tanggal Update</strong></td>
          <td>:  
		  <?php echo date('d M Y',strtotime($row['tgl_update'])); ?>
          </td>
        </tr>
       
    </table>
    </div>
	
   <form action=<?php echo "../index.php?link=surat_masuk/viewsuratmasuk"?> method="post">
    <input type="submit" value="Kembali" id="button"/>
    </form>
    <br />
    </div>
</div>