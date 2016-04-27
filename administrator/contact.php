<?php

	require_once("support/crud.php");
	$loader=new loader;
	


?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Kasagana-ka</title>
<meta name="keywords" content="green jelly, theme, free templates, nivo image slider, website, templatemo, CSS, HTML" />
<meta name="description" content="Green Jelly Theme, free CSS template provided by templatemo.com" />
<link rel="stylesheet" href="css/stylemini.css">
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

<script type="text/javascript" src="../js/jquery.min.js"></script>
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
 
 <style type="text/css">
 	p{
	font-family:Arial, Helvetica, sans-serif;
	font-size:12px;
	color:#4e4f4e
}
           img.left {float: left;}
img.rightt {float: right;}

 
 </style>
 <!-- *************************************************************8888 -->
	<style type="text/css">
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
<!-- start of map -->

    <style>
      #map_canvas {
        width: 500px;
        height: 490px;
      }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script>
      function initialize() {
        var map_canvas = document.getElementById('map_canvas');
        var map_options = {
          center: new google.maps.LatLng(14.7063664, 121.0672385),
          zoom: 8,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var firstmap = new google.maps.Map(map_canvas, map_options)
        var point = new google.maps.LatLng(14.7063664, 121.0672385);
        var marker = new google.maps.Marker({
        	position:point,
        	map:firstmap,
        	title:'Head Office'
        })
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
  <!-- end of map -->
</head>
<body>

<div id="templatemo_wrapper">
<?php require_once("support/miniMenu.php")?>
	<div id="templatemo_header">
        
        <div class="cleaner"></div>
    </div> <!-- end of header -->
    <?php
    	require_once("support/menu.php");
    ?> <!-- end of menu -->
   <!--  <?php $loader->loadSlider(); ?>  -->
    <script type="text/javascript" src="../js/jquery-1.4.3.min.js"></script>
    <script type="text/javascript" src="../js/jquery.nivo.slider.js"></script>
    <script type="text/javascript">
	    $(window).load(function() {
	    $('#slider').nivoSlider();
	    });
    </script>
    
    <div id="templatemo_main">
    	<h2 style=" border-bottom:0.5px gray solid;" align="center">Contact Us</h2>
        <div class="col_5 float_r">
        	<p style="font-family:Arial, Helvetica, sans-serif;font-size:25px;color:black">Our Location</p>
         <div id="map_canvas"></div>
            <br class="cleaner">
        </div>
        
        <div class="col_2 float_l">
<p style="font-family:Arial, Helvetica, sans-serif;font-size:25px;color:black">Send us a message now!</p>
             <div style="padding-left:12px; width:370px " >
				  <p>Your comments, suggestions and inquiries are important to us and we will address them as quickly as possible. We have lots of information already available on-line which may be exactly what you need. If you cannot find the answer to your question on any of the pages referred to above, please fill in the following contact form :</p>
				  
				  <p style="font-weight:bold">If you would like a response,please ensure you supply us with your e-mail address</p>
				  
				  <table width="400px">
				  	<tr>
				  		<td>Name(*required)</td><td>:</td><td>
						  <input type="text" name="txtname" id="txtname" style="width: 176px"> </td>
					</tr>
					<tr>
				  		<td>Email(*required)</td><td>:</td><td>
						  <input type="text" name="txtemail" id="txtemail" style="width: 176px"> </td>
					</tr>
					<tr>
				  		<td>Subject</td><td>:</td><td>
						  <input type="text" name="txtsubject" id="txtsubject" style="width: 174px"> </td>
					</tr>
					<tr>
				  		<td>Subject</td><td>:</td><td>
						  <textarea name="txtsubj" id="txxsubj" style="height: 94px"></textarea> </td>
					</tr>
					<tr>
						<td colspan="2.5" align="right"><input type="button" value="Submit"> <input type="reset" value="Clear"></td>
					</tr> 
				  
				  
				  </table>
				  
			  </div>
	           <br class="cleaner">
        </div>

		<br class="cleaner" />
    </div> <!-- end of main -->
    <!-- https://mapsengine.google.com/map/edit?authuser=0&hl=en&mid=zmogoYpMswXo.ktz8diAIvfbQ -->
</div>
    <!-- <a  class="scrollup" style="display: none;">Scroll</a> 
<div id="templatemo_cr_bar_wrapper">
	<div id="templatemo_cr_bar">
    	Copyright © 2014 <a href="#"> Kasagana-ka Development Center,Inc.</a>
    </div>
</div>-->

<?php require_once("support/footer.php") ?>
<script type='text/javascript' src='../js/logging.js'></script>
</body>
</html>