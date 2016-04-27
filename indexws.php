<?php
			
	require_once("support/crud.php");
	$loader=new loader;
	
		require_once("support/loader.php");
	$loader1=new loader1;

	require_once("administrator/support/dbConn.php");
	$database=new Database();
	$db =& $database;		
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Kasagana-ka</title>
<meta name="keywords" content="green jelly, theme, free templates, nivo image slider, website, templatemo, CSS, HTML" />
<meta name="description" content="Green Jelly Theme, free CSS template provided by templatemo.com" />
<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />

<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>

<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/ddsmoothmenu.js">

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
 
 <style type="text/css">
 	p{
	font-family:Arial, Helvetica, sans-serif;
	font-size:12px;
	color:#4e4f4e
}
           img.left {float: left;}
img.rightt {float: right;}

 
 </style>
 <!-- *************************************************************8888 -->
	<style type="text/css">
		</style>
<!-- ****************************************************************** -->

<script type="text/javascript">
			$(document).ready(function(){ 
			
			$(window).scroll(function(){
				if ($(this).scrollTop() > 100) {
					$('.scrollup').fadeIn();
				} else {
					$('.scrollup').fadeOut();
				}
			}); 
			
			$('.scrollup').click(function(){
				$("html, body").animate({ scrollTop: 0 }, 600);
				return false;
			});
 
		});
		</script>


<!-- ********************************************************************* -->

<!-- **************************Mini Slider******************************************* -->
<link media="all" type="text/css" rel="stylesheet" href="css/all.css" >
	<script type="text/javascript" src="js/mootools-core-1.4.5-full-nocompat-yc.js"></script>
	<script type="text/javascript" src="js/slideGallery.js"></script>
	<script type="text/javascript">
		window.addEvent("domready", function() {
			/* Example 1 */
			var gallery1 = new slideGallery($$(".gallery1"), {
				steps: 3,
				mode: "callback",
				autoplay: true,
				paging: true,
				pagingHolder: ".paging",
				onStart: function() {
					this.gallery.getElement(".info").set("html", parseInt(this.current+1) + "-" + parseInt(this.visible+this.current) + " from " + this.items.length);
				},
				onPlay: function() { this.fireEvent("start"); }
			});
					
		});
	</script>



<!-- ***************************End of Mini Slider*********************************** -->

</head>
<body>

<div id="templatemo_wrapper">
	<div id="templatemo_header">
                <div class="cleaner"></div>
                
    </div> <!-- end of header -->
    <?php
    	require_once("support/menu.php");
    ?> <!-- end of menu -->
    <?php $loader->loadSlider(); ?> 
    <script type="text/javascript" src="js/jquery-1.4.3.min.js"></script>
    <script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
    <script type="text/javascript">
	    $(window).load(function() {
	    $('#slider').nivoSlider();
	    });
    </script>
    
    <div id="templatemo_main">
        <!--dsadsad->-->
			<div class="col_5 float_l">
				<h2 style="width:490px; border-bottom:0.5px gray solid;" align="center">Words from our Board of Trustees</h2>
				<img src="administrator/images/welcome/sample.jpg"  class=" image_frame_160 left "  style="margin-right:10px">
				<p style= "font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:100"><a href="#">In the Service of the Urban Poor</a></p>
				<p>By: Fernando Aldaba</p>
				<p>Position: Chairman of the Board</p>
				<p>We at KASAGANA-KA Development Center, Inc. pursue with passion our main slogan “Our core business is service.” Urban poor communities in Metro Manila and adjoining areas constitute the focus of our efforts and, hence, our major client-beneficiaries. We offer a range of products and services to meet the concerns of and bring positive change to the lives of the urban poor – their families and their communities. Along with credit for livelihood activities and microentrepreneurship, KDCI provides our client-beneficiaries with support in their savings, housing, health, education, and microinsurance needs as well as values and skills formation. We deliver every product and service with utmost dedication and respect for the urban poor’s capacity to realize their full potentials toward the attainment of sufficiency and responsibility.</p>
			</div>

			<div class="col_2 float_r">
				<h2 style=" border-bottom: 1px solid gray;width:380px" align="center">About Us</h2>
				<p><b>KASAGANA-KA Development Center</b>, Inc. is a social development nongovernment organization. At the core of its operation is direct and multiple services to its beneficiaries aimed at creating vibrant economic and social infrastructures in urban poor communities. It uses microfinance as a key strategy in providing additional livelihood opportunities to disadvantaged and vulnerable families in Metro Manila and neighboring urban areas. As a service organization, it is guided by a perspective that uplifting the conditions of the urban poor is a multifaceted undertaking. It has thus bundled its savings and loan activities with services that offer fundamental social protection, including education, health, shelter, and microinsurance through theKASAGANA-KA Mutual Benefit Association(KMBA). Women comprise the primary client-beneficiaries of KDCI but members of these women’s families, particularly children of school age, also directly benefit from the various products and services it offers.KDCI traces its history from the Foundation for Development Alternatives Inc., an NGO formed in 1985 in response to the critical need to address the concerns of the urban poor. As a complement to its work </p>
					
			</div>
        <!-- mini slider -->
    
		
        
        <!-- End of mini slider -->
        
        
		
		
    </div> <!-- end of main -->
        <div id="templatemo_main">
        	        <div class="gallery gallery1">
        	<h2 align="center">Our Products and Services</h2>
				<div class="holder">
					<?php $loader->miniSlider($db);?>
					
				</div>
			
		</div>
        </div>
    		<div style="background-color:white;border-top:thin solid #f6f6f6;height:40px" >
			<?php $loader->social($db);?>
		</div>

</div>
<?php require_once("support/footer.php") ?>

<script type='text/javascript' src='js/logging.js'></script>
</body>
</html>