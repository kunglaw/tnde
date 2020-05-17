<div id="blabla" style="width:800px;font-size:18px;" align="left">

<form name="masuk" action="proses/actionlogin.php" method="post">
	
  <div id="slideshow" style="float:left; width:300px; border:groove; margin-left:-40px; border-color:#CFC">
    <img src="image/pemilu-header-final.jpg" width="540" height="200" style="position:absolute; "/>
    <img src="image/cropped-header2.jpg" width="540" height="200" style="position:absolute; " />
    <img src="image/header1.jpg" width="540" height="200" style="position:absolute; " />
  </div>
  <div id="box" style="border:solid #0C0; width:300px; border-width:thin; background-color:#A5FEBB; margin-left:540px;" >
  <table height="178" width="373" cellpadding="10" cellspacing="5">
  	<tr>
    	<td colspan="2"><h2> LOGIN </h2>
       
        </td>
    </tr>
    <tr>
    	<td width="76" height="32">
        <?php echo "<BR>" ?>
        Username
        </td>
        <td width="225">
         <?php echo "<BR>" ?>
        <input name="username" type="text" required placeholder="username..." style="font-family:Georgia, 'Times New Roman', Times, serif" class="login"/>
        </td>
    </tr>
    	<td height="36">
       
        Password
        </td>
        <td><input name="password" type="password" required placeholder="password..." style="font-family:Georgia, 'Times New Roman', Times, serif" class="login"/>
        </td>
    <tr>
    	<td height="10" colspan="2" align="center"> 
        <!--<a href="index.php?link=forgot-password">Forgot Password</a>-->
        </td>
    </tr>
    <tr>
    	<td height="49" colspan="2" align="center"> 
        <input type="submit" value="Login" id="button"/> &nbsp;
    	<input type="button" value="Reset" id="button" onclick="reset()"/> 
        </td>
    </tr>
  </table>
  </div>
  <div id="pager"></div>

</form>
</div>