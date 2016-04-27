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
		 <h2 align="center">KDCI at a GLANCE </h2> 
    	<?php
    		if(isset($_GET['kupdate'])){
    		$kupdate=$_GET['kupdate'];
    		$sqlKupdate="Select * from tblkupdate where kupdateId=? ";
			$res=$db->prepare($sqlKupdate);
			$res->execute(array($kupdate));
					while($rows=$res->fetch(PDO::FETCH_ASSOC)){
						$kid=$rows['kupdateId'];
						$kmonth=$rows['Kmonth'];
						$NumberClients=$rows['NumberClients'];
			    		$NumberCenter=$rows['NumberCenter'];
			    		$NumberBrgy=$rows['NumberBrgy'];
			    		$NumberFO=$rows['NumberFO'];
			    		$NumberStaff=$rows['NumberStaff'];
			    		$TotalPort=$rows['TotalPort'];
			    		$RepaymentRate=$rows['RepaymentRate'];
						$PARrate=$rows['PARrate'];
						$PesoRating=$rows['PesoRating'];
					}

					
			}
    	?>	
    			<input type="hidden" name="kId" id="kid" value="<?php echo $kid ;?>">
				<table>
					<tr><td>KDCI at a GLANCE As of</td><td>:</td><td><input type="text" name="kmonth" id="kmonth" value="<?php echo $kmonth; ?>"></tr>
			    	<tr><td>Number of Clients</td><td>:</td><td><input type="text" name="NumberClients" id="NumberClients" value="<?php echo $NumberClients; ?>"></tr>
			   		<tr><td>Number of Center</td><td>:</td><td><input type="text" name="NumberCenter" id="NumberCenter" value="<?php echo $NumberCenter;?>"></tr>
			  		<tr><td>Number of Baranggay</td><td>:</td><td><input type="text" name="NumberBrgy" id="NumberBrgy" value="<?php echo $NumberBrgy;?>"></tr>
			   		<tr><td>Number of Field Offices</td><td>:</td><td><input type="text" name="NumberFO" id="NumberFO" value="<?php echo $NumberFO;?>"></tr>
			    	<tr><td>Number of Staffs</td><td>:</td><td><input type="text" name="NumberStaff" id="NumberStaff" value="<?php echo $NumberStaff;?>"></tr>
			  		<tr><td>Total Portfolio</td><td>:</td><td><input type="text" name="TotalPort" id="TotalPort" value="<?php echo $TotalPort?>"><td>pHp</td></tr>
			   		<tr><td>Reapyment Rate</td><td>:</td><td><input type="text" name="RepaymentRate" id="RepaymentRate" value="<?php echo $RepaymentRate;?>"><td>%</td></tr>
					<tr><td>PAR rate</td><td>:</td><td><input type="text" name="PARrate" id="PARrate" value="<?php echo $PARrate;?>"><td>%</td></tr>
					<tr><td>Peso Rating</td><td>:</td><td><input type="text" name="PesoRating" id="PesoRating" value="<?php echo $PesoRating;?>"></tr>
	 	 	 	</table>
	


   	
	<div align="right">	<input name="save_kupdate"  type="submit" value="Save" name="mcl"></div>
    </form>
    </div> <!-- end of main -->
    
</div>
</body>
</html>