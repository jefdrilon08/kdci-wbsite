<?php
	session_start();
	require_once("dbConn.php");
		$database=new Database();
		$db =& $database;	
		
	if(isset($_POST['btnLogIn'])){
	
		$uname=$_POST['txtUname'];
		$pw=$_POST['txtPw'];
		
		$strSql="Select * from tbluser where uname=? and pw=?";
		$res=$db->prepare($strSql);
		$res->execute(array($uname,$pw));
		$rCount = $res->rowCount();
		if($rCount>0){
				
			$_SESSION['admin_username']=$uname;
			echo "<script language='javascript' type='text/javascript'>window.open('../cmswelcome.php','_self')</script>";
		}else{
		
		}
		
		
	}
	
	
	if(isset($_POST['save_kupdate'])){
		$kId=$_POST['kId'];
		$kmonth=$_POST['kmonth'];
		$NumberClients=$_POST['NumberClients'];
		$NumberCenter=$_POST['NumberCenter'];
		$NumberBrgy=$_POST['NumberBrgy'];
		$NumberFO=$_POST['NumberFO'];
		$NumberStaff=$_POST['NumberStaff'];
		$TotalPort=$_POST['TotalPort'];
		$RepaymentRate=$_POST['RepaymentRate'];
		$PARrate=$_POST['PARrate'];
		$PesoRating=$_POST['PesoRating'];
		
		if($kId==null){
			$stat=1;
			$sql="Update tblkupdate Set status=?";
			$qry=$db->prepare($sql);
			$qry->execute(array($stat));
			
			$strSql="Insert into tblkupdate(NumberClients,NumberCenter,NumberBrgy,NumberFO,NumberStaff,TotalPort,RepaymentRate,PARrate,PesoRating,Kmonth)values(:NumberClients,:NumberCenter,:NumberBrgy,:NumberFO,:NumberStaff,:TotalPort,:RepaymentRate,:PARrate,:PesoRating,:kmonth)";
			$qry=$db->prepare($strSql);
			$qry->execute(array('NumberClients'=>$NumberClients,'NumberCenter'=>$NumberCenter,'NumberBrgy'=>$NumberBrgy,'NumberFO'=>$NumberFO,'NumberStaff'=>$NumberStaff,'TotalPort'=>$TotalPort,'RepaymentRate'=>$RepaymentRate,'PARrate'=>$PARrate,'PesoRating'=>$PesoRating,'kmonth'=>$kmonth));
			
			
		}else{
				$stat=1;
			$sql="Update tblkupdate set NumberClients=?,NumberCenter=?,NumberBrgy=?,NumberFO=?,NumberStaff=?,TotalPort=?,RepaymentRate=?,PARrate=?,PesoRating=?,Kmonth=? where kupdateId=?";
			$qry=$db->prepare($sql);
			$qry->execute(array($NumberClients,$NumberCenter,$NumberBrgy,$NumberFO,$NumberStaff,$TotalPort,$RepaymentRate,$PARrate,$PesoRating,$kmonth,$kId));

		
		}
		
		echo "<script language='javascript' type='text/javascript'>alert('Successfully Saved!')</script>";
		echo "<script language='javascript' type='text/javascript'>window.open('../index.php','_self')</script>";

	
	}
	
	
	if(isset($_POST['add_prodIntro'])){ //pag add ng intro sa product
		$txtHdesc=$_POST['txtHdesc'];
		$strSql="Update tblprodintro set prodDescIntro=?";
		$qry=$db->prepare($strSql);
		$qry->execute(array($txtHdesc));
		
		echo "<script language='javascript' type='text/javascript'>alert('Successfully Saved!')</script>";
		echo "<script language='javascript' type='text/javascript'>window.open('../index.php','_self')</script>";
	}
	
	
	
	if (isset($_POST['jef'])){ //save and edit job
		function UploadOne($fname,$newName){
			$uploaddir="../images/jobs/";
				if(is_uploaded_file($fname['tmp_name'])){
					$filname=basename($fname['name']);
					
					$uploadfile = $uploaddir . $newName/*.".".end(explode('.',$fname['name']))*/; 
					echo $uploadfile;
						if (move_uploaded_file($fname['tmp_name'],$uploadfile)){
							echo $res="File " . $filename ." Was successfully uploaded and stored";
						}else{
							echo $res = "Could not move ".$fname['tmp_name']." to ".$uploadfile."<br>"; 
						}
				}else{
					$res = "File ".$fname['name']." failed to upload."; 
				}
				echo ($res);
			}

	
		$txtjobTitle=$_POST['txtjobTitle'];
		$jobId=$_POST['txtjId'];
		$upFile= $_FILES['txtUpload']['name'];
		$jobDesc=date("m/d/Y");
		if($jobId==null){
			$sqlInsert="Insert into tbljobs(jobTitle,jobDesc,jobFile)values(:txtJobTitle,:jobDesc,:upFile)";
			$qry=$db->prepare($sqlInsert);
			$qry->execute(array('txtJobTitle'=>$txtjobTitle,':jobDesc'=>$jobDesc,':upFile'=>$upFile))	;
		}else{
			$sql="Update tbljobs Set jobTitle=?, jobDesc=?, jobFile=? where jobId=?";
			$qry=$db->prepare($sql);
			$qry->execute(array($txtjobTitle,$jobDesc,$upFile,$jobId));
		}
		
		
		
		if($_FILES['picture']['name'] != ""){
			$res=UploadOne($_FILES['picture'],$_FILES['picture']['name']);
			$filename=$_FILES['picture']['name'];
		}else{
			echo ("jef");
		}

		
		echo "<script language='javascript' type='text/javascript'>alert('Successfully Saved!')</script>";
		echo "<script language='javascript' type='text/javascript'>window.open('../jobs.php','_self')</script>";
	}
	
	
	if(isset($_POST['bId'])){ /*<--pan delete Job*/
		$bId = $_POST['bId'];
		$sql="DELETE FROM tbljobs where jobId=?";
		$res=$db->prepare($sql);
		$res->execute(array($bId));
		if($res){
			echo 1;
		}else{
			echo 2;
		}

	}
	if(isset($_POST['add_prod'])){ //add product
	
		function UploadOne($fname,$newName){
		$uploaddir="../images/prod/";
			if(is_uploaded_file($fname['tmp_name'])){
				$filname=basename($fname['name']);
				
				$uploadfile = $uploaddir . $newName/*.".".end(explode('.',$fname['name']))*/; 
				echo $uploadfile;
					if (move_uploaded_file($fname['tmp_name'],$uploadfile)){
						echo $res="File " . $filename ." Was successfully uploaded and stored";
					}else{
						echo $res = "Could not move ".$fname['tmp_name']." to ".$uploadfile."<br>"; 
					}
			}else{
				$res = "File ".$fname['name']." failed to upload."; 
			}
			echo ($res);
		}
	
	
		$prodId=$_POST['prodId'];
		
		$prodTitle=$_POST['txtProd'];
		$prodImg=$_FILES['picture']['name'];
		$prodDesc=$_POST['txtPD'];
		$txtpicH=$_POST['txtpicH'];
	
		if($prodId==null){	
			$prodInsert="Insert into tblproduct(prodcategId,prodDesc,prodPics)values(:prodTitle,:prodDesc,:prodImg)";
			$qry=$db->prepare($prodInsert);
			$qry->execute(array('prodTitle'=>$prodTitle,':prodImg'=>$prodImg,':prodDesc'=>$prodDesc));
		}else{
			if($prodImg==null){
				$prodImgU=$txtpicH;
				
			}else{
				$prodImgU=$prodImg;
			}
			$prodUpdate="Update tblproduct set prodcategId=?,prodDesc=?,prodPics=? where prodDescId=?";
			$qry=$db->prepare($prodUpdate);
			$qry->execute(array($prodTitle,$prodDesc,$prodImgU,$prodId));
		}
		if($_FILES['picture']['name'] != ""){
			$res=UploadOne($_FILES['picture'],$_FILES['picture']['name']);
			$filename=$_FILES['picture']['name'];
		}else{
			echo ("jef");
		}
		
		echo "<script language='javascript' type='text/javascript'>alert('Successfully Saved!')</script>";
		echo "<script language='javascript' type='text/javascript'>window.open('../products.php','_self')</script>";
	}
	
	
	if(isset($_POST['uid']) && isset($_POST['act'])){//deactivate activate of product
		$uid = $_POST['uid'];
		$act = $_POST['act'];
		$sql="update tblproduct set status=? where prodDescId=?";
		$res=$db->prepare($sql);
		$res->execute(array($act,$uid));
		if($res){
			echo 1;
		}else{
			echo $strDel;
		}
	
	}

	
	if(isset($_POST['save_marcelo'])){
		$m= $_POST['m'];
		$a=$_POST['a'];
		$r= $_POST['r'];
		$c=$_POST['c'];
		$e= $_POST['e'];
		$l=$_POST['l'];
		$o= $_POST['o'];
		$sqlMarcelo="update tblmarcelo set m=?,a=?,r=?,c=?,e=?,l=?,o=?";
		$res=$db->prepare($sqlMarcelo);
		$res->execute(array($m,$a,$r,$c,$e,$l,$o));
		echo "<script language='javascript' type='text/javascript'>alert('Successfully Saved!')</script>";
		echo "<script language='javascript' type='text/javascript'>window.open('../AboutUs.php','_self')</script>";
	}
	
	if(isset($_POST['add_news'])){
		
		function UploadOne($fname,$newName){
		$uploaddir="../images/news/";
			if(is_uploaded_file($fname['tmp_name'])){
				$filname=basename($fname['name']);
				
				$uploadfile = $uploaddir . $newName/*.".".end(explode('.',$fname['name']))*/; 
				echo $uploadfile;
					if (move_uploaded_file($fname['tmp_name'],$uploadfile)){
						echo $res="File " . $filename ." Was successfully uploaded and stored";
					}else{
						echo $res = "Could not move ".$fname['tmp_name']." to ".$uploadfile."<br>"; 
					}
			}else{
				$res = "File ".$fname['name']." failed to upload."; 
			}
			echo ($res);
		}
		
		
		$newsId=$_POST['txtnewsId'];
		$newsTitle=$_POST['txtTitle'];
		$newsDate=$_POST['txtDate'];
		$newsDesc=$_POST['txtND'];
		$newsImg=$_FILES['picture']['name'];
		$hpics=$_POST['hpics'];
		if($newsId==null){
			$sql="Insert into tblnews(news_title,news_desc,news_date,news_pics)values(:newsTitle,:newsDesc,:newsDate,:newsImg)";
			$qry=$db->prepare($sql);
			$qry->execute(array('newsTitle'=>$newsTitle,':newsDesc'=>$newsDesc,':newsDate'=>$newsDate,':newsImg'=>$newsImg));
		}else{
			if($newsImg==null){
				$pics=$hpics;
			}else{
				$pics=$newsImg;
			}
			$sql="update tblnews set news_title=?,news_desc=?,news_date=?,news_pics=? where newsId=?";
			$qry=$db->prepare($sql);
			$qry->execute(array($newsTitle,$newsDesc,$newsDate,$pics,$newsId));
		}
		
		if($_FILES['picture']['name'] != ""){
			$res=UploadOne($_FILES['picture'],$_FILES['picture']['name']);
			$filename=$_FILES['picture']['name'];
		}else{
			echo ("jef");
		}
		echo "<script language='javascript' type='text/javascript'>alert('Successfully Saved!')</script>";
		echo "<script language='javascript' type='text/javascript'>window.open('../newsandfetured.php','_self')</script>";
	}
	

	if(isset($_POST['nId'])){ /*<--pan delete news*/
		$nId = $_POST['nId'];
		$sql="DELETE FROM tblnews where newsId=?";
		$res=$db->prepare($sql);
		$res->execute(array($nId));
		if($res){
			echo 1;
		
		}
	}
	
	if(isset($_POST['abtCms'])){ //update a about(Eng and Tag)
		$abtId=$_POST['abtId'];
		$abtTag=$_POST['txtAbttag'];
		$abtEng=$_POST['txtAbtEng'];
			$abtUpdate="Update tblvmc set vmcEng=?,vmcTag=? where vmcId=?";
			$qry=$db->prepare($abtUpdate);
			$qry->execute(array($abtEng,$abtTag,$abtId));
			if($qry){
				echo 1;
			}
		
		echo "<script language='javascript' type='text/javascript'>alert('Successfully Saved!')</script>";
		echo "<script language='javascript' type='text/javascript'>window.open('../AboutUs.php','_self')</script>";
	}	
	
	if(isset($_POST['add_history'])){//edit of history
		$hryDesc=$_POST['txtHdesc'];
		$sqlHistory="Update tblhistory set historyDesc=?";
		$res=$db->prepare($sqlHistory);
		$res->execute(array($hryDesc));
		if($res){
			echo 1;
		}
		echo "<script language='javascript' type='text/javascript'>alert('Successfully Saved!')</script>";
		echo "<script language='javascript' type='text/javascript'>window.open('../AboutUs.php#history','_self')</script>";
	}
	if(isset($_POST['add_welcome'])){ //add welcome
	
		
		$txtId=$_POST['txtId'];
		$txtTitle=$_POST['txtTitle'];
		$txtAuthor=$_POST['txtAuthor'];
		$txtPosition=$_POST['txtPosition'];
		$txtPics=$_FILES[''];
		$txtHdesc=$_POST['txtHdesc'];
		echo  $txtHdesc; 
			//$strSql="Update tblwelcome set titlew=?,desc_d=?,by=?,wposition=? ";
			$strSql="Update tblwelcome set desc_d=?";
			$qry=$db->prepare($strSql);
			$qry->execute(array($txtHdesc));
			//$qry->execute(array($txtTitle,$txtHdesc,$txtAuthor,$txtPosition));
		echo "<script language='javascript' type='text/javascript'>alert('Successfully Saved!')</script>";
		echo "<script language='javascript' type='text/javascript'>window.open('../index.php','_self')</script>";
	}
	
	if(isset($_POST['add_partners'])){ //add partners
		function UploadOne($fname,$newName){
		$uploaddir="../images/partners/";
			if(is_uploaded_file($fname['tmp_name'])){
				$filname=basename($fname['name']);
				$uploadfile = $uploaddir . $newName/*.".".end(explode('.',$fname['name']))*/; 
				echo $uploadfile;
					if (move_uploaded_file($fname['tmp_name'],$uploadfile)){
						echo $res="File " . $filename ." Was successfully uploaded and stored";
					}else{
						echo $res = "Could not move ".$fname['tmp_name']." to ".$uploadfile."<br>"; 
					}
			}else{
				$res = "File ".$fname['name']." failed to upload."; 
			}
			echo ($res);
		}
		$partId=$_POST['partId'];
		$txtpartName=$_POST['txtpartName'];
		$txtpartLogo=$_FILES['txtpartLogo']['name'];
		$txtpartUrl=$_POST['txtpartUrl'];
		if($partId==null){
			$strSql="Insert into tblpartners(partnersName,partnersLogo,partnersUrl)values(:txtpartName,:txtpartLogo,:txtpartUrl)";
			$qry=$db->prepare($strSql);
			$qry->execute(array('txtpartName'=>$txtpartName,':txtpartLogo'=>$txtpartLogo,':txtpartUrl'=>$txtpartUrl));
		}else{
			$strSql="Update tblpartners set partnersName=?,partnersLogo=?,partnersUrl=? where partnersId=?";
			$qry=$db->prepare($strSql);
			$qry->execute(array($txtpartName,$txtpartLogo,$txtpartUrl,$partId));
		}
		if($_FILES['txtpartLogo']['name'] != ""){
			$res=UploadOne($_FILES['txtpartLogo'],$_FILES['txtpartLogo']['name']);
			$filename=$_FILES['txtpartLogo']['name'];
		}else{
			echo ("jef");
		}
		echo "<script language='javascript' type='text/javascript'>alert('Successfully Saved!')</script>";
		echo "<script language='javascript' type='text/javascript'>window.open('../partners.php','_self')</script>";


	}
	
	if(isset($_POST['pId'])){ /*<--pan delete partners*/
		$pId = $_POST['pId'];
		$sql="DELETE FROM tblpartners where partnersId=?";
		$res=$db->prepare($sql);
		$res->execute(array($pId));
		if($res){
			echo 1;
		}else{
			echo 2;
		}
	
	}
	
	if(isset($_POST['save_board'])){//pang add ng board of trustees
		function UploadOne($fname,$newName){
		$uploaddir="../images/mng/";
			if(is_uploaded_file($fname['tmp_name'])){
				$filname=basename($fname['name']);
				$uploadfile = $uploaddir . $newName/*.".".end(explode('.',$fname['name']))*/; 
				echo $uploadfile;
					if (move_uploaded_file($fname['tmp_name'],$uploadfile)){
						echo $res="File " . $filename ." Was successfully uploaded and stored";
					}else{
						echo $res = "Could not move ".$fname['tmp_name']." to ".$uploadfile."<br>"; 
					}
			}else{
				$res = "File ".$fname['name']." failed to upload."; 
			}
			echo ($res);
		}
		$boardId=$_POST['boardId'];
		$txtboardName=$_POST['txtboardName'];
		$txtboardPosition=$_POST['txtboardPosition'];
		$txtboardComp=$_POST['txtboardComp'];
		$txtpartLogo=$_FILES['txtpartLogo']['name'];
		$txtpartLogoEdit=$_POST['pics'];
		if($boardId==null){
			$strSql="Insert into tblboardt(boardPics,BoardName,boardPosition,boardCompany)values(:txtpartLog,:txtboardName,:txtboardPosition,:txtboardComp)";
			$qry=$db->prepare($strSql);
			$qry->execute(array('txtpartLog'=>$txtpartLogo,':txtboardName'=>$txtboardName,':txtboardPosition'=>$txtboardPosition,':txtboardComp'=>$txtboardComp));
			 
		}else{
			if($txtpartLogo==null){
				$picsUpdate=$txtpartLogoEdit;
			}else{
				$picsUpdate=$txtpartLogo;
			}
				$strSql="Update tblboardt set boardPics=?,BoardName=?,boardPosition=?,boardCompany=? where boardId=?";
				$qry=$db->prepare($strSql);
				$qry->execute(array($picsUpdate,$txtboardName,$txtboardPosition,$txtboardComp,$boardId));
		}
			if($_FILES['txtpartLogo']['name'] != ""){
				$res=UploadOne($_FILES['txtpartLogo'],$_FILES['txtpartLogo']['name']);
				$filename=$_FILES['txtpartLogo']['name'];
			}else{
				//echo ("jef");
			}
			echo "<script language='javascript' type='text/javascript'>alert('Successfully Saved!')</script>";
			echo "<script language='javascript' type='text/javascript'>window.open('../AboutUs.php#board','_self')</script>";	
	}

	if(isset($_POST['boardId'])){ //pang delete ng board of trustees
		$boardId = $_POST['boardId'];
		$sql="DELETE FROM tblboardt where boardId=?";
		$res=$db->prepare($sql);
		$res->execute(array($boardId));
		if($res){
			echo 1;
		}else{
			echo 2;
		}
	}
	if(isset($_POST['save_steering'])){ //save steeringcom
		function UploadOne($fname,$newName){
		$uploaddir="../images/str/";
			if(is_uploaded_file($fname['tmp_name'])){
				$filname=basename($fname['name']);
				$uploadfile = $uploaddir . $newName/*.".".end(explode('.',$fname['name']))*/; 
				echo $uploadfile;
					if (move_uploaded_file($fname['tmp_name'],$uploadfile)){
						echo $res="File " . $filename ." Was successfully uploaded and stored";
					}else{
						echo $res = "Could not move ".$fname['tmp_name']." to ".$uploadfile."<br>"; 
					}
			}else{
				$res = "File ".$fname['name']." failed to upload."; 
			}
			echo ($res);
		}
		$steerId=$_POST['steerId'];
		$txtsteerName=$_POST['txtsteerName']; 
		$txtsteerPosition=$_POST['txtsteerPosition'];
		$txtpartLogo=$_FILES['txtpartLogo']['name'];
		$pic=$_POST['pics'];
		if($steerId==null){
			$strSql="Insert into tblsteeringcom(img,steerName,steerPosition)values(:txtpartLogo,:txtsteerName,:txtsteerPosition)";
			$qry=$db->prepare($strSql);
			$qry->execute(array('txtpartLogo'=>$txtpartLogo,':txtsteerName'=>$txtsteerName,':txtsteerPosition'=>$txtsteerPosition));		
		}else{
				if($txtpartLogo==null){
				
					$strPics=$pic;
				}else{
					$strPics=$txtpartLogo;
				}
				$strSql="Update tblsteeringcom set img=?,steerName=?,steerPosition=? where SteerCom=?";
				$qry=$db->prepare($strSql);
				$qry->execute(array($strPics,$txtsteerName,$txtsteerPosition,$steerId));
		}
			if($_FILES['txtpartLogo']['name'] != ""){
				$res=UploadOne($_FILES['txtpartLogo'],$_FILES['txtpartLogo']['name']);
				$filename=$_FILES['txtpartLogo']['name'];
			}else{
			}
			echo "<script language='javascript' type='text/javascript'>alert('Successfully Saved!')</script>";
			echo "<script language='javascript' type='text/javascript'>window.open('../AboutUs.php#Steering_Commitee','_self')</script>";	
	}
	
	
	if(isset($_POST['steerId'])){ //pang delete ng steering comitee
		$steerId = $_POST['steerId'];
		$sql="DELETE FROM tblsteeringcom where SteerCom=?";
		$res=$db->prepare($sql);
		$res->execute(array($steerId));
		if($res){
			echo 1;
		}else{
			echo 2;
		}
	}


	if(isset($_POST['add_user'])){//add user
		$uId=$_POST['txtuId'];
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$mi=$_POST['mi'];
		$uname=$_POST['uname'];
		$pw=$_POST['pw'];
			
		
		$strEmpsql="Insert into tblemployee(fname,mi,lname)values(:fname,:mi,:lname)";
		$qryEmp=$db->prepare($strEmpsql);
		$qryEmp->execute(array('fname'=>$fname,':mi'=>$mi,':lname'=>$lname));
		$lastId = $db->lastInsertId();
		if(uId==null){
		
		$strUsersql="Insert into tbluser(empId,uname,pw)values(:lastId,:uname,:pw)";
		$qryUser=$db->prepare($strUsersql);
		$qryUser->execute(array('lastId'=>$lastId,':uname'=>$uname,':pw'=>$pw)); 
		}else{
		$UpEmpsql="Update tblemployee set fname=?,mi=?,lname=? where empId=?";
		$upEmp=$db->prepare($UpEmpsql);
		$upEmp->execute(array($fname,$mi,$lname,$uId));
		
		$upUser="Update tbluser set uname=?,pw=? where empId=?";
		$qryUser=$db->prepare($upUser);
		$qryUser->execute(array($uname,$pw,$uId));
		
		}
		echo "<script language='javascript' type='text/javascript'>alert('Successfully Saved!')</script>";
		echo "<script language='javascript' type='text/javascript'>window.open('../user.php','_self')</script>";	

	
	}
	
	if(isset($_POST['eId'])){
		$eId=$_POST['eId'];
		$upOne=1;
		$strSql="Update tbluser set status=? where empId=?";
		$res=$db->prepare($strSql);
		$res->execute(array($upOne,$eId));
		if($res){
			echo 1;
		}else{
			echo 2;
		}

		
		
	
	}
	
	if(isset($_POST['add_social'])){ //adding social
	
	function UploadOne($fname,$newName){
		$uploaddir="../images/social/";
			if(is_uploaded_file($fname['tmp_name'])){
				$filname=basename($fname['name']);
				$uploadfile = $uploaddir . $newName/*.".".end(explode('.',$fname['name']))*/; 
				echo $uploadfile;
					if (move_uploaded_file($fname['tmp_name'],$uploadfile)){
						echo $res="File " . $filename ." Was successfully uploaded and stored";
					}else{
						echo $res = "Could not move ".$fname['tmp_name']." to ".$uploadfile."<br>"; 
					}
			}else{
				$res = "File ".$fname['name']." failed to upload."; 
			}
			echo ($res);
		}

	
	
	$sname=$_POST['sname'];
	$surl=$_POST['surl'];
	$txtpartLogo=$_FILES['ic']['name'];
	$txtuId=$_POST['x'];
	$txtmi=$_POST['txtmi'];
	
	if($txtuId==null){
		$strSql="Insert into tblsoaacial(social_desk,social_url,social_pics)values(:sname,:surl,:txtpartLogo)";
		$res=$db->prepare($strSql);
		$res->execute(array('sname'=>$sname,':surl'=>$surl,':txtpartLogo'=>$txtpartLogo));
	}else{
		if($txtpartLogo==null){
			$pics=$txtmi;
			
		}else{
			$pics=$txtpartLogo;
		}
	
		$strSql="Update tblsocial set social_desk=?,social_url=?,social_pics=? where socialId=?";
		$res=$db->prepare($strSql);
		$res->execute(array($sname,$surl,$pics,$txtuId));
	}
	
			if($_FILES['ic']['name'] != ""){
				$res=UploadOne($_FILES['ic'],$_FILES['ic']['name']);
				$filename=$_FILES['ic']['name'];
			}else{
			}

		echo "<script language='javascript' type='text/javascript'>alert('Successfully Saved!')</script>";
		echo "<script language='javascript' type='text/javascript'>window.open('../social_network.php','_self')</script>";	

	
	
	}
	if(isset($_POST['sId'])){
		$sId=$_POST['sId'];
		$upOne=1;
		$strSql="Update tblstatus set status=? where socialId=?";
		$res=$db->prepare($strSql);
		$res->execute(array($upOne,$sId));
		if($res){
			echo 1;
		}else{
			echo 2;
		}

		
		
	
	}

	


?>







