<?php
			
	require_once("support/loader.php");
	$loader1=new loader1;
	
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
        	<h2 align="center">Words from our Board of Trustees</h2>
        	
            <div class="col_b float_f" style="width:900px;padding-left:5px; ">
				<?php $loader1->loader_welcome($db);?>      

              	
			</div>
			<p align="right" style="padding-right:5px"><a href="index.php">Back to home...</a></p>
        </div>
        
        <div class="cleaner h30"></div>
        
        
       
    </div> <!-- end of main -->
    
     <!-- end of footer -->
</div>

<div id="templatemo_cr_bar_wrapper">
	<div id="templatemo_cr_bar">
    	Copyright © 2014 Your Company Name | Designed by <a href="http://www.templatemo.com" target="_parent">Free CSS Templates</a>
    </div>
</div>


<script type='text/javascript' src='js/logging.js'></script>
</body>
</html>