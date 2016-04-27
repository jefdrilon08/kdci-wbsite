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
			
			//$strOut.=substr(nl2br(stripslashes($rows['desc_d'])),0,1199).'<a href="welcome.php"> ReadMore..</a>'  ;//595
			$strOut.=substr(nl2br(stripslashes($rows['desc_d'])),0,1200).'<a href="welcome.php"> ReadMore..</a>'  ;//595
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
		//$strOut.='<div style="padding-left:15px; width:490px " >';
		if($rows=$res->fetch(PDO::FETCH_ASSOC)){
	        $strOut.=substr(stripslashes($rows['historyDesc']),0,1900).'<a href="AboutUs.php#history"> ReadMore..</a>'  ;//923
        }
        //$strOut.='</div>';
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
	       $strOut.='   <div style="float:left;width:440px; margin-left:1px" align="center"  >';
			$strOut.=$rows['vmcEng'];	           	
			$strOut.='   </div>';
			$strOut.='   <div style="float:right;width:440px;" align="center">';
			$strOut.=$rows['vmcTag'];	           	
			 $strOut.='   </div>';
			 echo $strOut;
		}
	}
	
	public function loader_Mission($db){
		$strSql="Select * from tblvmc where vmcId=2";
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
	
		public function loader_Strategy($db){
		$strSql="Select * from tblvmc where vmcId=3";
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
	public function loader_marcelo($db){
		$strSql="Select * from tblmarcelo";
		$res=$db->prepare($strSql);
		$res->execute();
				$strOut.='	<div style="float:left;width:440px; margin-left:1px"  >';
				while($rows=$res->fetch(PDO::FETCH_ASSOC)){
				$strOut.='          <ul style=" font-family:Arial, Helvetica, sans-serif;font-size:25px">';
				$strOut.='          	<li style=" margin-bottom:15px"><b>M</b>'.$rows['M'].'</li>';
				$strOut.='          	<li style=" margin-bottom:15px"><b>A</b>'.$rows['A'].'</li>';
				$strOut.='          	<li style=" margin-bottom:15px"><b>R</b>'.$rows['R'].'</li>';
				$strOut.='          	<li style=" margin-bottom:15px"><b>C</b>'.$rows['C'].'</li>';
				$strOut.='          	<li style=" margin-bottom:15px"><b>E</b>'.$rows['E'].'</li>';
				$strOut.='          	<li style=" margin-bottom:15px"><b>L</b>'.$rows['L'].'</li>';
				$strOut.='          	<li style=" margin-bottom:15px"><b>O</b>'.$rows['O'].'</li>';
				$strOut.='          </ul>';
				}
			    $strOut.='   		</div>';
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
		$sqlBot="Select * from tblboardt";
		$res=$db->prepare($sqlBot);
		$res->execute();
		$strBot.='<table border="1px" style="font-family:Arial, Helvetica, sans-serif;font-size:14px">';
		$strBot.='<tr><th style="  padding-left:150px;padding-right:150px" colspan="2">Name</th><th style="  padding-left:80px;padding-right:80px">Position</th><th style="  padding-left:80px;padding-right:80px">Company</th></tr>';
		while($row=$res->fetch(PDO::FETCH_ASSOC)){
		$strBot.='<tr><td><img src="administrator/images/mng/'.$row['boardPics'].'" style="margin:5px 5px 5px 5px ; width:100px;height:100px"/></td><td style="padding-left:3px" >'.$row['BoardName'].'</td><td  style="padding-left:5px" >'.$row['boardPosition'].'</td><td  style="padding-left:5px" >'.$row['boardCompany'].'</td></tr>';
		}
		$strBot.='</table>';
		echo $strBot;
		
	}
	public function steeringCommitee($db){
		$sqlComm="Select * from tblsteeringcom";
		$res=$db->prepare($sqlComm);
		$res->execute();
		
		$strSc.='<table border="1px" style="font-family:Arial, Helvetica, sans-serif;font-size:14px">';
		$strSc.='<tr><th style="  padding-left:150px;padding-right:150px" colspan="2">Name</th><th style="  padding-left:80px;padding-right:80px">Position</th></tr>';
		while($row=$res->fetch(PDO::FETCH_ASSOC)){
			$strSc.='<tr><td><img src="administrator/images/str/'.$row['img'].'" style="margin:5px 5px 5px 5px ; width:100px;height:100px"/></td><td style="  padding-left:130px;padding-right:130px;width:200px">'.$row['steerName'].'</td><td style="  padding-left:50px;padding-right:50px">'.$row['steerPosition'].'</td></tr>';
		}
		$strSc.='</table>';
		echo $strSc;
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
		public function stories_home($db){
		$strSql="Select  * from tblnews order by news_date limit 0,2";
		$res=$db->prepare($strSql);
		$res->execute();
		while($rows=$res->fetch(PDO::FETCH_ASSOC)){
		       	$strOut.=' <div class="col_b float_l" style="width:380px;border-bottom:1px black dashed;margin-bottom: 5px" >';
				$strOut.='<img src="administrator/images/news/'.$rows['news_pics'].'"  class=" image_frame_160 left "  style="margin-right:10px">';
				$strOut.='<p style= font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:100><a href="#">'.$rows['news_title'].'</a></p>';
				$strOut.='<p style= font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:100><a href="#">'.$rows['news_date'].'</a></p>';
				$strOut.='<p>'.substr(nl2br(stripslashes($rows['news_desc'])),0,120).'</p><a href="" align="left">ReadMORE</a>';
				
				$strOut.='</div>';
		}
				echo $strOut;

	
	
	
	
	
	}


/***/
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
