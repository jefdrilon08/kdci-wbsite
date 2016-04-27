<?php
		require_once("support/dbConn.php");
		require_once("support/loader.php");
		$database=new Database();
		
		$db =& $database;		
		$loader1=new loader1();
		
		$uId=$_GET['uId'];
			if(isset($_GET['uId'])){
				$sqlUser="SELECT tu.userId,tu.empId,te.fname,te.mi,te.lname,tu.uname,tu.pw,tu.status FROM tbluser tu INNER JOIN tblemployee te ON tu.empId=te.empId where userId=?";
				$res=$db->prepare($sqlUser);
				$res->execute(array($uId));
				
				while($rows=$res->fetch(PDO::FETCH_ASSOC)){
					$empId=$rows['empId'];
					$fname=$rows['fname'];
					$lname=$rows['lname'];
					$mi=$rows['mi'];
					$uname=$rows['uname'];
					$pw=$rows['pw'];
				
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

	function delete_user(eId){
		if(confirm("Are you sure you want to delete this User")){
			var dataString="eId="+eId;
			$.ajax({
			type : "POST",
			url : "support/crud1.php",
			data : dataString,
			cache : false,
				success : function(data){
					if(data==1){
						alert('User has been deleted by admin');
						window.open('user.php','_self');
					}else{
						alert('Unable to delete this User');
						window.open('user.php','_self');
					}
				}
		    });
		}
	}	
	
</script>

  
</head>
<body>
<div id="templatemo_wrapper">
	<div id="templatemo_header">
     <div class="cleaner"></div>
    </div> <!-- end of header -->
     <?php require_once("support/menu.php");?> 
     <!-- end of menu -->

    <div id="templatemo_main">
	<h2 align="center">Users</h2>
	
		<!-- <a href='#'><span onclick='delete_jobs()>Delete</span></a> -->
		<div class="col_5 float_r" style="width:600px" >
			<h2 align="center" style="width:610px">List of Users</h2>
			<?php $loader1->loadUser($db);  ?>	 
		 </div>
		 <div class="col_2 float_l"  style="width:250px;" >
		 <form name="frmjobs" method="post" enctype="multipart/form-data" action="support/crud1.php">
			 <h2 align="center" style="width:260px">Data Entry</h2>
			 <table  style="width:260px">
			 	<tr><td colspan="3"></td></tr>
			 	<tr><td><input type="hidden" name="txtuId" id="txtuId" value="<?php echo $empId; ?>"></td></tr>
				<tr><td style="padding-bottom:20px">First Name:</td><td><input type="text" name="fname" id="fname" value="<?php echo $fname;?>" style="width: 161px"></td></tr>
				<tr><td style="padding-bottom:20px">Last Name:</td><td><input type="text" name="lname" id="lname" value="<?php echo $lname;?>" style="width: 161px"></td></tr>
				<tr><td style="padding-bottom:20px">M.I:</td><td><input type="text" name="mi" id="mi" value="<?php echo $mi;?>" style="width: 161px"></td></tr>
				<tr><td style="padding-bottom:20px">User Name:</td><td><input type="text" name="uname" id="uname" value="<?php echo $uname;?>" style="width: 161px"></td></tr>
				<tr><td style="padding-bottom:20px">Password:</td><td><input type="password"name="pw" id="pw" value="<?php echo $pw;?>" style="width: 161px"></td></tr>
				<tr><td colspan="3" align="right"><input name="add_user" type="submit" value="Save"><input type="reset" value="Clear"></td></tr>
			</table>
			<!-- <input type="text" name="pwE" id="pwE" value="<?php echo $pw;?>" -->
		</form>
		 
		 </div>
		 <div class="cleaner h30"></div>
    </div> <!-- end of main -->
    
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