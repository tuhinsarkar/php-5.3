<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Home</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="engine1/style.css" />
	<script type="text/javascript" src="engine1/jquery.js"></script>
	<!-- End WOWSlider.com HEAD section -->
<link  rel="stylesheet" type="text/css" href="css/start/jquery-ui-1.10.1.custom.css" />
	<script src="js/jquery-1.9.1.js"></script>
	<script src="js/jquery-ui-1.10.1.custom.js"></script>
    <link  rel="stylesheet" type="text/css" href="css/home_theme.css" />
    

<script>
$(function() {
		
		$( "#accordion" ).accordion();
		

		
		var availableTags = [
			"ActionScript",
			
		];
		$( "#autocomplete" ).autocomplete({
			source: availableTags
		});
		

		
		$( "#button" ).button();
		$( "#radioset" ).buttonset();
		

		
		$( "#tabs" ).tabs();
		

		
		$( "#dialog" ).dialog({
			autoOpen: false,
			width: 400,
			buttons: [
				{
					text: "Ok",
					click: function() {
						$( this ).dialog( "close" );
					}
				},
				{
					text: "Cancel",
					click: function() {
						$( this ).dialog( "close" );
					}
				}
			]
		});

		// Link to open the dialog
		$( "#dialog-link" ).click(function( event ) {
			$( "#dialog" ).dialog( "open" );
			event.preventDefault();
		});
		

		
		$( "#datepicker" ).datepicker({
			inline: true
		});
		

		
		$( "#slider" ).slider({
			range: true,
			values: [ 17, 67 ]
		});
		

		
		$( "#progressbar" ).progressbar({
			value: 20
		});
		

		// Hover states on the static widgets
		$( "#dialog-link, #icons li" ).hover(
			function() {
				$( this ).addClass( "ui-state-hover" );
			},
			function() {
				$( this ).removeClass( "ui-state-hover" );
			}
		);
	});
	</script>
    <style>
	body{
		font: 75% "Trebuchet MS", sans-serif;
		
	}
	.demoHeaders {
		margin-top: 2em;
	}
	#dialog-link {
		padding: .4em 1em .4em 20px;
		text-decoration: none;
		position: relative;
	}
	#dialog-link span.ui-icon {
		margin: 0 5px 0 0;
		position: absolute;
		left: .2em;
		top: 50%;
		margin-top: -8px;
	}
	#icons {
		margin: 0;
		padding: 0;
	}
	#icons li {
		margin: 2px;
		position: relative;
		padding: 4px 0;
		cursor: pointer;
		float: left;
		list-style: none;
	}
	#icons span.ui-icon {
		float: left;
		margin: 0 4px;
	}
	.fakewindowcontain .ui-widget-overlay {
		position: absolute;
	}
	</style>
</head>

<body background="site_img/body_bg.png" class="">

<div style="background:linear-gradient(#999,#666); 
height:40px;  border-radius:0px 0px 6px 6px;  
padding-top:10px; padding-left:10px; padding-right:10px; padding-bottom:10px; margin-top:-7px; ">
	
</div>

<!--body div-->
<div id="div_body_main">
  <div id="wowslider-container1">
		<div class="ws_images">
        	<ul>
				<?php 
					include "/admin/class/AMSBaseClass.php";
					$a=AMSBaseClass::uniqueRandom();
				?>
				<li><img src="data1/images/<?php echo $a[0].".jpg" ?>" alt="vw2" title="New Indica V2" id="wows1_0"/></li>
				<li><img src="data1/images/<?php echo $a[1].".jpg" ?>" alt="vw2" title="New Indica V2" id="wows1_0"/></li>
			<!--	<li><img src="data1/images/<?php echo $a[2].".jpg" ?>" alt="vw2" title="New Indica V2" id="wows1_0"/></li>
				<li><img src="data1/images/<?php echo $a[3].".jpg" ?>" alt="vw2" title="New Indica V2" id="wows1_0"/></li>
			<!--	<li><img src="data1/images/vw2.jpg" alt="vw2" title="New Indica V2" id="wows1_0"/></li>
				<li><img src="data1/images/vw2.jpg" alt="vw2" title="New Indica V2" id="wows1_0"/></li>
				<li><img src="data1/images/tvd90_v2_000.jpg" alt="TVD90_V2_000" title="TVD90_V2_000" id="wows1_1"/></li>
				<li><img src="data1/images/vw1.jpg" alt="vw1" title="vw1" id="wows1_2"/></li>
				<li><img src="data1/images/renault_scala.jpg" alt="vw1" title="The New Renault " id="wows1_2"/></li> -->
			</ul>
        </div>
		<div class="ws_bullets">
        	<div>
				<a href="#" title="New Indica V2"><img src="data1/tooltips/vw2.jpg" alt="vw2"/>1</a>
				<a href="#" title="TVD90_V2_000"><img src="data1/tooltips/tvd90_v2_000.jpg" alt="TVD90_V2_000"/>2</a>
				<a href="#" title="vw1"><img src="data1/tooltips/vw1.jpg" alt="vw1"/>3</a>
			</div>
    	</div>
<!--		<a class="wsl" href="http://wowslider.com">Vertical Image Slider jQuery by WOWSlider.com v3.1</a> -->
<!--	<div class="ws_shadow"></div> -->
	</div>
	<script type="text/javascript" src="engine1/wowslider.js"></script>
	<script type="text/javascript" src="engine1/script.js"></script>
	<!-- End WOWSlider.com BODY section -->
	<!--image slider div-
	<div style="background:linear-gradient(#093,#999); 
		height:300px; width:760px; border-radius:4px 4px 4px 4px;  
		padding-top:10px; padding-left:10px; padding-right:10px; padding-bottom:10px;
		margin-top:3px; margin-left:3px;">image slider div
	</div> -->
    <!--new in showroom div-->
    <div id="div_headerDiv_3"><span id="font_div_headerDiv_1">New Products</span></div>
    <div id="div_new_products">
        new in showroom div-fetch this from stock_master
        </div>


    <!--utility 1 div-->
    <div id="div_headerDiv_1"><span id="font_div_headerDiv_1">Select Car</span></div>
    <div id="div_utility_1">
    	<div id="accordion" style="width:398px;">
			<h3>Car by Price</h3>
				<div>
                	<p>&lt;200000(INR)</p>
                    <p>&gt;200000(INR)</p>
                    <p>&gt;300000(INR)</p>
                </div>
            <h3>Car by fuel type</h3>
            	<div>Marquee</div>
			<h3>Car by Style</h3>
				<div>
                	<p>Sedan</p>
                    <p>Hatchback</p>
                    <p>Convirtable</p>
                </div>
			<h3>Car by Make</h3>
				<div>Marquee</div>
		</div>
    </div>


        
	<div id="div_headerDiv_2"><span id="font_div_headerDiv_1">Quick Links</span></div>
    <!--utility 2 div -->
    <div id="div_utility_2">
    	<div id="tabs">
			<ul>
				<li><a href="#tabs-1">Customer</a></li>
				<li><a href="#tabs-2">Servicing</a></li>
				<li><a href="#tabs-3">Review</a></li>
			</ul>
			<div id="tabs-1">
            
            </div>
			<div id="tabs-2">
            
            </div>
			<div id="tabs-3">
            
            </div>
		</div>
   </div>
<div style="background:linear-gradient(#999,#FFF); 
height:75px; width:1000px; border-radius:10px 10px 0px 0px; border:solid #FFF; border-width:1px; 
margin-top:410px; margin-left:-1px; padding-top:10px; alignment-adjust:central; text-align:center; ">
<span>
	<a href="index.php" >Home</a>
     | 
    <a href="#" > View cars </a>
    | 
    <a href="#">Car reviews </a>
    | 
    <a href="#">Choose car </a>
    | 
    <a href="#">Image gallery </a>
    | 
    <a href="#">Careers</a>
    | 
    <a href="#">About us</a>
    |
    <a href="about_this_project.php">About this project</a>
</span><br />
<span>This project is developed by Banashree Mazumdar & Tuhin Sarkar </span><br />
<span>Copyright &copy; Banashree Mazumdar & Tuhin Sarkar by 2013</span>
</div>
</body>
</html>
