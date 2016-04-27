<?php
require_once("administrator/support/dbConn.php");
	$database=new Database();
	$db =& $database;

?>


<!DOCTYPE html>
<html lang="en">
     <head>
     <title>Gallery</title>
     <meta charset="utf-8">
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

     
 <!--     <link rel="icon" href="images/favicon.ico">
     <link rel="shortcut icon" href="images/favicon.ico" /> -->
     <link rel="stylesheet" href="css2/style.css">
     <link rel="stylesheet" href="css2/touchTouch.css">
      <script src="js2/jquery.js"></script>
     <!-- <script src="js/jquery-migrate-1.1.1.js"></script>  
     <script src="js/superfish.js"></script>
     <script src="js/jquery.equalheights.js"></script>
     <script src="js/jquery.easing.1.3.js"></script>
     <script src="js/jquery.ui.totop.js"></script>-->
     <script src="js2/touchTouch.jquery.js"></script>
     <script>
     $(window).load(function(){
       $().UItoTop({ easingType: 'easeOutQuart' });
      });
       $(function(){
  
  // Initialize the gallery
  $('.gallery a.gal').touchTouch();
 });  
      
      
     </script>
     <!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
         </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <link rel="stylesheet" media="screen" href="css/ie.css">

    <![endif]-->
     </head>
     <body >
<!--==============================header=================================-->
 
<div id="templatemo_wrapper">
	<div id="templatemo_header">
       
       
    </div> <!-- end of header -->
      <?php
    	require_once("support/menu.php");
    ?>
    
     <!-- end of menu -->

<!--=======content================================-->

<div id="templatemo_main">
       <h2 align="center" style="margin-bottom:20px">Photo Gallery</h2>
      <div class="clear"></div>
		<?php
       $sqlPics1="SELECT tg.gallery_id,tg.gallery_desc,tp.pics_title,tg.gallery_dt FROM tblgallery tg INNER JOIN tblpicture tp ON tg.gallery_id=tp.gallery_id  WHERE  tg.gallery_id=? group by tg.gallery_id ";
      $resPic1= $db->prepare($sqlPics1);
      $resPic1->execute(array($_GET['pId']));
      
      if($rowsPic1=$resPic1->fetch(PDO::FETCH_ASSOC)){
	  $strPics='<p style="font-family:Arial, Helvetica, sans-serif;font-size:25px;color:#9dcf56">'.$rowsPic1['gallery_desc'].'</p>';
	  
	  
	  }
      
     ?>     
	 <div class="gallery">
       
       <?php
       $sqlPics="SELECT tg.gallery_id,tg.gallery_desc,tp.pics_title,tg.gallery_dt FROM tblgallery tg INNER JOIN tblpicture tp ON tg.gallery_id=tp.gallery_id  WHERE  tg.gallery_id=?";
      $resPic= $db->prepare($sqlPics);
      $resPic->execute(array($_GET['pId']));
      
      while($rowsPic=$resPic->fetch(PDO::FETCH_ASSOC)){
	      $strPics.='<div class="grid_4 imgContainer"  >';
	      $strPics.='  <div class="imgContainer"><a href="images/gallery/'.$rowsPic['pics_title'].'" class="gal img_inner">';
		  $strPics.='	  <img src="images/gallery/'.$rowsPic['pics_title'].'" alt="" ></a></div>';
	      $strPics.='</div>';
      }
      echo $strPics;
     ?>
      <!-- <div class="clear"></div> -->
     

      <div class="clear"></div>
  </div>



</div>
<div id="templatemo_cr_bar_wrapper">
	<div id="templatemo_cr_bar">
    	Copyright &#65533; 2048 Your Company Name | Designed by <a href="http://www.templatemo.com" target="_parent">Free CSS Templates</a>
    </div>
</div>
</div>


</body>
</html>