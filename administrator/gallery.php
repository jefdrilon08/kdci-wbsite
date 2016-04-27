<?php

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
<!-- ****************************** 
<script type="text/javascript">

	function get_vision(grp){
	alert (grp);
	
	}

</script>
-->

<!-- dasdsadsadasds -->
<script type="text/javascript">

	function delete_board(boardId){
		if(confirm("Are you sure you want to delete this branch")){
			var dataString="boardId="+boardId;
			$.ajax({
			type : "POST",
			url : "support/crud1.php",
			data : dataString,
			cache : false,
				success : function(data){
					if(data==1){
						alert('Board has been deleted by admin');
						window.open('AboutUs.php#board','_self');
					}else{
						alert('Unable to delete this Board');
						window.open('AboutUs.php#board','_self');
					}
				}
		    });
		}
	}	
	
	
	function delete_steering(steerId){
		if(confirm("Are you sure you want to delete this branch")){
			var dataString="steerId="+steerId;
			$.ajax({
			type : "POST",
			url : "support/crud1.php",
			data : dataString,
			cache : false,
				success : function(data){
					if(data==1){
						alert('Board has been deleted by admin');
						window.open('AboutUs.php','_self');
						window.open('AboutUs.php#Steering_Commitee','_self');
					}else{
						alert('Unable to delete this Board');
						window.open('AboutUs.php#Steering_Commitee','_self');
					}
				}
		    });
		}
	}	

	
	
</script>

</head>
<body>

<div id="templatemo_wrapper">
<?php require_once("support/miniMenu.php")?>
	<div id="templatemo_header">
     <div class="cleaner"></div>
    </div> <!-- end of header -->
     <?php
    	require_once("support/menu.php");
    ?><!-- end of menu -->
    
    <div id="templatemo_main">
		<h2 align="center">Gallery</h2>
		
    	<table><tr><td style="width:1150px" ><p style="font-family:Arial, Helvetica, sans-serif;font-size:25px;color:black;width:170px">Albums</p></td><td><a href="cms/cms_gallery.php"><img src = "images/edit-icon.png" height="30" width="30" alt = "edit" title = "edit"/></a></td></tr></table>
 		<?php
 		$sqlAl="SELECT tg.gallery_id,tg.gallery_desc,tp.pics_title,tg.status FROM tblgallery tg INNER JOIN tblpicture tp ON tg.gallery_id=tp.gallery_id GROUP BY tg.gallery_id";
 		$res=$db->prepare($sqlAl);
 		$res->execute();
		 $strAl.='<ul id="folder" style="border-right:10px" >';
		 while($rowsAl=$res->fetch(PDO::FETCH_ASSOC)){
         	$strAl.='<li style="margin-left:20px"><a href="picture.php?alId='.$rowsAl['gallery_id'].'" ><img src="../images/gallery/'.$rowsAl['pics_title'].'" alt="Image 01" />'.$rowsAl['gallery_desc'].'</a></li>';
         }
       	 $strAl.='</ul>';
         $strAl.='<div class="cleaner"></div>';
         echo $strAl;
        ?>      
       
        <div class="pagging">
            <ul>
                <li><a href="http://www.templatemo.com" target="_parent">Previous</a></li>
                <li><a href="http://www.templatemo.com/page/1" target="_parent">1</a></li>
                <li><a href="http://www.templatemo.com/page/2" target="_parent">2</a></li>
                <li><a href="http://www.templatemo.com/page/3" target="_parent">3</a></li>
                <li><a href="http://www.templatemo.com/page/4" target="_parent">4</a></li>
                <li><a href="http://www.templatemo.com/page/5" target="_parent">5</a></li>
                <li><a href="http://www.templatemo.com/page/6" target="_parent">6</a></li>
                <li><a href="http://www.templatemo.com/page/7" target="_parent">Next</a></li>
            </ul>
            <div class="cleaner"></div>
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


<script type='text/javascript' src='../js/logging.js'></script>
</body>
</html>