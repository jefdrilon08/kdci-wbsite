<?php
		require_once("support/dbConn.php");
		require_once("support/loader.php");
		$database=new Database();
		
		$db =& $database;		
		$loader1=new loader1();
		
		if(isset($_GET['jef'])){
			$jefid=$_GET['jef'];
			$sqlLoader="Select * FROM tbljobs where jobId=?";
			$resLoader=$db->prepare($sqlLoader);
			$resLoader->execute(array($jefid));		
			
			while($rowLoader = $resLoader->fetch(PDO::FETCH_ASSOC)){
				$jID=$rowLoader['jobId'];
				$jTitle=$rowLoader['jobTitle'];
				$jDesc=$rowLoader['jobDesc'];	
				$jFile=$rowLoader['jobFile'];
				//$pemail=$rowLoader['email'];		

		
		
		}
		}
		
		
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

<!-- dasdsadsadasds -->
<script type="text/javascript" src="../css/jquery-1.10.1.min.js"></script>

  <style type="text/css" title="currentStyle">
			@import "../css/demo_page.css";
			@import "../css/demo_table_jui.css";
			@import "../css/jquery-ui-1.8.4.custom.css";
		</style>
 <script src="../js/jquery.dataTables.js"></script>
		<script type="text/javascript" charset="utf-8">
			jQuery(document).ready(function() {
				oTable = jQuery('#tbl').dataTable({
					"bJQueryUI": true,
					"sPaginationType": "full_numbers"
								} );
				});		
		</script> 


<!-- dasdsadsadasds -->
<script type="text/javascript">

	function delete_partners(pId){
		if(confirm("Are you sure you want to delete this partners")){
			var dataString="pId="+pId;
			$.ajax({
			type : "POST",
			url : "support/crud1.php",
			data : dataString,
			cache : false,
				success : function(data){
					if(data==1){
						alert('Partners has been deleted by admin');
						window.open('partners.php','_self');
					}else{
						alert('Unable to delete this Partners');
						window.open('partners.php','_self');
					}
				}
		    });
		}
	}	
	
</script>

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
</head>
<body>
<div id="templatemo_wrapper">
<?php require_once("support/miniMenu.php")?>
	<div id="templatemo_header">
     <div class="cleaner"></div>
    </div> <!-- end of header -->
     <?php require_once("support/menu.php");?> 
     <!-- end of menu -->

    <div id="templatemo_main">
	<h2 align="center">Partners</h2>
	  <table><tr><td  style="width:1150px" ><p style="font-family:Arial, Helvetica, sans-serif;font-size:25px;color:black;">List of Partners</p></td><td><a href="cms/cms_partners.php?jef='.$row['jobId'].'" class="fancybox fancybox.ajax"><img src = "images/edit-icon.png" height="30" width="30" alt = "edit" title = "edit"/></a></td></tr></table>
			<?php $loader1->partners($db);  ?>	 
	
	
		 <div class="cleaner h30"></div>
    </div> <!-- end of main -->
    
     <!-- end of footer -->
</div>

<div id="templatemo_cr_bar_wrapper">
	<div id="templatemo_cr_bar">
    	Copyright © 2014 Kasagana-ka Development Center,Inc.
    </div>
</div>


<script type='text/javascript' src='../js/logging.js'></script>
</body>



</html>