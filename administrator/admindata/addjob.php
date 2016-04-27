
<?php


	require_once("../support/dbConn.php");
	$database=new Database();
	$db =& $database;		

	$txtjobTitle=$_POST['txtjobTitle'];
	$upFile= $_FILES['txtUpload']['name'];
	$jobDesc=date("M d, Y");

	$sqlInsert="Insert into tbljobs(jobTitle,jobDesc,jobFile)values(:txtJobTitle,:jobDesc,:upFile)";
	$qry=$db->prepare($sqlInsert);
	$qry->execute(array('txtJobTitle'=>$txtjobTitle,':jobDesc'=>$jobDesc,':upFile'=>$upFile))	;

	echo "<script language='javascript' type='text/javascript'>window.open('../jobs.php','_self')</script>";
?>