<?php

		require_once("../support/dbConn.php");
		require_once("../support/loader.php");
		$database=new Database();
		
		$db =& $database;		
		$loader1=new loader1();
		/**
* Multi file upload example
* @author Resalat Haque
* @link http://www.w3bees.com/2013/02/multiple-file-upload-with-php.html
**/

$valid_formats = array("jpg", "png", "gif", "zip", "bmp" );
$max_file_size = 1024*100; //100 kb
$path = "../../images/gallery/"; // Upload directory
$count = 0;
if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST"){
		$txtgname=$_POST['txtgname']; 
		$txtgdate=$_POST['datepicker'];
		$strSql="Insert into tblgallery(gallery_desc,gallery_dt)values(:txtgname,:txtgdate)";
		$res=$db->prepare($strSql);
		$res->execute(array('txtgname'=>$txtgname,':txtgdate'=>$txtgdate));
		
		$lastId = $db->lastInsertId();
	
	
	// Loop $_FILES to execute all files
	foreach ($_FILES['files']['name'] as $f => $name) {     
	    if ($_FILES['files']['error'][$f] == 4) {
	        continue; // Skip file if any error found
	    }	       
	    if ($_FILES['files']['error'][$f] == 0) {	           
	        //if ($_FILES['files']['size'][$f] > $max_file_size) {
	          //  $message[] = "$name is too large!.";
	           // continue; // Skip large files
	        //}
			//if( ! in_array(pathinfo($name, PATHINFO_EXTENSION), $valid_formats) ){
			//	$message[] = "$name is not a valid format";
			//	continue; // Skip invalid file formats
			//}
	        //else{ // No error found! Move uploaded files 
	            if(move_uploaded_file($_FILES["files"]["tmp_name"][$f], $path.$name)) {
		            	$strSql1="Insert into tblpicture(gallery_id,pics_title)values(:lastId,:sname)";
						$res1=$db->prepare($strSql1);
						$res1->execute(array('lastId'=>$lastId,':sname'=>$name));
						//echo $name;
	            		$count++; // Number of successfully uploaded files
	            }
	        //}
	    }
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


<!-- dasdsadsadasds -->
<style type="text/css">
a{ text-decoration: none; color: #333}
h1{ font-size: 1.9em; margin: 10px 0}
p{ margin: 8px 0}
.status{
	/*display: none;*/
	padding: 8px 35px 8px 14px;
	margin: 20px 0;
	text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
	color: #468847;
	background-color: #dff0d8;
	border-color: #d6e9c6;
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
}
input[type="submit"] {
	cursor:pointer;
	width:100%;
	border:none;
	background:#991D57;
	background-image:linear-gradient(bottom, #8C1C50 0%, #991D57 52%);
	background-image:-moz-linear-gradient(bottom, #8C1C50 0%, #991D57 52%);
	background-image:-webkit-linear-gradient(bottom, #8C1C50 0%, #991D57 52%);
	color:#FFF;
	font-weight: bold;
	margin: 20px 0;
	padding: 10px;
	border-radius:5px;
}
input[type="submit"]:hover {
	background-image:linear-gradient(bottom, #9C215A 0%, #A82767 52%);
	background-image:-moz-linear-gradient(bottom, #9C215A 0%, #A82767 52%);
	background-image:-webkit-linear-gradient(bottom, #9C215A 0%, #A82767 52%);
	-webkit-transition:background 0.3s ease-in-out;
	-moz-transition:background 0.3s ease-in-out;
	transition:background-color 0.3s ease-in-out;
}
input[type="submit"]:active {
	box-shadow:inset 0 1px 3px rgba(0,0,0,0.5);
}
.wrap{
	width: 500px;
	margin: 15px auto;
	padding: 20px 25px;
	background: white;
	border: 2px solid #DBDBDB;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
	overflow: hidden;
	text-align: center;
}

</style>

<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css">
<script>
$(function() {
$( "#datepicker" ).datepicker();
});
</script>


</head>
<body>

<div id="templatemo_wrapper">

	<div id="templatemo_header">
     <div class="cleaner"></div>

    </div> <!-- end of header -->
     <?php
    	//require_once("../support/menu.php");
    ?><!-- end of menu -->
    
    <div id="templatemo_main">
    <h2>Multiple File Upload</h2>
		<div class="wrap">
		
		<?php
		# error messages
		if (isset($message)) {
			foreach ($message as $msg) {
				printf("<p class='status'>%s</p></ br>\n", $msg);
			}
		}
		# success message
		if($count !=0){
			printf("<p class='status'>%d files added successfully!</p>\n", $count);
		}
		?>
		
		<!-- Multiple file upload html form-->
			<div align="center">
				<p>Max file size 100kb, Valid formats jpg, png, gif</p>
				<br />
				<br />
				<form action="" method="post" enctype="multipart/form-data">
				<table>
					<tr><td>Gallery Title</td><td>:</td><td><input type="text" name="txtgname" id="txtgname"></td></tr>
					<tr><td>Date</td><td>:</td><td><input type="text" id="datepicker" name="datepicker"></td></tr>
					<tr><td colspan="3"><input type="file" name="files[]" multiple="multiple" accept="image/*"></td></tr>
				</table>
					<input type="submit" value="Upload">
				</form>
			</div>	
		</div>
		<div align="right"><p style="font-family:Arial, Helvetica, sans-serif;font-size:12px"><a href="../gallery.php"> Back... </a></p></div>
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