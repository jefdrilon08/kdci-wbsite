<?php

		require_once("support/dbConn.php");
		require_once("support/loader.php");
		$database=new Database();
		
		$db =& $database;		
		$loader1=new loader1();
		$newsId=$_GET['news'];
		$sqlLoader="Select * from tblnews where newsId=?";
		$res=$db->prepare($sqlLoader);
		$res->execute(array($newsId));
	//	if($res==null){
			if($row=$res->fetch(PDO::FETCH_ASSOC)){
				
				$nId=$row['newsId'];
				$nTitle=$row['news_title'];
				$nDesc=$row['news_desc'];
				$nDate=$row['news_date'];
				$hpics=$row['news_pics'];
		
			
			}
	
	//	}

		
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Kasagana-ka</title>
<meta name="keywords" content="green jelly, full post, blog, theme, free templates, templatemo, CSS, HTML" />
<meta name="description" content="Green Jelly, Full Blog Post, free CSS template by templatemo.com" />
<link rel="stylesheet" href="css/stylemini.css">
<link href="../css/templatemo_style.css" rel="stylesheet" type="text/css" >

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
<!-- ******************************************************************  -->

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
<!-- dasdsadsadasds -->
<script type="text/javascript">


	function delNews(nId){
		if(confirm("Are you sure you want to delete this news")){
			var dataString="nId="+nId;
			$.ajax({
			type : "POST",
			url : "support/crud1.php",
			data : dataString,
			cache : false,
				success : function(data){
						alert('News has been deleted');
						window.open('newsandfetured.php','_self');
				}
		    });
		}
	}	
</script>
<!-- hiding css -->
    <style type="text/css">
      table tr button { opacity:0; float:right }
      table tr:hover button { opacity:1 }
    </style>
   <!-- hiding css -->

<!-- para sa date -->
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script type="text/javascript">
$(function() {
$( "#txtDate" ).datepicker();
});
</script>
<!-- ****************** -->
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
    
    <div id="templatemo_main"
    >
   <h2 align="center">News and Featured </h2>

	<fieldset >
		<legend>List of News and Featured</legend>	
			<?php $loader1->news($db); ?>			
	</fieldset>			
		<div id="dEntry"></div>
        	<fieldset style= "margin-bottom:10px">
				<script type="text/javascript" src="nicEdit.js" ></script>
				<script type="text/javascript">bkLib.onDomLoaded(function(){ nicEditors.allTextAreas() });</script>
				<div id="pack_0">
				</div>
	<!--			table in hiding a button
				  <table border=1 width=300px>
      <tr><td>LINE1 <button>BUTTON1</button></td></tr>
      <tr><td>LINE2 <button>BUTTON2</button></td></tr>
      <tr><td>LINE3 <button>BUTTON3</button></td></tr>
    </table>
     xxxxxxxxxxxxxxxxxxxxxxxxxx -->
				
				<legend>Data Entry</legend>	
			    <form name="frmProducts" method="post" enctype="multipart/form-data" action="support/crud1.php">
					<input type="hidden" name="txtnewsId" id="txtnewsId" value="<?php echo $nId;?>">
					<input type="hidden" name="hpics" id="hpics" value="<?php echo $hpics;?>">

					<table>
						<tr><td>News Title</td> <td>:</td><td><input type="text" id="txtTitle" name="txtTitle" value="<?php echo $nTitle;?>"></td></tr>
						<tr><td>News Date</td> <td>:</td><td ><input type="text" name="txtDate" id="txtDate" value="<?php echo $nDate; ?>"></td></tr>
					 	<tr><td>News Picture(280x140px)</td> <td>:</td><td><input type="file" name="picture"></td></tr> 
						<tr><td>News Description</td> <td>:</td><td><textarea name="txtND" id="txtND" cols="90" rows="20"><?php echo $nDesc;?></textarea></td></tr>
					 	<tr><td colspan="3"><div align="right">	<input name="add_news" type="submit" value="Save" ><input type="reset" value="Cancel"></div></td></tr>
			        </table>
				</form>
			</fieldset>	      
            <div class="cleaner"></div>
        </div>



    
       
    </div> <!-- end of main -->
    
     <!-- end of footer -->
</div>
    <!-- <a  class="scrollup" style="display: none;">Scroll</a> -->
<div id="templatemo_cr_bar_wrapper">
	<div id="templatemo_cr_bar">
    	Copyright © 2014 <a href="#"> Kasagana-ka Development Center,Inc.</a>
    </div>
</div>


<script type='text/javascript' src='../js/logging.js'></script>
</body>
</html>