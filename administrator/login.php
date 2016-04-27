<?php
	session_start();
	if(isset($_SESSION['admin_username'])){
		echo "<script type='text/javascript'>window.open('jobs.php','_self')</script>";
	}


		require_once("support/dbConn.php");
		require_once("support/loader.php");
		$database=new Database();
		
		$db =& $database;		
		$loader1=new loader1();


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Kasagana-ka</title>
<meta name="keywords" content="green jelly, full post, blog, theme, free templates, templatemo, CSS, HTML" />
<meta name="description" content="Green Jelly, Full Blog Post, free CSS template by templatemo.com" />
	
<link href="../css/templatemo_style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="../css/nivo-slider.css" type="text/css" media="screen" />




<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>

<link rel="stylesheet" type="text/css" href="../css/ddsmoothmenu.css" />

<!-- <script type="text/javascript" src="js/jquery.min.js"></script> -->
<script src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "templatemo_menu", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>


<!-- *************************************************************8888 -->
<style type="text/css">
	.scrollup{
		width:64px;
		height:64px;			
		text-indent:-9999px;
		opacity:0.5;
		position:fixed;
		bottom:50px;
		right:100px;
		display:none;			
		background: url('../icon_top.png') no-repeat;
}
</style>
<!-- ****************************************************************** -->

<script type="text/javascript">
			$(document).ready(function(){ 
			
			$(window).scroll(function(){
				if ($(this).scrollTop() > 100) {
					$('.scrollup').fadeIn();
				} else {
					$('.scrollup').fadeOut();
				}
			}); 
			
			$('.scrollup').click(function(){
				$("html, body").animate({ scrollTop: 0 }, 600);
				return false;
			});
 
		});
		</script>

<!-- ********************************************************************* -->
<!-- *****************************fancy box*************************** -->
 <script type="text/javascript" src="fancybox/jquery-1.10.1.min.js"></script>  

<script type="text/javascript" src="fancybox/jquery.fancybox.js?v=2.1.5"></script>
<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox.css?v=2.1.5" media="screen" />
<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox-buttons.css?v=1.0.5" />
<script type="text/javascript" src="fancybox/jquery.fancybox-buttons.js?v=1.0.5"></script>
<script type="text/javascript">
$(document).ready(function() {
	$(".fancybox").fancybox();
});
</script>	
<script type="text/javascript">
	function bckWeb(){
	window.open('../index.php','_self')
	}

</script>
</head>
<body>

<div id="templatemo_wrapper">
	
	
	<div id="templatemo_header">
     <div class="cleaner"></div>
    </div> <!-- end of header -->
    
    <div id="templatemo_main">
    	<form name="frmLogin" action="support/crud1.php" method="post">
    			<div align="center" style="padding-bottom:150px;padding-top:100px">
    			
		        <table style="border:thin black solid;width:300px">
		        	<tr bgcolor="#9dcf56"><th colspan="3" style="border-bottom:thin black solid;padding-bottom:10px;padding-top:10px">Web Master Login</th></tr>
		        	<tr ><td style="padding-top:15px">User Name</td><td style="padding-top:15px">:</td><td style="padding-top:15px">
							<input type="text" name="txtUname" id="txtUname" style="width: 191px"></td></tr>
		        	<tr><td style="padding-top:15px;padding-bottom:10px">Password</td><td style="padding-top:15px;padding-bottom:10px">:</td><td style="padding-top:15px;padding-bottom:10px">
							<input type="password" name="txtPw" id="txtPw" style="width: 192px"></td></tr>
		        	<tr><td colspan="3" align="right"><input name="btnLogIn" id="btnLogIn" type="submit" value="Login"><input type="button" onclick="bckWeb()"  value="Back to Web"></td></tr>
		        </table>
		        </div>
        <div class="cleaner h30"></div>
		</form>
    </div> <!-- end of main -->
    <a  class="scrollup" style="display: none;">Scroll</a>
     <!-- end of footer -->
</div>
<div id="templatemo_cr_bar_wrapper">
	<div id="templatemo_cr_bar">
    	Copyright © 2014 <a href="#"> Kasagana-ka Development Center,Inc.</a>
    </div>
</div>


<script type='text/javascript' src='../js/logging.js'></script>
</body>
</html>