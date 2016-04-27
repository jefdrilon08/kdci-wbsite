<?php

class loader1{
	//public $db;
	//function _construct($db){
//		$this->db=$db;
//	}
	
	public function welcome($db){
	
		$sql="Select * from tblwelcome";
		$res=$db->prepare($sql);
		$res->execute();	
		while($rows=$res->fetch(PDO::FETCH_ASSOC)){
		
		$strOut.='<img src="images/welcome/'.$rows['wPics'].'" alt="Image 12"  class=" image_frame_160 left "  style="margin-right:10px">';
		$strOut.='<p style= font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:100><a href="#">'.$rows['titlew'].'</a></p>';
		$strOut.='<p>By: '.$rows['by'].' </p>';
		$strOut.=$rows['desc_d'];
		}
		echo $strOut;
	}
	
	public function prodintro($db){
		$sql="select * from tblprodintro";
		$res=$db->prepare($sql);
		$res->execute();
		while($rows=$res->fetch(PDO::FETCH_ASSOC)){
			$strOut.=$rows['prodDescIntro'];
		}
	
		echo $strOut;
	
	}
	
	

	public function kdciupdate($db){
		$sql="Select * from tblkupdate where status=0";
		$res=$db->prepare($sql);
		$res->execute();		
		
		while($row = $res->fetch(PDO::FETCH_ASSOC)){
		$strUpdate.='<table><tr><td style="width:1150px" ><p style="font-family:Arial, Helvetica, sans-serif;font-size:25px;color:black;">KDCI at a GLANCE As of '.$row['Kmonth'].'</p></td><td><a href="cms/cms_kupdate.php" class="fancybox fancybox.ajax"><img src = "images/edit-icon.png" height="30" width="30" alt = "edit" title = "edit"/></a></td><td><a href="cms/cms_kupdate.php?kupdate='.$row['kupdateId'].'" class="fancybox fancybox.ajax"><img src = "images/edit-icon.png" height="30" width="30" alt = "edit" title = "edit"/></a></td></tr></table>';
		$strUpdate.='<table class="tablestyle" style="font-family:Arial, Helvetica, sans-serif; color:WindowText;font-size:14px;width:400px" border="1"  >';
			$strUpdate.='<tr ><td style=" padding-left:5px" >Number of Clients</td><td style=" padding-left:5px">'.stripslashes($row['NumberClients']).'</td></tr>';
			$strUpdate.='<tr ><td style=" padding-left:5px" >Number of Centers</td><td style=" padding-left:5px">'.stripslashes($row['NumberCenter']).'</td></tr>';
			$strUpdate.='<tr ><td style=" padding-left:5px" >Number of Baranggay</td><td style=" padding-left:5px">'.stripslashes($row['NumberBrgy']).'</td></tr>';
			$strUpdate.='<tr ><td style=" padding-left:5px" >Number of Field Offices</td><td style=" padding-left:5px">'.stripslashes($row['NumberFO']).'</td></tr>';
			$strUpdate.='<tr ><td style=" padding-left:5px" >Number of Staffs</td><td style=" padding-left:5px">'.stripslashes($row['NumberStaff']).'</td></tr>';
			$strUpdate.='<tr ><td style=" padding-left:5px" >Total Portfolio</td><td style=" padding-left:5px">pHp '.stripslashes($row['TotalPort']).'</td></tr>';
			$strUpdate.='<tr ><td style=" padding-left:5px" >Repayment Rate</td><td style=" padding-left:5px">'.stripslashes($row['RepaymentRate']).' %</td></tr>';
			$strUpdate.='<tr ><td style=" padding-left:5px" >PAR Rate</td><td style=" padding-left:5px"> '.stripslashes($row['PARrate']).' %</td></tr>';
			$strUpdate.='<tr ><td style=" padding-left:5px" >Peso Rating</td><td style=" padding-left:5px">'.stripslashes($row['PesoRating']).'</td></tr>';
			
		}
	    $strUpdate.='</table>';
		echo $strUpdate;
	}
	
	
	public function jobs($db){
		$sqlJob="Select * from tbljobs";
		$res=$db->prepare($sqlJob);
		$res->execute();
		$strJob.=' <table cellpadding=1 cellspacing=1 border=0 class=display id=tbl>';
		$strJob.='<thead><tr><th>PDF File</th><th>Job Title</th><th>Date Post</th><th>Action</th></tr></thead>';
		$strJob.='<tbody>';
		while($row = $res->fetch(PDO::FETCH_ASSOC)){
			$strJob.='<tr><td><center><a href="#"><img src="../images/pdf.gif"></a></center></td><td><a href="#">'.stripslashes($row['jobTitle']).'</a></td><td><a href="#">'.$row['jobDesc'].'</a></td><td><center><a href="jobs.php?jef='.$row['jobId'].'"><img src = "images/edit-icon.png" height="30" width="30" alt = "edit" title = "edit"/></a><a href="#"><span onclick="delete_jobs('.$row['jobId'].')"><img src = "images/edit_delete.png" height="30" width="30" alt = "Delete"></span></a></center></td></tr>';
		}		//    	<a href="#"><span onclick="get_vision(1)"><img src = "images/edit_delete.png" height="30" width="30" alt = "Delete"></span></a>	
		$strJob.='</tbody>';
		$strJob.='</table>';
		echo $strJob;
	}
	
	
	
	/**About us Loader*/
	public function history($db){
		$sqlHistory="Select * from tblhistory";
		$res=$db->prepare($sqlHistory);
		$res->execute();
		//$strHistory.='<table><tr><td style="width:1150px"><p style="font-family:Arial, Helvetica, sans-serif;font-size:25px;color:black">History</p></td><td><a href="cms/cms_history.php?jef='.$row['jobId'].'" class="fancybox fancybox.ajax"><img src = "images/edit-icon.png" height="30" width="30" alt = "edit" title = "edit"/></a></td></tr></table>';
		   $strHistory.='  <div id="history" class="col_b float_f" style="width:900px;padding-left:5px; border-bottom:thin black dashed ">';
                 while($row=$res->fetch(PDO::FETCH_ASSOC)){
             		$strHistory.=stripslashes($row['historyDesc']) ;
				}
			$strHistory.='</div>';
			echo $strHistory;
	}
	
	
	public function coreValues($db){
		$sqlCv="Select * from tblcorevalues";
		$res=$db->prepare($sqlCv);
		$res->execute();
		
		$strCv.=' <table><tr><td ><p style="font-family:Arial, Helvetica, sans-serif;font-size:25px;color:black;width:140px">Core Values</p></td><td style="width:1150px"><p style="font-family:Arial, Helvetica, sans-serif;font-size:15px">(Pagpapahalaga)</p></td><td><a href="jobs.php?jef='.$row['jobId'].'" class="fancybox fancybox.ajax"><img src = "images/edit-icon.png" height="30" width="30" alt = "edit" title = "edit"/></a></td></tr></table>';
		$strCv.='	           <div style="float:left;width:440px; margin-left:1px"  >';
		while($row=$res->fetch(PDO::FETCH_ASSOC)){
			$strCv.=stripslashes($row['coreDesc']);
		}
		$strCv.='</div>';
		echo $strCv;
	}
	
	public function MARCELO($db){
		$sqlMarcelo="Select	* from tblmarcelo";
		$res=$db->prepare($sqlMarcelo);
		$res->execute();
	$strMarcelo.=' <table><tr><td ><p style="font-family:Arial, Helvetica, sans-serif;font-size:25px;color:black;width:170px">M.A.R.C.E.L.O</p></td><td style="width:1150px"><p style="font-family:Arial, Helvetica, sans-serif;font-size:15px">(Guiding Principal)</p></td><td><a href="cms/cms_marcelo.php?jef='.$row['jobId'].'" class="fancybox fancybox.ajax"><img src = "images/edit-icon.png" height="30" width="30" alt = "edit" title = "edit"/></a></td></tr></table>';
	$strMarcelo.='<div style="float:left;width:440px; margin-left:1px"  >';
	$strMarcelo.='<ul style=" font-family:Arial, Helvetica, sans-serif;font-size:25px">';
	while($row=$res->fetch(PDO::FETCH_ASSOC)){
	$strMarcelo.='<li style=" margin-bottom:15px"><b>M</b>'.stripslashes($row['M']).'</li>';
	$strMarcelo.='<li style=" margin-bottom:15px"><b>A</b>'.stripslashes($row['A']).'</li>';
	$strMarcelo.='<li style=" margin-bottom:15px"><b>R</b>'.stripslashes($row['R']).'</li>';
	$strMarcelo.='<li style=" margin-bottom:15px"><b>C</b>'.stripslashes($row['C']).'</li>';
	$strMarcelo.='<li style=" margin-bottom:15px"><b>E</b>'.stripslashes($row['E']).'</li>';
	$strMarcelo.='<li style=" margin-bottom:15px"><b>L</b>'.stripslashes($row['L']).'</li>';
	$strMarcelo.='<li style=" margin-bottom:15px"><b>O</b>'.stripslashes($row['O']).'</li>';
	}
	$strMarcelo.='</ul>';
	$strMarcelo.='</div>';
	echo $strMarcelo;
	}
	
	
	public function vision($db){
	$sqlVersion="Select * from tblvmc where vmcId=1";
	$res=$db->prepare($sqlVersion);
	$res->execute();

					while($row=$res->fetch(PDO::FETCH_ASSOC)){	
					$strVision.='<table><tr><td><p style="font-family:Arial, Helvetica, sans-serif;font-size:25px;color:black;width:70px">Vision</p></td><td  style="width:1150px"><p style="font-family:Arial, Helvetica, sans-serif;font-size:15px">(Tinatanaw)</p></td><td><a href="cms/cms_vision.php" class="fancybox fancybox.ajax"><span onclick="get_vision(1)"><img src = "images/edit-icon.png" height="30" width="30" alt = "Delete"></span></a></td></tr></table>';
		              $strVision.='  <div style="float:left;width:440px; margin-left:1px" align="center"  >';							    
		              	$strVision.=stripslashes($row['vmcEng']);
			       	  $strVision.=' 	</div>';
			       		
			       	  $strVision.='	<div style="float:right;width:440px;" align="center">';
				      	$strVision.=stripslashes($row['vmcTag']);
			       	  $strVision.='	</div>';
			      }
			       	  echo $strVision;
	
	
	}
	
	public function mission($db){
	$strMission.='<table><tr  style="width=10px"><td><p style="font-family:Arial, Helvetica, sans-serif;font-size:25px;color:black;width:87px">Mission</p></td><td  style="width:1150px"><p style="font-family:Arial, Helvetica, sans-serif;font-size:15px">(Gawain)</p></td><td><a href="cms/cms_mission.php?jef='.$row['jobId'].'" class="fancybox fancybox.ajax"><img src = "images/edit-icon.png" height="30" width="30" alt = "edit" title = "edit"/></a></td></tr></table>';
					 $strMission.='   <div style="float:left;width:440px; margin-left:1px" align="center"  >';
					 $sqlMissionE="Select * from tblvmc where vmcId=2";
					 $res=$db->prepare($sqlMissionE);
					 $res->execute();
					 //English
					 while($row=$res->fetch(PDO::FETCH_ASSOC)){
					 $strMission.=stripslashes($row['vmcEng']);
				     $strMission.='</table>';
			       	 $strMission.='	</div>';
					//Filipino			       		
			       	 $strMission.='	<div style="float:right;width:440px;" align="center">';
					 	$strMission.=stripslashes($row['vmcTag']);
				     }
			       	 $strMission.=' 	</div>';

					echo $strMission;
	
	
	}
	
	public function strategy($db){
	$strStra.='<table><tr><td><p style="font-family:Arial, Helvetica, sans-serif;font-size:25px;color:black;width:90px">Strategy</p></td><td  style="width:1150px"><p style="font-family:Arial, Helvetica, sans-serif;font-size:15px">(Pamamaraan)</p></td><td><a href="cms/cms_strategy.php?jef='.$row['jobId'].'" class="fancybox fancybox.ajax"><img src = "images/edit-icon.png" height="30" width="30" alt = "edit" title = "edit"/></a></td></tr></table>';
				/*English*/
				$sqlStraE="Select * from tblvmc where vmcId=3";
				$res=$db->prepare($sqlStraE);
				$res->execute();
		        $strStra.='<div style="float:left;width:440px; margin-left:1px" align="center"  >';
			       while($row=$res->fetch(PDO::FETCH_ASSOC)){
			       		$strStra.=stripslashes($row['vmcEng']);

			   	$strStra.='</div>';
			   
			   /*tagalog*/
			   $strStra.='<div style="float:right;width:440px;" align="center">';
			   	$strStra.=stripslashes($row['vmcTag']);
			   	}
			   $strStra.='    		</div>';

			echo $strStra;
	}
	
	
	public function PangakosaPagtataya($db){
			$sqlPspT="SELECT * FROM tblvmc WHERE vmcId=4";
			$res=$db->prepare($sqlPspT);
			$res->execute();
	
			$strPsP.='<table><tr><td><p style="font-family:Arial, Helvetica, sans-serif;font-size:25px;color:black;width:255px">Pangako sa Pagtataya</p></td><td style="width:1150px"><p style="font-family:Arial, Helvetica, sans-serif;font-size:15px">(Pamamaraan)</p></td><td><a href="cms/cms_pangako.php?jef='.$row['jobId'].'" class="fancybox fancybox.ajax"><img src = "images/edit-icon.png" height="30" width="30" alt = "edit" title = "edit"/></a></td></tr></table>';
			//Filipino
		   	$strPsP.=' <div style="float:left;width:440px; margin-left:1px" align="center"  >';
			$strPsP.='<tr>';
				while($row=$res->fetch(PDO::FETCH_ASSOC)){
					$strPsP.=stripslashes($row['vmcEng']);
					$strPsP.='</div>';
			  			
 			$strPsP.='<div style="float:right;width:440px;" align="center">';
				$strPsP.=stripslashes($row['vmcTag']);
			}
			$strPsP.='</div>';
			echo $strPsP;
	}
	
	public function certificate($db){
	
			 $strCer.='<ul id="recieve">';
	         $strCer.='   <li><a href="../images/recognation/Certificate%20of%20Appreciation%20from%20MCPI.jpg" rel="lightbox[portfolio]"><img src="../images/recognation/Certificate%20of%20Appreciation%20from%20MCPI.jpg" alt="Image 01" />Certificate of Appreciation</a></li>';
	         $strCer.='   <li><a href="../images/recognation/Certificate%20of%20Appreciation.jpg" rel="lightbox[portfolio]"><img src="../images/recognation/Certificate%20of%20Appreciation.jpg" alt="Image 02" />Certificate of Appreciation</a></li>';
	         $strCer.='   <li><a href="../images/recognation/Certificate%20of%20Recognition%20(Philssa).jpg" rel="lightbox[portfolio]"><img src="../images/recognation/Certificate%20of%20Recognition%20(Philssa).jpg" alt="Image 03" />Certificate of Recognation</a></li>';
	         $strCer.='   <li><a href="../images/recognation/cpt(KDCI).jpg" rel="lightbox[portfolio]"><img src="../images/recognation/cpt(KDCI).jpg" alt="Image 04" />Certificate of Pricing Transparency</a></li>';
			 $strCer.=' </ul>';
			 echo $strCer;
	
	}
	
	
	public function BoardofTrustees($db){
		$sqlBot="Select * from tblboardt";
		$res=$db->prepare($sqlBot);
		$res->execute();
		$strBot.='<table border="1px" style="font-family:Arial, Helvetica, sans-serif;font-size:14px">';
		$strBot.='<tr><th style="  padding-left:150px;padding-right:150px" colspan="2">Name</th><th style="  padding-left:80px;padding-right:80px">Position</th><th style="  padding-left:80px;padding-right:80px">Company</th><th>Action</th></tr>';
		while($row=$res->fetch(PDO::FETCH_ASSOC)){
		$strBot.='<tr><td><img src="images/mng/'.$row['boardPics'].'"  style="margin:5px 5px 5px 5px ; width:100px;height:100px"/></td><td style="padding-left:3px" >'.$row['BoardName'].'</td><td  style="padding-left:5px" >'.$row['boardPosition'].'</td><td  style="padding-left:5px" >'.$row['boardCompany'].'</td><td><center><a href="cms/cms_board.php?boardId='.$row['boardId'].'" class="fancybox fancybox.ajax"><img src = "images/edit-icon.png" height="30" width="30" alt = "edit" title = "edit"/></a><a href="#"><span onclick="delete_board('.stripslashes($row['boardId']).')"><img src = "images/edit_delete.png" height="30" width="30" alt = "Delete"></span></a></center></td></tr>';
		}
		$strBot.='</table>';
		echo $strBot;
		
	}
	
	public function steeringCommitee($db){
		$sqlComm="Select * from tblsteeringcom";
		$res=$db->prepare($sqlComm);
		$res->execute();
		$strSc.='<table><tr><td  style="width:1150px" ><p style="font-family:Arial, Helvetica, sans-serif;font-size:25px;color:black;">Steering Committee</p></td><td><a href="cms/cms_steering.php" class="fancybox fancybox.ajax"><img src = "images/edit-icon.png" height="30" width="30" alt = "edit" title = "edit"/></a></td></tr></table>';
		$strSc.='<table border="1px" style="font-family:Arial, Helvetica, sans-serif;font-size:14px">';
		$strSc.='<tr><th style="  padding-left:150px;padding-right:150px" colspan="2">Name</th><th style="  padding-left:80px;padding-right:80px">Position</th><th style="  padding-left:40px;padding-right:40px">Action</th></tr>';
		while($row=$res->fetch(PDO::FETCH_ASSOC)){
			$strSc.='<tr><td><img src="images/str/'.$row['img'].'" style="margin:5px 5px 5px 5px ; width:100px;height:100px"/></td><td style="  padding-left:130px;padding-right:130px;width:200px">'.$row['steerName'].'</td><td style="  padding-left:50px;padding-right:50px">'.$row['steerPosition'].'</td><td><center><a href="cms/cms_steering.php?steeringId='.$row['SteerCom'].'" class="fancybox fancybox.ajax"><img src = "images/edit-icon.png" height="30" width="30" alt = "edit" title = "edit"/></a><a href="#"><span onclick="delete_steering('.stripslashes($row['SteerCom']).')"><img src = "images/edit_delete.png" height="30" width="30" alt = "Delete"></span></a></center></td></tr>';
		}
		$strSc.='</table>';
		echo $strSc;
	}
/*************************************End of about************************************/	
/*************************************Products****************************************/
	public function products($db){
		$strOut="";
		$perPage=5;
		
		
		$strProductC="Select * from tblproduct";
		$res=$db->prepare($strProductC);
		$res->execute();
		$prodCount=$res->rowCount();
		$numPage=$prodCount/$perPage;
			if (isset($_GET['start'])){
				$start=intval($_GET['start']);
			}else{
				$start=0;	
			}
		$sqlProduct="Select * from tblproduct limit {$start},{$perPage}";
		$res2=$db->prepare($sqlProduct);
		$res2->execute();
		while($row=$res2->fetch(PDO::FETCH_ASSOC)){
			if($row['status']==0){
				$stat1="Deactivate";
				$act=1;
			}else{
				$stat1="Activate";
				$act=0;
			}
			$strProducts.='<div class="post_box"> ';
            $strProducts.='<div class="col_b float_l" style="margin-top:10px;margin-left:10px;width:890px">';
            $strProducts.="<img  src='images/prod/".$row['prodPics']."' alt='Image 12' class='image_frame_300' />";
            $strProducts.='<div class="post_text" style="width:560px">';
            $strProducts.='<p style="font-family:Arial, Helvetica, sans-serif;font-size:17px;color:black">'.stripslashes($row['prodcategId']).'</p>';
            $strProducts.=substr(nl2br(stripslashes($row['prodDesc'])),0,273);
            $strProducts.='<table><tr><td><a href="products.php?prod='.$row['prodDescId'].'" class="more">Edit</a></td><td><a href="" onclick="activate('.$row['prodDescId'].','.$act.')" class="more">'.$stat1.'</a></td></tr></table>';
            $strProducts.='</div>';
			$strProducts.='</div>';
            $strProducts.='<div ></div>';
	        $strProducts.='</div> ';
        }
           $strProdFag.='<div class="pagging">';
           $strProdFag.='<ul>';
		        for($page=0 ; $page < $numPage ; $page++ ){
		        	$strProdFag=$strProdFag." &nbsp "."<li><a href='products.php?start=".($page*$perPage)."'>".($page+1)."</a></li>";
		        }
	        $strProdFag.='</ul>';
	        $strProdFag.='</div>';
        
        echo $strProducts;
        echo $strProdFag;
      
	
	}
/*************************************End of Products*********************************/
/*************************************News****************************************/
	public function news($db){
		$strOut="";
		$perPage=5;
		$strProductC="Select * from tblnews";
		$res=$db->prepare($strProductC);
		$res->execute();
		$rCount = $res->rowCount();
		$numPage=$rCount / $perPage;
			if (isset($_GET['start'])){
				$start=intval($_GET['start']);
			}else{
				$start=0;	
			}
	$strNews="Select * from tblnews limit {$start},{$perPage}";
	$res2=$db->prepare($strNews);
	$res2->execute();
		while($row=$res2->fetch(PDO::FETCH_ASSOC)){
			$strProducts.='<div class="post_box"> ';
            $strProducts.='<div class="col_b float_l" style="margin-top:10px;margin-left:10px;width:890px">';
            $strProducts.="<img  src='images/news/".$row['news_pics']."' alt='Image 12' class='image_frame_300' />";
            $strProducts.='<div class="post_text" style="width:560px">';
            $strProducts.='<p style="font-family:Arial, Helvetica, sans-serif;font-size:17px;color:black">'.stripslashes($row['news_title']).'</p>';
            $strProducts.='<p style="font-family:Arial, Helvetica, sans-serif;font-size:17px;color:black">'.$row['news_date'].'</p>';
            $strProducts.=substr(nl2br(stripslashes($row['news_desc'])),0,273);
            $strProducts.='<table><tr><td><a href="newsandfetured.php?news='.$row['newsId'].'" onclick="" class="more">Edit</a></td><td><a href="#" onclick="delNews('.$row['newsId'].')" class="more">Delete</a></td></tr></table>';
            $strProducts.='</div>';
			$strProducts.='</div>';
            $strProducts.='<div ></div>';
        $strProducts.='</div> ';
        }
           $strProducts1.='  <div class="pagging">';
           $strProducts1.=' <ul>';
		        for($page=0 ; $page < $numPage ; $page++ ){
		        	$strProducts1=$strProducts1." &nbsp "."<li><a href='newsandfetured.php?start=".($page*$perPage)."'>".($page+1)."</a></li>";
		        }
	        $strProducts1.='</ul>';
	        $strProducts1.='</div>';
        echo $strProducts;
        echo $strProducts1;
	}
/*************************************End of news*********************************/
/*************************************partners*********************************/
	
	public function partners($db){
		$sqlPartners="Select * from tblpartners";
		$res=$db->prepare($sqlPartners);
		$res->execute();
		$strPartners.=' <table cellpadding=1 cellspacing=1 border=0 class=display id=tbl>';
		$strPartners.='<thead><tr><th>Image</th><th>Partners Name</th><th>Partners Url</th><th>Action</th></tr></thead>';
		$strPartners.='<tbody>';
		while($row = $res->fetch(PDO::FETCH_ASSOC)){
			$strPartners.='<tr><td><center><a href="#"><img  height="100" width="100" src="images/partners/'.$row['partnersLogo'].'"></a></center></td><td><a href="#">'.stripslashes($row['partnersName']).'</a></td><td><a href="#">'.$row['partnersUrl'].'</a></td><td><center><a href="cms/cms_partners.php?part='.$row['partnersId'].'" class="fancybox fancybox.ajax"><img src = "images/edit-icon.png" height="30" width="30" alt = "edit" title = "edit"/></a><a href="#"><span onclick="delete_partners('.$row['partnersId'].')"><img src = "images/edit_delete.png" height="30" width="30" alt = "Delete"></span></a></center></td></tr>';
		}		//    	<a href="#"><span onclick="get_vision(1)"><img src = "images/edit_delete.png" height="30" width="30" alt = "Delete"></span></a>	
		$strPartners.='</tbody>';
		$strPartners.='</table>';
		echo $strPartners;
	}
/*************************************end of partners*********************************/	

	public function loadUser($db){
		$sqlUser="SELECT tu.userId,tu.empId,CONCAT(te.fname,' ',te.mi,' ',te.lname)AS ename,te.fname,tu.uname,tu.pw,tu.status FROM tbluser tu INNER JOIN tblemployee te ON tu.empId=te.empId where tu.status=0";
		$res=$db->prepare($sqlUser);
		$res->execute();
		
		
		$strUser.=' <table cellpadding=1 cellspacing=1 border=0 class=display id=tbl>';
		$strUser.='<thead><tr><th>Employee Name</th><th>User Name</th><th>Action</th></tr></thead>';
		$strUser.='<tbody>';
		while($row = $res->fetch(PDO::FETCH_ASSOC)){
			$strUser.='<tr style="color:black"><td>'.$row['ename'].'</td><td>'.stripslashes($row['uname']).'</td><td><center><a href="user.php?uId='.$row['empId'].'"><img src = "images/edit-icon.png" height="30" width="30" alt = "edit" title = "edit"/></a><a href="#"><span onclick="delete_user('.$row['empId'].')"><img src = "images/edit_delete.png" height="30" width="30" alt = "Delete"></span></a></center></td></tr>';
		}		
		$strUser.='</tbody>';
		$strUser.='</table>';
		echo $strUser;
	
	
	
	}
	/**************************end of user*********************/
	public function loadSocial($db){
		$sqlUser="Select * from tblsocial";
		$res=$db->prepare($sqlUser);
		$res->execute();
		
		
		$strUser.=' <table cellpadding=1 cellspacing=1 border=0 class=display id=tbl>';
		$strUser.='<thead><tr><th>Icon</th><th>Social Name</th><th>Social Url</th><th>Action</th></tr></thead>';
		$strUser.='<tbody>';
		while($row = $res->fetch(PDO::FETCH_ASSOC)){
			$strUser.='<tr style="color:black"><td><img src="images/social/'.$row['social_pics'].'"></td><td>'.$row['social_desk'].'</td><td>'.$row['social_url'].'</td><td><center><a href="social_network.php?sId='.$row['socialId'].'"><img src = "images/edit-icon.png" height="30" width="30" alt = "edit" title = "edit"/></a><a href="#"><span onclick="delete_social('.$row['socialId'].')"><img src = "images/edit_delete.png" height="30" width="30" alt = "Delete"></span></a></center></td></tr>';
		}		
		$strUser.='</tbody>';
		$strUser.='</table>';
		echo $strUser;
	
	
	
	}
	
	

}


?>
