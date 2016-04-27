<?php
	$strOut.='<div id="templatemo_menu" class="ddsmoothmenu">';
    $strOut.='    <ul>';
    $strOut.='        <li><a href="index.php" >Home</a></li>';
    $strOut.='        <li><a href="AboutUs.php">About Us</a>';
    $strOut.='            <ul>';
    $strOut.='                <li><a href="AboutUs.php#history">History and Profile</a></li>';
//    $strOut.='                <li><a href="AboutUs.php#vision">Vision,Mission, and Strategy</a></li>';
//    $strOut.='                <li><a href="AboutUs.php#mission">Mission</a></li>';
//    $strOut.='                <li><a href="AboutUs.php#strategy">Strategy</a></li>';
    $strOut.='                <li style="font-size: 10px"><a href="AboutUs.php#core_values">Vision, Mission, and Strategy</a></li>';
    $strOut.='                <li style="font-size: 8px"><a href="AboutUs.php#M.A.R.C.E.L.O">Guiding Principles and Core Values</a></li>';
    $strOut.='                <li><a href="AboutUs.php#pangakosapagtataya">Our Organizational Structure </a></li>';
    //$strOut.='                <li><a href="AboutUs.php#recognation">Recognation</a></li>';
    $strOut.='                <li><a href="AboutUs.php#9">Our Board of Trustees</a></li>';
    $strOut.='                <li><a href="AboutUs.php#Steering_Commitee">Our Management Teams</a></li>';
    $strOut.='                <li><a href="AboutUs.php#9">Our Field Offices</a></li>';
        $strOut.='                <li><a href="AboutUs.php#9">Our Partners and Networks</a></li>';
                $strOut.='                <li><a href="AboutUs.php#9">Our Certificates and Citations</a></li>';
//                        $strOut.='                <li><a href="AboutUs.php#9">Other Management Committee Members</a></li>';
                
        
    $strOut.='                <span></span>';
    $strOut.='            </ul>';
    $strOut.='        </li>';
    $strOut.='        <li><a href="products.php">Our Products and Services</a>';
   /* $strOut.='            <ul>';
    $strOut.='                <li><a href="#">K-Negosyo</a></li>';
    $strOut.='                <li><a href="#">K-Impok</a></li>';
    $strOut.='                <li><a href="#">K-Edukasyon</a></li>';
    $strOut.='                <li><a href="#">K-Siguro</a></li>';
    $strOut.='                <li><a href="#">K-Bahay</a></li>';
    $strOut.='            	<span></span>';
    $strOut.='            </ul>';*/
    $strOut.='      	</li>';
    
    $strOut.='      	<li><a href="newsandfetured.php">News and Events</a></li>';
    $strOut.='      	<li><a href="partners.php">Stories and Features</a></li>';
    $strOut.='      	<li><a href="jobs.php">Careers</a></li>';
    $strOut.='      	<li><a href="gallery.php">Photo Gallery</a></li>';
    $strOut.='      	<li><a href="contact.php">Contact Us</a></li>';
          // <!--  <a href="http://tr.forwallpaper.com" title="3D duvar ka&#287;&#305;d&#305;" class="header_nav"  target="_blank"><img src="images/templatemo_header_nav.png" alt="3D duvar ka&#287;&#305;d&#305;" title="3D duvar ka&#287;&#305;d&#305;" /></a> -->
    $strOut.='    </ul>';
    $strOut.='    <br style="clear: left" />';
    $strOut.='</div> ';


	echo $strOut;


?>