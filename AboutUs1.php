<?php
			
	require_once("support/crud.php");
	$loader=new loader;
	
	require_once("administrator/support/dbConn.php");
	$database=new Database();
	$db =& $database;		
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Kasagana-ka</title>
<meta name="keywords" content="green jelly, full post, blog, theme, free templates, templatemo, CSS, HTML" />
<meta name="description" content="Green Jelly, Full Blog Post, free CSS template by templatemo.com" />
<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />




<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>

<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

<!-- <script type="text/javascript" src="js/jquery.min.js"></script> -->
<script src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/ddsmoothmenu.js">

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
		background: url('icon_top.png') no-repeat;
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
</head>
<body>

<div id="templatemo_wrapper">
	<div id="templatemo_header">
     <div class="cleaner"></div>
    </div> <!-- end of header -->
     <?php
    	require_once("support/menu.php");
    ?><!-- end of menu -->
    
    <div id="templatemo_main">
		<div class="post_box" style="border:1px white solid"> 
        	<h2 align="center">About Us</h2>
        	
            <div id="history" class="col_b float_f" style="width:900px;padding-left:5px; border-bottom:thin black dashed ">
        		<p style="font-family:Arial, Helvetica, sans-serif;font-size:25px;color:black">History</p>
					<?php $loader->loader_history($db);?>
             
			</div>
			
			 <div id="vision" class="col_b float_f" style="width:900px;padding-left:5px; border-bottom:thin black dashed;margin-top:15px ">
			 
        			<table><tr><td><p style="font-family:Arial, Helvetica, sans-serif;font-size:25px;color:black;width:70px">Vision</p></td><td><p style="font-family:Arial, Helvetica, sans-serif;font-size:15px">(Tinatanaw)</p></td></tr></table>
			 		<?php $loader->loader_vision($db);?>
						<br class="cleaner" />
				
			</div>
			
			 <div id="mission" class="col_b float_f" style="width:900px;padding-left:5px; border-bottom:thin black dashed;margin-top:15px ">
			 
        				<table><tr><td><p style="font-family:Arial, Helvetica, sans-serif;font-size:25px;color:black;width:87px">Mission</p></td><td><p style="font-family:Arial, Helvetica, sans-serif;font-size:15px">(Gawain)</p></td></tr></table>
			         <?php $loader->loader_Mission($db);?>
						<br class="cleaner" />
	
			</div>

			<div id="strategy" class="col_b float_f" style="width:900px;padding-left:5px; border-bottom:thin black dashed;margin-top:15px ">
			 
						<table><tr><td><p style="font-family:Arial, Helvetica, sans-serif;font-size:25px;color:black;width:90px">Strategy</p></td><td><p style="font-family:Arial, Helvetica, sans-serif;font-size:15px">(Pamamaraan)</p></td></tr></table>
			           <?php $loader->loader_Strategy($db);?>
						<br class="cleaner" />
			</div>

			<div id="core_values" class="col_b float_f" style="width:900px;padding-left:5px; border-bottom:thin black dashed;margin-top:15px ">
			 
						<table><tr><td><p style="font-family:Arial, Helvetica, sans-serif;font-size:25px;color:black;width:140px">Core Values</p></td><td><p style="font-family:Arial, Helvetica, sans-serif;font-size:15px">(Pagpapahalaga)</p></td></tr></table>
			           <div style="float:left;width:440px; margin-left:1px"  >
				          <ul style=" font-family:Arial, Helvetica, sans-serif;font-size:25px">
				          	<li style=" margin-bottom:15px">Pagkamasipag</li>
				          	<li style=" margin-bottom:15px">Pagkamatapat</li>
				          	<li style=" margin-bottom:15px">Pagkamasikap</li>
				          	<li style=" margin-bottom:15px">Pagkamatulungin</li>
				          	<li style=" margin-bottom:15px">Pagkamaunawain</li>
				          	<li style=" margin-bottom:15px">Pagkamasinop</li>
				          
				          </ul>
			       		</div>
						<br class="cleaner" />
			</div>
			<div id="M.A.R.C.E.L.O" class="col_b float_f" style="width:900px;padding-left:5px; border-bottom:thin black dashed;margin-top:15px ">
			 
						<table><tr><td><p style="font-family:Arial, Helvetica, sans-serif;font-size:25px;color:black;width:170px">M.A.R.C.E.L.O</p></td><td><p style="font-family:Arial, Helvetica, sans-serif;font-size:15px">(Guiding Principal)</p></td></tr></table>
			           
			       		<?php $loader->loader_marcelo($db);?>
			       	
						<br class="cleaner" />
			</div>

			<div id="pangakosapagtataya" class="col_b float_f" style="width:900px;padding-left:5px; border-bottom:thin black dashed;margin-top:15px ">
			 
						<table><tr><td><p style="font-family:Arial, Helvetica, sans-serif;font-size:25px;color:black;width:255px">Pangako sa Pagtataya</p></td><td><p style="font-family:Arial, Helvetica, sans-serif;font-size:15px">(Pamamaraan)</p></td></tr></table>
			           <?php $loader->loader_Pangako($db);?>
						<br class="cleaner" />
			</div>
			
			
			
			<div id="recognation" class="col_b float_f" style="width:900px;padding-left:5px; border-bottom:thin black dashed;margin-top:15px ">
				<table><tr><td><p style="font-family:Arial, Helvetica, sans-serif;font-size:25px;color:black;">Certificates and Recognition</p></td></tr></table>
					 <ul id="recieve">
			            <li><a href="images/recognation/Certificate of Appreciation from MCPI.jpg" rel="lightbox[portfolio]"><img src="images/recognation/Certificate of Appreciation from MCPI.jpg" alt="Image 01" />Certificate of Appreciation</a></li>
			            <li><a href="images/recognation/Certificate of Appreciation.jpg" rel="lightbox[portfolio]"><img src="images/recognation/Certificate of Appreciation.jpg" alt="Image 02" />Certificate of Appreciation</a></li>
			            <li><a href="images/recognation/Certificate of Recognition (Philssa).jpg" rel="lightbox[portfolio]"><img src="images/recognation/Certificate of Recognition (Philssa).jpg" alt="Image 03" />Certificate of Recognation</a></li>
			            <li><a href="images/recognation/cpt(KDCI).jpg" rel="lightbox[portfolio]"><img src="images/recognation/cpt(KDCI).jpg" alt="Image 04" />Certificate of Pricing Transparency</a></li>
			        </ul>
				    <br class="cleaner" />
			</div>
			
			<div id="board" class="col_b float_f" style="width:900px;padding-left:5px; border-bottom:thin black dashed;margin-top:15px ">
					
						<table><tr><td><p style="font-family:Arial, Helvetica, sans-serif;font-size:25px;color:black;">Board of Trustees</p></td></tr></table>
						<?php $loader->BoardofTrustees($db);?>

						<br class="cleaner" />
			</div>
			<div id="Steering_Commitee" class="col_b float_f" style="width:900px;padding-left:5px; border-bottom:thin black dashed;margin-top:15px ">
			 
						<table><tr><td><p style="font-family:Arial, Helvetica, sans-serif;font-size:25px;color:black;">Steering Committee</p></td></tr></table>
						<?php $loader->steeringCommitee($db);?>
						<br class="cleaner" />
			</div>

			
			
			
        </div>
        
        <div class="cleaner h30"></div>
        
        
       
    </div> <!-- end of main -->
    <a  class="scrollup" style="display: none;">Scroll</a>
     <!-- end of footer -->
</div>
<div id="templatemo_cr_bar_wrapper">
	<div id="templatemo_cr_bar">
    	Copyright © 2014 <a href="#"> Kasagana-ka Development Center,Inc.</a>
    </div>
</div>


<script type='text/javascript' src='js/logging.js'></script>
</body>
</html>