<?php
require_once("administrator/support/dbConn.php");
	$database=new Database();
	$db =& $database;

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Kasagana-ka</title>
<meta name="keywords" content="green jelly, portfolio, free web design, free css templates, templatemo.com" />
<meta name="description" content="Green Jelly, Portfolio, free CSS template by templatemo.com" />
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

/***********************





************************
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

<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />
	
<script src="js/prototype.js" type="text/javascript"></script>
<script src="js/scriptaculous.js?load=effects,builder" type="text/javascript"></script>
<script src="js/lightbox.js" type="text/javascript"></script>
  
</head>
<body>

<div id="templatemo_wrapper">
	<div id="templatemo_header">
       
       
    </div> <!-- end of header -->
      <?php
    	require_once("support/menu.php");
    ?>
    
     <!-- end of menu -->
    
    <div id="templatemo_main">
    	<h2 align="center">Gallery</h2>
    	<p style="font-family:Arial, Helvetica, sans-serif;font-size:25px;color:black">Albums</p>
        
        <?php
        $strg.='<ul id="folder" style="border-right:10px" >';
        $strgSql="SELECT tg.gallery_id,tg.gallery_desc,tp.pics_title,tg.gallery_dt FROM tblgallery tg INNER JOIN tblpicture tp ON tg.gallery_id=tp.gallery_id GROUP BY tg.gallery_id";
        $resg=$db->prepare($strgSql);
        $resg->execute();

        
        while($rows=$resg->fetch(PDO::FETCH_ASSOC)){
        $strg.='    <li style="margin-left:20px;margin-right:10px"><a href="photos.php?pId='.$rows['gallery_id'].'" ><img src="images/gallery/'.$rows['pics_title'].'" alt="Image 01" class=" image_frame_300  /><p align="center" ><b>'.$rows['gallery_desc'].'</b></p></a></li>';
        }
        //$strg.='    <li style="margin-left:20px"><a href="picture.php" ><img src="images/gallery/02.jpg" alt="Image 02" />Sample 2</a></li>';
        //$strg.='    <li style="margin-left:20px"><a href="picture.php" ><img src="images/gallery/03.jpg" alt="Image 03" />Sample 3</a></li>';
        //$strg.='    <li style="margin-left:20px"><a href="picture.php" ><img src="images/gallery/04.jpg" alt="Image 04" />Sample 4</a></li>';
        $strg.='</ul>';
        echo $strg;
        ?>
        
        <div class="pagging">
        
        <!--   <ul>
                <li><a href="http://www.templatemo.com" target="_parent">Previous</a></li>
                <li><a href="http://www.templatemo.com/page/1" target="_parent">1</a></li>
                <li><a href="http://www.templatemo.com/page/7" target="_parent">Next</a></li>
            </ul> -->
            <div class="cleaner"></div>
        </div>
        
    </div> <!-- end of main -->
    
    
</div>

<div id="templatemo_cr_bar_wrapper">
	<div id="templatemo_cr_bar">
    	Copyright © 2014 <a href="#"> Kasagana-ka Development Center,Inc.</a>
    </div>
</div>

<script type='text/javascript' src='js/logging.js'></script>
</body>
</html>