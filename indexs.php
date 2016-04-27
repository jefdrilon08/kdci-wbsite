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
<meta name="keywords" content="green jelly, theme, free templates, nivo image slider, website, templatemo, CSS, HTML" />
<meta name="description" content="Green Jelly Theme, free CSS template provided by templatemo.com" />
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

<script type="text/javascript" src="js/jquery.min.js"></script>
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

 
  
</head>
<body>

<div id="templatemo_wrapper">
	<div id="templatemo_header">
        
        <div class="cleaner"></div>
    </div> <!-- end of header -->
    <?php
    	require_once("support/menu.php");
    ?> <!-- end of menu -->
    <?php $loader->loadSlider(); ?> 
    <script type="text/javascript" src="js/jquery-1.4.3.min.js"></script>
    <script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
    <script type="text/javascript">
	    $(window).load(function() {
	    $('#slider').nivoSlider();
	    });
    </script>
    
    <div id="templatemo_main">
        <div class="col_5 float_l">
        	<h2 style="width:490px; border-bottom:0.5px gray solid;" align="center">About Us</h2>
              <? $loader->aboutUs($db); ?>
            <br class="cleaner">
        </div>
        
        <div class="col_2 float_r">
        	<h2 style=" border-bottom: 1px solid gray;width:380px" align="center">Welcome</h2>
             <div style="padding-left:12px; width:380px " >
					<?php $loader->welcome($db);?>
					
			  </div>
	           <br class="cleaner">
        </div>

		<div class="col_5 float_l " >
        	<h2 style="width:490px; border-bottom:0.5px gray solid;" align="center">Loan Products</h2>
           <!--   <br class="cleaner h20" /> -->
             <div style="padding-left:15px; width:490px " >
            <p><em>Sed mollis leo nec est tempor interdum et vulputate orci. Integer in erat nibh, nec volutpat nunc. Aliquam in congue ligula.</em></p>
            <p><a href="http://www.templatemo.com" target="_parent">Green Jelly</a> is  free css template provided by <a href="http://www.templatemo.com">templatemo.com</a> for your personal or commercial websites. Credit for Nivo Slider goes to <a href="http://nivo.dev7studios.com" target="_blank">Dev7studios</a>. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi porta, sem vitae lacinia convallis, eros sapien euismod metus, quis ultricies arcu neque eu elit. Nam vel pellentesque nunc.</p>
          <br class="cleaner h20" />
            <ul class="templatemo_list">
                <li>Dictum eu pharetra quam semper</li>
                <li>Fusce fermentum justo non libero</li>
                <li>Placerat metus egestas sem dolor in lectus</li>
                <li>Vivamus mollis, odio ut aliquam auctor</li>
            </ul>
                    <ul class="templatemo_list">
                <li>Dictum eu pharetra quam semper</li>
                <li>Fusce fermentum justo non libero</li>
                <li>Placerat metus egestas sem dolor in lectus</li>
                <li>Vivamus mollis, odio ut aliquam auctor</li>
            </ul>
              <ul class="templatemo_list">
                <li>Dictum eu pharetra quam semper</li>
                <li>Fusce fermentum justo non libero</li>
                <li>Placerat metus egestas sem dolor in lectus</li>
                <li>Vivamus mollis, odio ut aliquam auctor</li>
            </ul>
             </ul>
              <ul class="templatemo_list">
                <li>Dictum eu pharetra quam semper</li>
                <li>Fusce fermentum justo non libero</li>
                <li>Placerat metus egestas sem dolor in lectus</li>
                <li>Vivamus mollis, odio ut aliquam auctor</li>
            </ul>
            <div class="cleaner h20"></div> 
            <!-- <a href="#" class="more">More</a> -->
            </div>
            <br class="cleaner" />
        </div>
        
        
        <div class="col_2 float_r"  >
        	<h2  style=" border-bottom: 1px solid gray;width:380px" align="center">News And Features</h2>
        	<?php $loader->news($db);?>
        	
        </div>
       
        <div class="col_2 float_r">
        	
            <div style=" width:400px; " >
            
         

            <?php $loader->kdciupdate($db);?>
            </div>
           <br class="cleaner" />
        </div>
		<br class="cleaner" />
    </div> <!-- end of main -->
    
</div>
<?php require_once("support/footer.php") ?>

<script type='text/javascript' src='js/logging.js'></script>
</body>
</html>