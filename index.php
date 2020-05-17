<?php
	
	session_start();
	error_reporting(0);
	include "commons/koneksi.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href="style/font.css" rel="stylesheet"  />
<link href="style/operator.css" rel="stylesheet" /><!-- CSS untuk page Operator -->
<link href="image/Logo_kpu_kecil.gif" rel="shortcut icon" />

<!-- JQUery -->
<script type="text/javascript" src="jquery/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="jquery/plugin/jquery-ui/js/jquery-ui-1.8.11.custom.min.js"></script>
<script type="text/javascript" src="jquery/jquery.cycle.all.min.js"></script>
<link rel="stylesheet" type="text/css" href="jquery/plugin/jquery-ui/css/ui-lightness/jquery-ui-1.8.11.custom.css" />
<!-- batas Jquery -->

<script type="text/javascript" src="scripts/no_surat.js"></script>
<script type="application/javascript">
$(document).ready(
		function()
		{
			$(".tanggal").datepicker
			(
				{
					dateFormat : "yy-mm-dd",
					changeFormat : true,
					changeMonth : true,
					changeYear : true,
					yearRange: "-100:+0",
				}
			);
			
		}
	)
</script>
<script type="application/javascript">
$(document).ready(
	function()
	{
		$("#slideshow").cycle
			(
				{
					fx:'fadeZoom',
					speed: 1000,
					timeout: 5000,
					fit : 0	
				}
			);
	}
)
</script>

<style type="text/css">
.marginLeft
{
	margin-left:-270px;	
}

input[type="text"]:focus
{
	background-color:#9F9;	
}

input[type="password"]:focus
{
	background-color:#9F9;	
}

.laporan tr
{
	height:40px;	
}

#box .login:focus
{
	background-color:#FFC;
}

</style>

<script src="spryassets/sprymenubar.js" type="text/javascript"></script>
<script language="javascript">

function reset(){};

function toggle() 
{
	var ele = document.getElementById("toggleText");
	var text = document.getElementById("displayText");
	
	if(ele.style.display == "block")
	{
		ele.style.display = "none";
		text.innerHTML = "";
	}
	else 
	{
    	ele.style.display = "block";
		text.innerHTML = "hide";
  	}
} 

function confirmLogout(logout) {
  if (confirm("Anda Yakin ingin Logout ? ")) {
    document.location = "../proses/logout.php";
	// Proses/Logout.php
  }
}


</script>

<title>Tata Naskah Dinas Elektronik <?php echo "- ".$_SESSION['user']; ?></title>

<link href="spryassets/sprymenubarhorizontal.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="wrapper">


<div id="header">
<img src="image/Logo_kpu_kecil.gif" style="margin-left:50px; margin-right:30px;margin-top:20px;float:left"/>
<h2 style="position:relative; top: 49px;">TATA NASKAH DINAS ELEKTRONIK</h2>
</div><!-- end header -->

<div id="nav" >
  <?php
  	if($_SESSION['user'] != "" && $_SESSION['akses'] == "Operator")
	{
		include "operator.php";
	}
	else if($_SESSION['user'] != "" && $_SESSION['akses'] == "Admin")
	{
		include "admin.php";
	}
	else if($_SESSION['user'] != "" && $_SESSION['akses'] == "Pimpinan")
	{
		include "pimpinan.php";
	}
	else
	{
	?>
   <ul id="MenuBar1" class="MenuBarHorizontal">
      <li><a href="index.php?link=home">Home</a>      </li>
      <li><a href="index.php?link=login">Login</a></li>
      <li><a href="index.php?link=About">About</a></li>
   </ul>
   <?php
	}
	?>
</div><!-- end nav -->
<div style="margin-right:80px;margin-left:50px;width:889px;">
  <?php
  echo "<br>";
  if($_GET['pesan'] == "0cfc6f8de4e10536d8845bc880a1a554")
  {
  ?>
    <div id='toggleText' style="display: block; border:solid; border-width:thin; background-color:#F99;border-color:#FF5E5E;">
    <a id='displayText' href='javascript:toggle();'>Close</a>
    <h3 align="center"> anda telah Logout</h3>
    </div>
  <?php
  }
  else if($_GET['pesan'] == "e0218f71e16d6720861b7d437e98988d")
  {
  ?>
    <div id='toggleText' style="display: block; border:solid; border-width:thin; background-color:#F99;border-color:#FF5E5E;">
    <a id='displayText' href='javascript:toggle();'>Close</a>
    <h3 align="center"> username atau password salah </h3>
    </div>
  <?php
  }
  else if($_GET['pesan'] == "f207ad63636ddcdab072f16459be7c29")
  {
  ?>
    <div id='toggleText' style="display: block; border:solid; border-width:thin; background-color:#F99;border-color:#FF5E5E;">
    <a id='displayText' href='javascript:toggle();'>Close</a>
    <h3 align="center"> username atau password harus diisi </h3>
    </div>
  <?php
  }
  else if($_GET['pesan'] == "7aca888fd67a9b24a22710592963bc23")
  {
  ?>
    <div id='toggleText' style="display: block; border:solid; border-width:thin; background-color:#F99;border-color:#FF5E5E;">
    <a id='displayText' href='javascript:toggle();'>Close</a>
    <h3 align="center"> Harus Login Terlebih Dahulu </h3></div>
  <?php	
  }
  ?>
</div>
<div align="right" style="margin-right:50px;">
<?php
if($_SESSION['user'] != "")
{
	echo "Welcome , <b class='bold'>".$_SESSION['user']."</b><br>";
	echo "<b>".strtoupper($_SESSION['nama'])."</b><br>";
	echo $_SESSION['akses'];
}
?>
</div>
<div id="content" align="center">
<div id="left">
	<?php
    echo "<br>";
    if($_SESSION['user'] == "")
    {
		if($_GET['link'] == "home")
		{
        	include "home.php";
		}
		else if($_GET['link'] == "About")
		{
			include "About.php";	
		}
		else if($_GET['link'] == "login")
		{
			include "login.php";	
		}
		else if($_GET['link'] == "forgot-password")
		{
			include "forgot-password.php";	
		}
		else
		{
			include "home.php";	
		}
    }
	else
    {
        $page = $_GET['link'];
        $pageL = $page.".php";
        
        include "$pageL";
    }
    echo "<br>";
    ?>
</div><!-- end left -->


<br />
<div id="footer" align="center">

<?php
	echo "<br><br>";
?>
<hr id="garisFooter" align="center"/>
Copyright &copy; 2012 Komisi Pemilihan Umum <br />
Allright Reserved
<?php
	echo "<br><br>";
?>

</div><!-- end footer -->
</div><!-- end content -->
</div><!-- end wrapper -->


<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"spryassets/SpryMenuBarDownHover.gif", imgRight:"spryassets/sprymenubarrighthover.gif"});
</script>
</body>
</html>