<?php
	require_once('../support/dbConn.php');
	$database=new Database();
	$db =& $database;		
	
	
	$iter=1;
	$sqlVersion="Select * from tblvmc where vmcId=3";
	$res=$db->prepare($sqlVersion);
	$res->execute();

	
	while($rows=$res->fetch(PDO::FETCH_ASSOC)){
		$strId=$rows['vmcId'];
		$strEng=$rows['vmcEng'];
		$strTag=$rows['vmcTag'];
	
	
	}


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Kasagana-ka</title>
<meta name="keywords" content="green jelly, full post, blog, theme, free templates, templatemo, CSS, HTML" />
<meta name="description" content="Green Jelly, Full Blog Post, free CSS template by templatemo.com" />
<link href="../css/templatemo_style.css" rel="stylesheet" type="text/css" />






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



</head>
<body>

<div id="templatemo_wrapper">
    
    
    <div id="templatemo_main">
    <form name="frmvision" method="post" action="support/crud1.php">
    	<h2 align="center">Strategy</h2>
    			<input type="hidden" name="abtId" id="abtId" value="<?php echo $strId;?>">
    			<div style="float:right;width:440px;" align="center">
    				Filipino
					<textarea style="width:410px;height:130px" name="txtAbttag" id="txtAbttag"><?php echo strip_tags($strTag);?></textarea>
			    </div>

			    <div style="float:left;width:440px; margin-left:1px" align="center"  >
			    	English
		             <textarea style="width:410px ;height:130px" name="txtAbtEng" id="txtAbtEng"><?php echo strip_tags($strEng);?></textarea>
			    </div>
			    
	<div align="right">	<input name="abtCms"  type="submit" value="Save" ></div>
    </form>
    </div> <!-- end of main -->
    

</div>



</body>
</html>