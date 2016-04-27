<?php

class loader1{
	public function loadSlider(){
	   $strOut.=' <div id="templatemo_slider_wrapper">';     
	   $strOut.='     <div id="slider" class="nivoSlider">';
	   $strOut.='         <a href="#"><img src="images/slider/01.jpg" alt="Slider 01" title="This is a sample image for slider" /></a>';
	   $strOut.='         <a href="#"><img src="images/slider/02.jpg" alt="Slider 01" title="This is a sample image for slider" /></a>';
	   $strOut.='         <a href="#"><img src="images/slider/03.jpg" alt="Slider 03" title="This is a sample image for slider" /></a>';
	   $strOut.='         <a href="#"><img src="images/slider/04.jpg" alt="Slider 04" title="This is a sample image for slider" /></a>';
	   $strOut.='         <a href="#"><img src="images/slider/04.jpg" alt="Slider 05" title="This is a sample image for slider" /></a>';
	   $strOut.='     </div>';
	   $strOut.='     <div id="htmlcaption" class="nivo-html-caption">';
	   $strOut.='     	<strong>This</strong> is an example of a HTML caption with <a href="#">a link</a>.';
	   $strOut.='     </div>';
	   $strOut.=' </div>';
	   echo $strOut;
	}
	public function loader_welcome($db){
		$strSql="Select * from tblwelcome";
		$res=$db->prepare($strSql);
		$res->execute();
		if($rows=$res->fetch(PDO::FETCH_ASSOC)){
			$strOut.='<img src="administrator/images/welcome/'.$rows['wPics'].'"  class=" image_frame_160 left "  style="margin-right:10px">';
			$strOut.='<p style= font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:100><a href="#">'.$rows['titlew'].'</a><br>'.$rows['by'].'</p>';
			$strOut.='<p>By: '.$rows['by'].' </p>';
			$strOut.=$rows['desc_d'];//595
		}
		
		echo $strOut;
	}
	
	public function news(){
	
		$strOut.='<div style="padding-left:12px; width:380px " >';
        $strOut.='	 <img src="images/templatemo_image_12.png" alt="Image 12" class="image_frame_160">';
        $strOut.='	   <div class="post_meta" style="border-bottom:1px black dashed">';
	    $strOut.='    	   	<p> <a href="#"> Bagong Buhay sa Ganda Nakasalalay</a></p>';
	    $strOut.='    	   	<p>07/12/13</p>';
	    $strOut.='            <p>Sa pagtutulungan ng Kasagana-Ka at ng Ang.Hortaleza Foundation, animnaput dalawang mga nanay mula sa Montal <a href="#">Read more...</a> </p>';
        $strOut.='        </div>';
        $strOut.='      <img src="images/templatemo_image_13.png" alt="Image 12" class="image_frame_160">';
        $strOut.='	   <div class="post_meta" style="border-bottom:1px black dashed">';
        $strOut.='	        <p><a href="#"> 3kT Training of Trainers</a></p>';
        $strOut.='	   		<p>07/12/13</p>';
        $strOut.='            <p>Malusog na katawan ay ingatan, Labtest ay kailangan nang sakit maagapan."Iyan ang isa sa tatlong slogan na sama-samang pinag-isipan ng labing-anim (16) na K-Kalusugan <a href="#">Read more...</a> </p>';
        $strOut.='        </div>';
                
           
        $strOut.='    <br class="cleaner">';
        $strOut.='    </div>';
        echo $strOut;
	}
	
	public function aboutUs(){
	
		$strOut.='	<div style="padding-left:15px; width:490px " >';
        $strOut.='    	<p>Kasagana-Ka Development Center, Inc. is a social development non-government organization. At the core of its operation is direct and multiple services to its beneficiaries aimed at creating vibrant economic and social infra-structures in urban poor communities. KDCI uses microfinance as a key strategy in providing additional livelihood opportunities to disadvantaged and vulnerable families in Metro Manila and neighboring urban areas. As a service organization, it is guided by a perspective that uplifting the conditions of the urban poor is a multifaceted undertaking. It has thus bundled its savings and loan activities with services that offer fundamental social protection, including microinsurance, education, health, and shelter. Women comprise KDCIs main beneficiaries but members of these womens families, particularly school-age children, also directly benefit from the various products and services it offers.</p>';
        $strOut.='    	<p>KDCI traces its history from the Foundation for Development Alternatives, an NGO formed in 1985 in response to the critical need to address the concerns of the urban poor. As a complement to its work on land tenure security and shelter development, FDA also implemented an economic program targeting urban poor women. In time, the loan and savings program expanded and was established as a separate entity, which was named KDCI. <a href="#">Read more...</a> </p>';
        $strOut.='      </div>';
	
		echo $strOut;
	
	
	}
	
	public function kdciupdate(){
	
		$strOut.='<table style="font-family:Arial, Helvetica, sans-serif; color:WindowText;font-size:14px;width:398px"  border="1px"  >';
        $strOut.='    	<tr ><td style=" padding-left:5px" >Number Of Clients</td><td style=" padding-left:5px">22,419</td></tr>';
        $strOut.='    	<tr ><td style=" padding-left:5px">Number Of Center</td><td style=" padding-left:5px">1,135</td></tr>';
        $strOut.='    	<tr ><td style=" padding-left:5px">Number Of Barangay</td><td style=" padding-left:5px">284</td></tr>';
        $strOut.='    	<tr ><td style=" padding-left:5px">Number Of Field Offices</td><td style=" padding-left:5px">23</td></tr>';
        $strOut.='    	<tr ><td style=" padding-left:5px">Number Of Staffs</td><td style=" padding-left:5px">180</td></tr>';
        $strOut.='    	<tr ><td style=" padding-left:5px">Total Portfolio</td><td style=" padding-left:5px">pHp 128,468,901.68</td></tr>';
        $strOut.='    	<tr ><td style=" padding-left:5px">Repayment Rate</td><td style=" padding-left:5px">99.37%</td></tr>';
        $strOut.='    	<tr ><td style=" padding-left:5px">PAR Rate</td><td style=" padding-left:5px">2.38 %</td></tr>';
        $strOut.='    	<tr ><td style=" padding-left:5px">Peso Rating</td><td style=" padding-left:5px"> 94</td></tr>';
            	
        $strOut.='    </table>';
	
		echo $strOut;
	
	}
	
	



}





?>
