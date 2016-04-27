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


<script type="text/javascript">

</script>

</head>
<body>

<div id="templatemo_wrapper">
    
    
    <div id="templatemo_main">
    <fieldset style= "margin-bottom:10px">
				<script type="text/javascript" src="nicEdit.js" ></script>
			 	<script type="text/javascript">bkLib.onDomLoaded(function(){ nicEditors.allTextAreas() });</script>  
				<legend>Data Entry</legend>	
			<form name="frmProducts" method="post" enctype="multipart/form-data" action="support/crud1.php">
				<table>
					<tr><td>Product Name</td> <td>:</td><td><input type="text" name="txtProd" id="txtprod"/></td></tr>
					<tr><td>Product Image</td> <td>:</td><td><input type="file" name="txtImg" id="txtImg"/></td></tr>
					<tr><td>Product Description</td> <td>:</td><td><textarea name="txtPD" id="txtPD" cols="100" rows="20"></textarea></td></tr>
		        </table>
				<div align="right">	<input name="add_prod" type="submit" value="Save" /><input type="reset" value="Cancel" /></div>
			</form>
			</fieldset>	      
    </div> <!-- end of main -->
    

</div>



</body>
</html>