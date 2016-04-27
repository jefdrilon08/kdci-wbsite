<?php

class loader{
	/*Index Loader*/
	public function loadSlider(){
	   $strOut.=' <div id="templatemo_slider_wrapper">';     
	   $strOut.='     <div id="slider" class="nivoSlider">';
	   $strOut.='         <a href="#"><img src="images/slider/02.jpg" alt="Slider 01" title="This is a sample image for slider" /></a>';
	   $strOut.='         <a href="#"><img src="images/slider/02.jpg" alt="Slider 01" title="This is a sample image for slider" /></a>';
	   $strOut.='         <a href="#"><img src="images/slider/03.jpg" alt="Slider 03" title="This is a sample image for slider" /></a>';
	   $strOut.='         <a href="#"><img src="images/slider/04.jpg" alt="Slider 04" title="This is a sample image for slider" /></a>';
	   $strOut.='     </div>';
	   $strOut.='     <div id="htmlcaption" class="nivo-html-caption">';
	   $strOut.='     	<strong>This</strong> is an example of a HTML caption with <a href="#">a link</a>.';
	   $strOut.='     </div>';
	   $strOut.=' </div>';
	   echo $strOut;
	}
	public function welcome($db){
		$strSql="Select * from tblwelcome";
		$res=$db->prepare($strSql);
		$res->execute();
		if($rows=$res->fetch(PDO::FETCH_ASSOC)){
			$strOut.='<img src="administrator/images/welcome/'.$rows['wPics'].'"  class=" image_frame_160 left "  style="margin-right:10px">';
			$strOut.='<p style= font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:100><a href="#">'.$rows['titlew'].'</a></p>';
			$strOut.='<p>By: '.$rows['by'].' </p>';
			$strOut.=substr(nl2br(stripslashes($rows['desc_d'])),0,595).'<a href="#"> ReadMore..</a>'  ;//595
		}
		
		echo $strOut;
	}
	
	public function news($db){
		$strSql="SELECT * FROM tblnews ORDER BY news_date  LIMIT 0,2 ";
		$res=$db->prepare($strSql);
		$res->execute();
		$rCount = $res->rowCount();
		$strOut.='<div style="padding-left:12px; width:380px " >';
		while($rows=$res->fetch(PDO::FETCH_ASSOC)){
        $strOut.='    	   	<p> <a href="#">'.$rows['news_title'].'</a>07/12/13</p>';
        $strOut.='	 <img src="administrator/images/news/'.$rows['news_pics'].'" alt="Image 12" class="image_frame_300">';
	    $strOut.='    	   	<p></p>';
	    $strOut.='            <p>Sa pagtutulungan ng Kasagana-Ka at ng Ang.Hortaleza Foundation, animnaput dalawang mga nanay mula sa Montal <a href="#">Read more...</a> </p>';
        }     
        $strOut.='    <br class="cleaner" style="style="padding-buttom:12px;" >';
        $strOut.='    </div>';
        echo $strOut;
	}
	public function aboutUs($db){
		$strSql="Select * from tblhistory";
		$res=$db->prepare($strSql);
		$res->execute();
		$strOut.='<div style="padding-left:15px; width:490px " >';
		if($rows=$res->fetch(PDO::FETCH_ASSOC)){
	        $strOut.=substr(nl2br(stripslashes($rows['historyDesc'])),0,1250).'<a href="AboutUs.php#history"> ReadMore..</a>'  ;//923
        }
        $strOut.='</div>';
		echo $strOut;
	}
	
	public function kdciupdate($db){
		$strSql="Select * from tblkupdate where status=0";
		$res=$db->prepare($strSql);
		$res->execute();
		$strOut.='  <table class="tablestyle" style="font-family:Arial, Helvetica, sans-serif; color:WindowText;font-size:14px;width:400px" border="1"  >';
		while($rows=$res->fetch(PDO::FETCH_ASSOC)){
		$strOut.='<h2  style=" border-bottom: 1px solid gray;width:380px;margin-bottom:0px" align="center">KDCI at a GLANCE As of '.$rows['Kmonth'].'</h2>';
        $strOut.='<tr ><th style=" padding-left:5px" >Number Of Clients</th><td style=" padding-left:5px">'.$rows['NumberClients'].'</td></tr>';
        $strOut.='<tr ><th style=" padding-left:5px">Number Of Center</th><td style=" padding-left:5px">'.$rows['NumberCenter'].'</td></tr>';
        $strOut.='<tr ><th style=" padding-left:5px">Number Of Barangay</th><td style=" padding-left:5px">'.$rows['NumberBrgy'].'</td></tr>';
        $strOut.='<tr ><th style=" padding-left:5px">Number Of Field Offices</th><td style=" padding-left:5px">'.$rows['NumberFO'].'</td></tr>';
        $strOut.='<tr ><th style=" padding-left:5px">Number Of Staffs</th><td style=" padding-left:5px">'.$rows['NumberStaff'].'</td></tr>';
        $strOut.='<tr ><th style=" padding-left:5px">Total Portfolio</th><td style=" padding-left:5px">pHp '.$rows['TotalPort'].'</td></tr>';
        $strOut.='<tr ><th style=" padding-left:5px">Repayment Rate</th><td style=" padding-left:5px">'.$rows['RepaymentRate'].'%</td></tr>';
        $strOut.='<tr ><th style=" padding-left:5px">PAR Rate</th><td style=" padding-left:5px">'.$rows['PARrate'].' %</td></tr>';
        $strOut.='<tr ><th style=" padding-left:5px">Peso Rating</th><td style=" padding-left:5px">'.$rows['PesoRating'].'</td></tr>';
        }    	
        $strOut.='</table>';
		echo $strOut;
	}
	
	/*end ng index loader**/
	/****************About Us Loader*************/
	public function loader_history($db){
	 	$strSql="Select * from tblhistory";
	 	$res=$db->prepare($strSql);
	 	$res->execute();
	 	while($rows=$res->fetch(PDO::FETCH_ASSOC)){
	 		$strOut.=stripslashes($rows['historyDesc']);
	 	}
	 	echo $strOut;
	}
	public function loader_Vision($db){
		$strSql="Select * from tblvmc where vmcId=1";
		$res=$db->prepare($strSql);
		$res->execute();
		while($rows=$res->fetch(PDO::FETCH_ASSOC)){
	       $strOut.='   <div style="float:left;margin-left:1px" >';
			$strOut.=$rows['vmcEng'];	           	
			$strOut.='   </div>';
			 echo $strOut;
		}
	}
	
	public function loader_Mission($db){
		$strSql="Select * from tblvmc where vmcId=2";
		$res=$db->prepare($strSql);
		$res->execute();
		while($rows=$res->fetch(PDO::FETCH_ASSOC)){
	       $strOut.='   <div style="float:left;margin-left:1px"  >';
			$strOut.=$rows['vmcEng'];	           	
			$strOut.='   </div>';
			 echo $strOut;
		}
	}
	
		public function loader_Strategy($db){
		$strSql="Select * from tblvmc where vmcId=3";
		$res=$db->prepare($strSql);
		$res->execute();
		while($rows=$res->fetch(PDO::FETCH_ASSOC)){
	       $strOut.='   <div style="float:left;margin-left:1px"  >';
			$strOut.=$rows['vmcEng'];	           	
			$strOut.='   </div>';
			 echo $strOut;
		}
	}
	public function loader_marcelo($db){
		$strSql="Select * from tblmarcelo";
		$res=$db->prepare($strSql);
		$res->execute();
				while($rows=$res->fetch(PDO::FETCH_ASSOC)){
				$strOut.='          <ul style=" font-family:Arial, Helvetica, sans-serif;font-size:25px">';
				$strOut.='          	<li style=" margin-bottom:15px"><b style="color:#9dcf56">M</b>'.$rows['M'].'</li>';
				$strOut.='          	<li style=" margin-bottom:15px"><b style="color:#9dcf56">A</b>'.$rows['A'].'</li>';
				$strOut.='          	<li style=" margin-bottom:15px"><b style="color:#9dcf56">R</b>'.$rows['R'].'</li>';
				$strOut.='          	<li style=" margin-bottom:15px"><b style="color:#9dcf56">C</b>'.$rows['C'].'</li>';
				$strOut.='          	<li style=" margin-bottom:15px"><b style="color:#9dcf56">E</b>'.$rows['E'].'</li>';
				$strOut.='          	<li style=" margin-bottom:15px"><b style="color:#9dcf56">L</b>'.$rows['L'].'</li>';
				$strOut.='          	<li style=" margin-bottom:15px"><b style="color:#9dcf56">O</b>'.$rows['O'].'</li>';
				$strOut.='          </ul>';
				}
			    
			    echo $strOut;
	
	}
	
	public function loader_Pangako($db){
		$strSql="Select * from tblvmc where vmcId=4";
		$res=$db->prepare($strSql);
		$res->execute();
		while($rows=$res->fetch(PDO::FETCH_ASSOC)){
	       $strOut.='   <div style="float:left;width:440px; margin-left:1px" align="center"  >';
			$strOut.=$rows['vmcEng'];	           	
			$strOut.='   </div>';
			$strOut.='   <div style="float:right;width:440px;" align="center">';
			$strOut.=$rows['vmcTag'];	           	
			 $strOut.='   </div>';
			 echo $strOut;
		}
	}

	public function BoardofTrustees($db){
		/*$sqlBot="Select * from tblboardt";
		$res=$db->prepare($sqlBot);
		$res->execute();
		$strBot.='<table border="1px" style="font-family:Arial, Helvetica, sans-serif;font-size:14px">';
		$strBot.='<tr><th style="  padding-left:150px;padding-right:150px" colspan="2">Name</th><th style="  padding-left:80px;padding-right:80px">Position</th><th style="  padding-left:80px;padding-right:80px">Company</th></tr>';
		while($row=$res->fetch(PDO::FETCH_ASSOC)){
		$strBot.='<tr><td><img src="administrator/images/mng/'.$row['boardPics'].'" style="margin:5px 5px 5px 5px ; width:100px;height:100px"/></td><td style="padding-left:3px" >'.$row['BoardName'].'</td><td  style="padding-left:5px" >'.$row['boardPosition'].'</td><td  style="padding-left:5px" >'.$row['boardCompany'].'</td></tr>';
		}
		$strBot.='</table>';
		echo $strBot;*/
						$sqlBot="SELECT * FROM tblboardt WHERE boardPosition != 'President and CEO' AND boardPosition != 'Board Secretary'   AND (boardId % 2) <> 0 ";
						$res=$db->prepare($sqlBot);
						$res->execute();
						$strBot.='<table width="400px"  style="font-family:Arial, Helvetica, sans-serif;font-size:14px;float:left;margin-left:25px">';
						while($row=$res->fetch(PDO::FETCH_ASSOC)){
						$strBot.='<tr><td width="110px"><img src="administrator/images/mng/BOT/'.$row['boardPics'].'" style="margin:5px 5px 5px 5px ; width:100px;height:100px"/></td><td style="padding-left:3px" ><strong>'.$row['BoardName'].'</strong><br/><br/>'.$row['boardPosition'].'<br/>'.$row['boardCompany'].'</td></tr>';
						}
						$strBot.='</table>';
						echo $strBot;
						
						$sqlBot1="SELECT * FROM tblboardt WHERE boardPosition != 'President and CEO' AND boardPosition != 'Board Secretary'   AND (boardId % 2) = 0";
						$res1=$db->prepare($sqlBot1);
						$res1->execute();
						$strBot1.='<table  width="400px"  style="font-family:Arial, Helvetica, sans-serif;font-size:14px;float:left;margin-left:75px ">';
						while($row1=$res1->fetch(PDO::FETCH_ASSOC)){
						$strBot1.='<tr><td width="110px"><img src="administrator/images/mng/BOT/'.$row1['boardPics'].'" style="margin:5px 5px 5px 5px ; width:100px;height:100px"/></td><td style="padding-left:3px" ><strong>'.$row1['BoardName'].'</strong><br/><br/>'.$row1['boardPosition'].'<br/>'.$row1['boardCompany'].'</td></tr>';
						}
						$strBot1.='</table>';
						echo $strBot1;
						
						$sqlBot2="SELECT * FROM tblboardt WHERE boardPosition LIKE '%President and CEO%' OR boardPosition LIKE '%Board Secretary%'";
						$res2=$db->prepare($sqlBot2);
						$res2->execute();
						
						$strBot2.='<table width="400px"  style="font-family:Arial, Helvetica, sans-serif;font-size:14px;float;margin-left:150px;padding-top:50px">';
						while($row2=$res2->fetch(PDO::FETCH_ASSOC)){
						$strBot2.='<tr><td width="110px"><img src="administrator/images/mng/BOT/'.$row2['boardPics'].'" style="margin:5px 5px 5px 5px ; width:100px;height:100px"/></td><td style="padding-left:3px" ><strong>'.$row2['BoardName'].'</strong><br/><br/>'.$row2['boardPosition'].'<br/>'.$row2['boardCompany'].'</td></tr>';
						}
						$strBot2.='</table>';
						echo $strBot2;

		
	}
	public function steeringCommitee($db){
		/*$sqlComm="Select * from tblsteeringcom";
		$res=$db->prepare($sqlComm);
		$res->execute();
		
		$strSc.='<table border="1px" style="font-family:Arial, Helvetica, sans-serif;font-size:14px">';
		$strSc.='<tr><th style="  padding-left:150px;padding-right:150px" colspan="2">Name</th><th style="  padding-left:80px;padding-right:80px">Position</th></tr>';
		while($row=$res->fetch(PDO::FETCH_ASSOC)){
			$strSc.='<tr><td><img src="administrator/images/str/'.$row['img'].'" style="margin:5px 5px 5px 5px ; width:100px;height:100px"/></td><td style="  padding-left:130px;padding-right:130px;width:200px">'.$row['steerName'].'</td><td style="  padding-left:50px;padding-right:50px">'.$row['steerPosition'].'</td></tr>';
		}
		$strSc.='</table>';
		echo $strSc;*/
					$sqlComm1="Select * from tblsteeringcom WHERE (SteerCom % 2) <> 0";
					$res1=$db->prepare($sqlComm1);
					$res1->execute();
		
					$strSc1.='<table  width="400px"  style="font-family:Arial, Helvetica, sans-serif;font-size:14px;float:left;margin-left:25px ">';
					while($row1=$res1->fetch(PDO::FETCH_ASSOC)){
					$strSc1.='<tr><td width="110px"><img src="administrator/images/mng/SC/'.htmlentities($row1['img']).'" style="margin:5px 5px 5px 5px ; width:100px;height:100px"/></td><td style="padding-left:3px" ><strong>'.htmlentities($row1['steerName']).'</strong><br/><br/>'.$row1['steerPosition'].'</td></tr>';
					}
					$strSc1.='</table>';
					echo $strSc1;
						
					
					
					$sqlComm="Select * from tblsteeringcom WHERE (SteerCom % 2) = 0";
					$res=$db->prepare($sqlComm);
					$res->execute();
		
					$strSc.='<table  width="400px"  style="font-family:Arial, Helvetica, sans-serif;font-size:14px;float:left;margin-left:75px ">';
					while($row=$res->fetch(PDO::FETCH_ASSOC)){
					$strSc.='<tr><td width="110px"><img src="administrator/images/mng/SC/'.htmlentities($row['img']).'" style="margin:5px 5px 5px 5px ; width:100px;height:100px"/></td><td style="padding-left:3px" ><strong>'.htmlentities($row['steerName']).'</strong><br/><br/>'.$row['steerPosition'].'</td></tr>';
					}
					$strSc.='</table>';
					echo $strSc;
	}
		public function clusterManager($db){
					$sqlCm="Select * from tblcm WHERE (cm_id % 2) <> 0";
					$res=$db->prepare($sqlCm);
					$res->execute();
		
					$strCm.='<table  width="400px"  style="font-family:Arial, Helvetica, sans-serif;font-size:14px;float:left;margin-left:25px ">';
					while($row=$res->fetch(PDO::FETCH_ASSOC)){
					$strCm.='<tr><td width="110px"><img src="administrator/images/mng/CM/'.$row['cm_img'].'" style="margin:5px 5px 5px 5px ; width:100px;height:100px"/></td><td style="padding-left:3px" ><strong>'.$row['cm_name'].'</strong><br/><br/>'.$row['cluster'].'</td></tr>';
					}
					$strCm.='</table>';
					echo $strCm;
						
										
					$sqlCm2="Select * from tblcm WHERE (cm_id % 2) = 0";
					$res2=$db->prepare($sqlCm2);
					$res2->execute();
		
					$strCm2.='<table  width="400px"  style="font-family:Arial, Helvetica, sans-serif;font-size:14px;float:left;margin-left:75px ">';
					while($row2=$res2->fetch(PDO::FETCH_ASSOC)){
					$strCm2.='<tr><td width="110px"><img src="administrator/images/mng/CM/'.$row2['cm_img'].'" style="margin:5px 5px 5px 5px ; width:100px;height:100px"/></td><td style="padding-left:3px" ><strong>'.$row2['cm_name'].'</strong><br/><br/>'.$row2['cluster'].'</td></tr>';
					}
					$strCm2.='</table>';
					echo $strCm2;


		}
	public function FieldManager($db){
					$sqlFm="Select * from tblfm WHERE (fm_id % 2) <> 0";
					$res=$db->prepare($sqlFm);
					$res->execute();
		
					$strFm.='<table  width="400px"  style="font-family:Arial, Helvetica, sans-serif;font-size:14px;float:left;margin-left:25px ">';
					while($row=$res->fetch(PDO::FETCH_ASSOC)){
					$strFm.='<tr><td width="110px"><img src="administrator/images/mng/FM/'.$row['fm_img'].'" style="margin:5px 5px 5px 5px ; width:100px;height:100px"/></td><td style="padding-left:3px" ><strong>'.htmlentities($row['fm_name']).'</strong><br/><br/>'.htmlentities($row['fo']).'</td></tr>';
					}
					$strFm.='</table>';
					echo $strFm;
					
					
					$sqlFm2="Select * from tblfm WHERE (fm_id % 2) = 0";
					$res2=$db->prepare($sqlFm2);
					$res2->execute();
		
					$strFm2.='<table  width="400px"  style="font-family:Arial, Helvetica, sans-serif;font-size:14px;float:left;margin-left:75px ">';
					while($row2=$res2->fetch(PDO::FETCH_ASSOC)){
					$strFm2.='<tr><td width="110px"><img src="administrator/images/mng/FM/'.$row2['fm_img'].'" style="margin:5px 5px 5px 5px ; width:100px;height:100px"/></td><td style="padding-left:3px" ><strong>'.htmlentities($row2['fm_name']).'</strong><br/><br/>'.htmlentities($row2['fo']).'</td></tr>';
					}
					$strFm2.='</table>';
					echo $strFm2;

		}

	public function SbookKeeper($db){
					$sqlSbk="Select * from tblsbk WHERE (sbk_id % 2) <> 0";
					$res=$db->prepare($sqlSbk);
					$res->execute();
		
					$strSbk.='<table  width="400px"  style="font-family:Arial, Helvetica, sans-serif;font-size:14px;float:left;margin-left:25px ">';
					while($row=$res->fetch(PDO::FETCH_ASSOC)){
					$strSbk.='<tr><td width="110px"><img src="administrator/images/mng/SBK/'.$row['sbk_img'].'" style="margin:5px 5px 5px 5px ; width:100px;height:100px"/></td><td style="padding-left:3px" ><strong>'.$row['sbk_name'].'</strong><br/><br/>'.$row['cluster'].'</td></tr>';
					}
					$strSbk.='</table>';
					echo $strSbk;
					
					
					$sqlSbk2="Select * from tblsbk WHERE (sbk_id % 2) = 0";
					$res2=$db->prepare($sqlSbk2);
					$res2->execute();
		
					$strSbk2.='<table  width="400px"  style="font-family:Arial, Helvetica, sans-serif;font-size:14px;float:left;margin-left:75px ">';
					while($row2=$res2->fetch(PDO::FETCH_ASSOC)){
					$strSbk2.='<tr><td width="110px"><img src="administrator/images/mng/SBK/'.$row2['sbk_img'].'" style="margin:5px 5px 5px 5px ; width:100px;height:100px"/></td><td style="padding-left:3px" ><strong>'.htmlentities($row2['sbk_name']).'</strong><br/><br/>'.$row2['cluster'].'</td></tr>';
					}
					$strSbk2.='</table>';
					echo $strSbk2;

		}

	public function OMCM($db){
						$sqlomcm="SELECT * FROM tblomcm";
						$res=$db->prepare($sqlomcm);
						$res->execute();
						
						$stromcm.='<table width="400px"  style="font-family:Arial, Helvetica, sans-serif;font-size:14px;float;margin-left:150px;">';
						while($row=$res->fetch(PDO::FETCH_ASSOC)){
						$stromcm.='<tr><td width="110px"><img src="administrator/images/mng/OMCM/'.$row['omcm_img'].'" style="margin:5px 5px 5px 5px ; width:100px;height:100px"/></td><td style="padding-left:3px" ><strong>'.htmlentities($row['omcm_name']).'</strong><br/><br/>'.$row['pos'].'</td></tr>';
						}
						$stromcm.='</table>';
						echo $stromcm;

	}
		public function fieldOffice($db){
						$sqlfo="SELECT fo_id,fo_name,fo_img,fo_add,fo_contact,cluster_name,cluster_id FROM tblfo fo INNER JOIN tblcluster c ON fo.cluster = c.Cluster_id GROUP BY cluster_id";
						$res=$db->prepare($sqlfo);
						$res->execute();
						while($row=$res->fetch(PDO::FETCH_ASSOC)){  
					//	$a = 'select * , count(fo_id) from tblfo';
						
						$strfo.='<br/><p style="font-family:Arial, Helvetica, sans-serif;font-size:25px;color:black;">'.$row['cluster_name'].'</p>';
							$sqlfo1="SELECT fo_id,fo_name,fo_img,fo_add,fo_contact,cluster_name FROM tblfo fo INNER JOIN tblcluster c ON fo.cluster = c.Cluster_id where c.cluster_id = ? ";
							$res1=$db->prepare($sqlfo1);
							$res1->execute(array($row['cluster_id']));
							while($row2=$res1->fetch(PDO::FETCH_ASSOC)){
							$strfo.='<table width="400px"  style="font-family:Arial, Helvetica, sans-serif;font-size:14px;float;">';
							
							$strfo.='<tr><td width="110px"><img src="administrator/images/mng/FO/'.$row2['fo_img'].'" style="margin:5px 5px 5px 5px ; width:100px;height:100px"/></td><td style="padding-left:3px" ><strong>'.htmlentities($row2['fo_name']).'</strong><br/><br/>'.htmlentities($row2['fo_add']).'<br/>'.$row2['fo_contact'].'</td></tr>';
							}
							$strfo.='</table>';
						}
						echo $strfo;
						echo $a;

	}


	/****************end About Us Loader*************/
	/****************Partners*************/
	public function loader_partner($db){
		$strSql="Select * from tblpartners";
		$res=$db->prepare($strSql);
		$res->execute();
		$strOut.='<ul id="folder" style="border-right:10px" >';
		while($rows=$res->fetch(PDO::FETCH_ASSOC)){
        	$strOut.='<li style="margin-left:20px"><a href="'.$rows['partnersUrl'].'" target="_blank" ><img src="administrator/images/partners/'.$rows['partnersLogo'].'" alt="Image 01" style="width:200px;height:200px" />'.$rows['partnersName'].'</a></li>';
        }
        $strOut.='</ul>';
        echo $strOut;
	}
	/****************end Partner*************/
	/****************Jobs*************/
	public function loader_jobs($db){
		$strSql="Select * from tbljobs";
		$res=$db->prepare($strSql);
		$res->execute();
		$strOut.="	<table cellpadding='0' cellspacing='0' border='0' class='display' id='tbl' class='jtable'>";
		$strOut.="			<thead><tr><th>PDF File</th><th>Job Title</th><th>Date Post</th></tr></thead>";
		$strOut.='			<tbody>';
		while($rows=$res->fetch(PDO::FETCH_ASSOC)){
			$strOut.='<tr><td><center><a href="administrator/images/jobs/'.$rows['jobFile'].'" target="_blank"  ><img src="images/pdf.gif"/></a></center></td><td><a href="administrator/images/jobs/'.$rows['jobFile'].'" target="_blank"  >'.$rows['jobTitle'].'</a></td><td><a href="administrator/images/jobs/'.$rows['jobFile'].'" target="_blank"  >'.$rows['jobDesc'].'</a></td></tr>';
		}
		$strOut.='			</tbody>';
		$strOut.='			</table>';
		echo $strOut;
	}

	public function loader_job($db){
		$strSql="Select * from tbljobs";
		$res=$db->prepare($strSql);
		$res->execute();
		$strOut.="	<table cellpadding='0' cellspacing='0' border='0' class='display' id='tbl' class='jtable'>";
		$strOut.="			<thead><tr><th>PDF File</th><th>Job Title</th><th>Date Post</th></tr></thead>";
		$strOut.='			<tbody>';
		$strOut.='<img src="administrator/images/jobs/job.jpg" />';
		while($rows=$res->fetch(PDO::FETCH_ASSOC)){
			$strOut.='<tr><td><center><a href="administrator/images/jobs/'.$rows['jobFile'].'" target="_blank"  ><img src="images/pdf.gif"/></a></center></td><td><a href="administrator/images/jobs/'.$rows['jobFile'].'" target="_blank"  >'.$rows['jobTitle'].'</a></td><td><a href="administrator/images/jobs/'.$rows['jobFile'].'" target="_blank"  >'.$rows['jobDesc'].'</a></td></tr>';
		}
		$strOut.='			</tbody>';
		$strOut.='			</table>';
		echo $strOut;
	}
	/****************end Jobs*************/
/********************Product*********************************/
	public function loader_product($db){
		$strOut="";
		$perPage=5;
		$strProdC="Select * from tblproduct where status=0";
		$res=$db->prepare($strProdC);
		$res->execute();
		$rCount=$res->rowCount();
		$numPage=$rCount/$perPage;
			if (isset($_GET['start'])){
				$start=intval($_GET['start']);
			}else{
				$start=0;	
			}
		$strProd="Select * from tblproduct limit {$start},{$perPage}";
		$res2=$db->prepare($strProd);
		$res2->execute();	
			while($rows=$res2->fetch(PDO::FETCH_ASSOC)){
			$strOut.='<div class="post_box">';
	        $strOut.='    <div class="col_b float_l" style="margin-top:10px;margin-left:10px;width:890px">';
	        $strOut.='        <img src="administrator/images/prod/'.$rows['prodPics'].'" alt="Image 12" class="image_frame_300" />';
	        $strOut.='        <div class="post_text" style="width:560px">';
	        $strOut.='        	<p style="font-family:Arial, Helvetica, sans-serif;font-size:17px;color:black">'.$rows['prodcategId'].'</p>';
	        $strOut.=substr(nl2br(stripslashes($rows['prodDesc'])),0,273);
	        $strOut.='            <a href="products.php?pId='.$rows['prodDescId'].'" class="more">More</a>';
	        $strOut.='        </div>';
			$strOut.='	</div>';
	        $strOut.='    <div ></div>';
	        $strOut.='</div>';
	        }
	         $strProducts1.='  <div class="pagging">';
           $strProducts1.=' <ul>';
		        for($page=0 ; $page < $numPage ; $page++ ){
		        	$strProducts1=$strProducts1." &nbsp "."<li><a href='products.php?start=".($page*$perPage)."'>".($page+1)."</a></li>";
		        }
	        $strProducts1.='</ul>';
	        $strProducts1.='</div>';
	        
			echo $strOut;
			echo $strProducts1;
	}
	
	public function view_product($db,$pId){
		$pId=$pId;
		$strSql="Select * from tblproduct where prodDescId=?";
		$res=$db->prepare($strSql);
		$res->execute(array($pId));
		$rCount=$res->rowCount();
		if($rCount!=nulll){
			if($rows=$res->fetch(PDO::FETCH_ASSOC)){
				$strOut.='<img src="administrator/images/prod/'.$rows['prodPics'].'"  alt="Image 12" class="image_frame_300" " style="margin-right:10px">';
				$strOut.='<p style="font-family:Arial, Helvetica, sans-serif;font-size:20px;font-weight:bold" ><a href="#">'.$rows['prodcategId'].'</a></p>';
				$strOut.=stripslashes($rows['prodDesc']);//595
			}
			$strOut.='<p style="font-family:Arial, Helvetica, sans-serif;font-size:25px;color:black;margin-top:50px">Other Products</p>';
			echo $strOut;
		}
	
	
	}
	/****************end Product*************/
/********************News*********************************/
	public function loader_News($db){
		$strOut="";
		$perPage=5;
		$strNewsC="Select * from tblnews";
		$res=$db->prepare($strNewsC);
		$res->execute();
		$rCount=$res->rowCount();
		$numPage=$rCount/$perPage;
			if (isset($_GET['start'])){
				$start=intval($_GET['start']);
			}else{
				$start=0;	
			}
		$strNews="Select * from tblnews limit {$start},{$perPage}";
		$res2=$db->prepare($strNews);
		$res2->execute();	
			while($rows=$res2->fetch(PDO::FETCH_ASSOC)){
			$strOut.='<div class="post_box">';
	        $strOut.='    <div class="col_b float_l" style="margin-top:10px;margin-left:10px;width:890px">';
	        $strOut.='        <img src="administrator/images/news/'.$rows['news_pics'].'" alt="Image 12" class="image_frame_300" />';
	        $strOut.='        <div class="post_text" style="width:560px">';
	        $strOut.='        	<p style="font-family:Arial, Helvetica, sans-serif;font-size:17px;color:black">'.$rows['news_title'].'</p>';
	        $strOut.='        	<p>'.$rows['news_date'].'</p>';
	        $strOut.=substr(nl2br(stripslashes($rows['news_desc'])),0,273);
	        $strOut.='            <a href="newsandfetured.php?nId='.$rows['newsId'].'" class="more">More</a>';
	        $strOut.='        </div>';
			$strOut.='	</div>';
	        $strOut.='    <div ></div>';
	        $strOut.='</div>';
	        }
	         $strProducts1.='  <div class="pagging">';
           $strProducts1.=' <ul>';
		        for($page=0 ; $page < $numPage ; $page++ ){
		        	$strProducts1=$strProducts1." &nbsp "."<li><a href='products.php?start=".($page*$perPage)."'>".($page+1)."</a></li>";
		        }
	        $strProducts1.='</ul>';
	        $strProducts1.='</div>';
	        
			echo $strOut;
			echo $strProducts1;
	}
	
	public function view_news($db,$nId){
		$nId=$nId;
		$strSql="Select * from tblnews where newsId=?";
		$res=$db->prepare($strSql);
		$res->execute(array($nId));
		$rCount=$res->rowCount();
		if($rCount!=nulll){
			if($rows=$res->fetch(PDO::FETCH_ASSOC)){
				$strOut.='<img src="administrator/images/news/'.$rows['news_pics'].'"  alt="Image 12" class="image_frame_300" " style="margin-right:10px">';
				$strOut.='<p style="font-family:Arial, Helvetica, sans-serif;font-size:20px;font-weight:bold" ><a href="#">'.$rows['news_title'].'</a></p>';
				$strOut.='<p><a href="#">'.$rows['news_date'].'</a></p>';
				$strOut.=stripslashes($rows['news_desc']);//595
			}
			$strOut.='<p style="font-family:Arial, Helvetica, sans-serif;font-size:25px;color:black;margin-top:50px">Other News and Featured</p>';
			echo $strOut;
		}
	}
	/****************end Product*************/

	/******************Mini Slider*********************/
	public function miniSlider($db){
		$strSql="Select * from tblproduct where status=0";
		$res=$db->prepare($strSql);
		$res->execute();
	
		$strOut.='<ul>';
		while($rows=$res->fetch(PDO::FETCH_ASSOC)){
			$strOut.='	<li style="margin-right:18px"><a href="" title="jef"><img src="administrator/images/prod/'.$rows['prodPics'].'" title="'.$rows['prodcategId'].'" alt="'.$rows['prodcategId'].'" class="image_frame_300" ></a></li>';	
		}
		$strOut.='</ul>';
		$strOut.='<div class="control">';
		$strOut.='			<a href="#" class="prev">prev</a>';
		$strOut.='		<a href="#" class="next">next</a>';
				
		$strOut.='		</div>';

		echo $strOut; 
	
	
	}
	/*******************story*********************************/
	
	
	public function loader_story($db){
		$strOut="";
		$perPage=5;
		$strNewsC="Select * from tblstory";
		$res=$db->prepare($strNewsC);
		$res->execute();
		$rCount=$res->rowCount();
		$numPage=$rCount/$perPage;
			if (isset($_GET['start'])){
				$start=intval($_GET['start']);
			}else{
				$start=0;	
			}
		$strNews="Select * from tblstory limit {$start},{$perPage}";
		$res2=$db->prepare($strNews);
		$res2->execute();	
			while($rows=$res2->fetch(PDO::FETCH_ASSOC)){
			$strOut.='<div class="post_box">';
	        $strOut.='    <div class="col_b float_l" style="margin-top:10px;margin-left:10px;width:890px">';
	        $strOut.='        <img src="administrator/images/story/'.$rows['story_img'].'" alt="Image 12" class="image_frame_300" />';
	        $strOut.='        <div class="post_text" style="width:560px">';
	        $strOut.='        	<p style="font-family:Arial, Helvetica, sans-serif;font-size:17px;color:black">'.htmlentities($rows['story_title']).'</p>';
	        $strOut.='        	<p>'.$rows['story_date'].'</p>';
	        $strOut.=substr(nl2br(addslashes ($rows['story_desc'])),0,273);
	        $strOut.='            <a href="partners.php?nId='.$rows['story_id'].'" class="more">More</a>';
	        $strOut.='        </div>';
			$strOut.='	</div>';
	        $strOut.='    <div ></div>';
	        $strOut.='</div>';
	        }
	         $strProducts1.='  <div class="pagging">';
           $strProducts1.=' <ul>';
		        for($page=0 ; $page < $numPage ; $page++ ){
		        	$strProducts1=$strProducts1." &nbsp "."<li><a href='partners.php?start=".($page*$perPage)."'>".($page+1)."</a></li>";
		        }
	        $strProducts1.='</ul>';
	        $strProducts1.='</div>';
			echo $strOut;
			echo $strProducts1;
	}

		public function view_story($db,$nId){
		$nId=$nId;
		$strSql="Select * from tblstory where story_id=?";
		$res=$db->prepare($strSql);
		$res->execute(array($nId));
		$rCount=$res->rowCount();
		if($rCount!=nulll){
			if($rows=$res->fetch(PDO::FETCH_ASSOC)){
				$strOut.='<img src="administrator/images/story/'.$rows['story_img'].'"  alt="Image 12" class="image_frame_300" " style="margin-right:10px">';
				$strOut.='<p style="font-family:Arial, Helvetica, sans-serif;font-size:20px;font-weight:bold" ><a href="#">'.$rows['story_title'].'</a></p>';
				$strOut.='<p><a href="#">'.$rows['story_date'].'</a></p>';
				$strOut.=stripslashes($rows['story_desc']);//595
			}
			$strOut.='<p style="font-family:Arial, Helvetica, sans-serif;font-size:25px;color:black;margin-top:50px">Other Storiess and Features</p>';
					
			echo $strOut;
		}
}
	
	/*****************End Mini Slider*********************/
	/*start news home*/
	public function news_home($db){
		$strSql="Select  * from tblnews order by news_date limit 0,2";
		$res=$db->prepare($strSql);
		$res->execute();
		while($rows=$res->fetch(PDO::FETCH_ASSOC)){
		       	$strOut.=' <div class="col_b float_l" style="width:508px;border-bottom:1px black dashed;margin-bottom: 5px" >';
				$strOut.='<img src="administrator/images/news/'.$rows['news_pics'].'"  class=" image_frame_300 left "  style="margin-right:10px">';
				$strOut.='<p style= font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:100><a href="#">'.$rows['news_title'].'</a></p>';
				$strOut.='<p style= font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:100><a href="#">'.$rows['news_date'].'</a></p>';
				$strOut.='<p>'.substr(nl2br(stripslashes($rows['news_desc'])),0,130).'</p><a href="" align="left">ReadMORE</a>';
				
				$strOut.='</div>';
		}
				echo $strOut;

	
	
	
	
	
	}
	
	/*******/


	public function social($db){
		$strSql="Select * from tblsocial where status=0";
		$res=$db->prepare($strSql);
		$res->execute();
		
	
		$strOut1.='<p align="center" style="margin-top:5px">';
		$strOut1.='<img src="administrator/images/social/follow us.gif">&nbsp';
		while($rows=$res->fetch(PDO::FETCH_ASSOC)){
			$strOut1.='<a href="'.$rows['social_url'].'"><img src="administrator/images/social/'.$rows['social_pics'].'"></a>&nbsp';
		}
		$strOut1.='</p> ';
		echo $strOut1; 
	}








}





?>
