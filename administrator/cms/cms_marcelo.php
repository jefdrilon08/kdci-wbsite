<?php
	require_once('../support/dbConn.php');
	$database=new Database();
	$db =& $database;		
	
	
	$iter=1;

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

<div id="templatemo_wrapper" style="width:600px">
    <div id="templatemo_main">
    <form name="frmmarcelo" method="post" action="support/crud1.php">
    	<h2 align="center">M.A.R.C.E.L.O</h2>
    	<?php
    		$sqlVersion="Select * from tblmarcelo";
			$res=$db->prepare($sqlVersion);
			$res->execute();
			$strM.='<table>';
			while($rows=$res->fetch(PDO::FETCH_ASSOC)){
			    $strM.='<tr><td><b style=" font-size:30px; font-family:Arial, Helvetica, sans-serif ">M</b></td><td><input type="text" name="m" id="m" value='.$rows['M'].'></tr>';
			    $strM.='<tr><td><b style=" font-size:30px; font-family:Arial, Helvetica, sans-serif ">A</b></td><td><input type="text" name="a" id="a" value='.$rows['A'].'></tr>';
			    $strM.='<tr><td><b style=" font-size:30px; font-family:Arial, Helvetica, sans-serif ">R</b></td><td><input type="text" name="r" id="r" value='.$rows['R'].'></tr>';
			    $strM.='<tr><td><b style=" font-size:30px; font-family:Arial, Helvetica, sans-serif ">C</b></td><td><input type="text" name="c" id="c" value='.$rows['C'].'></tr>';
			    $strM.='<tr><td><b style=" font-size:30px; font-family:Arial, Helvetica, sans-serif ">E</b></td><td><input type="text" name="e" id="e" value='.$rows['E'].'></tr>';
			    $strM.='<tr><td><b style=" font-size:30px; font-family:Arial, Helvetica, sans-serif ">L</b></td><td><input type="text" name="l" id="l" value='.$rows['L'].'></tr>';
				$strM.='<tr><td><b style=" font-size:30px; font-family:Arial, Helvetica, sans-serif ">O</b></td><td><input type="text" name="o" id="o" value='.$rows['O'].'></tr>';
			}
	 	    $strM.='</table>';
		   echo $strM;
    	?>
    	
	<div align="right">	<input name="save_marcelo"  type="submit" value="Save" name="mcl"/></div>
    </div> <!-- end of main -->
    </form>

</div>



</body>
</html>