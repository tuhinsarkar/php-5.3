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
body {
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
<style></style>
</head>
<body background="site_img/body_bg.png" class="">
<div style="background:linear-gradient(#999,#666); 
height:40px;  border-radius:0px 0px 6px 6px;  
padding-top:10px; padding-left:10px; padding-right:10px; padding-bottom:10px; margin-top:-7px; "> </div>

<!--body div-->
<div id="div_body_main">
  <h4>About this project:</h4>
  <div id="tabs">
    <ul>
      <li><a href="#tabs-1">Technology</a></li>
      <li><a href="#tabs-2">Development Tools</a></li>

    </ul>
    <div id="tabs-1">
      <div id="accordion">
        <h3>PHP v5.4.3</h3>
        <div id="div_container"> <a href="http://www.php.net" title="goto PHP webpage"><img src="site_img/php.gif"/></a>
          <h3 id="div_container">PHP version 5.4.3 </h3>
          <hr/>
          <h4 id="div_container">An introduction to PHP: </h4>
          <p id="div_container">PHP is a server-side scripting language, such as ASP and JSP. PHP is an open source and free to download and use. It is a powerful scripting language for creating dynamic and interactive websites. PHP files may contain text, HTML tags and scripts. PHP files have a file extension of ".php", ".php3", or ".phtml".
            As a general rule, PHP programs run on a Web server, and serve Web pages to visitors on request.</p>
          <h4 id="div_container">Why PHP? </h4>
          <p id="div_container">PHP runs on different platforms such as Windows, Linux, Unix, etc. PHP is easy and fast to learn and runs efficiently on the server side. C programmers can easily master PHP as the PHP syntax is somewhat similar to C. </p>
          <p id="div_container"> PHP is compatible with almost all servers used today (Apache, IIS, etc.). PHP supports many databases such as MySQL, Oracle, PostgreSQL etc. PHP with MySQL database and Apache Server is a very good and popular combination. PHP combined with MySQL are cross-platform. </p>
          <p id="div_container"> PHP is the widely-used, free, and efficient alternative to competitors such as Microsoft's ASP and Sun Microsystems JSP. PHP is perfectly suited for Web development and can be embedded directly into the HTML code. PHP is often used together with Apache (web server) on various operating systems. It can be also used with Microsoft's IIS on Windows. </p>
          <h4 id="div_container">Language features of PHP: </h4>
        </div>
        <h3>Mysql v5.5.24</h3>
        <div>
          <p>Sedan</p>
          <p>Hatchback</p>
          <p>Convirtable</p>
        </div>
        <h3>Apache v2.2.22</h3>
        	<div id="div_container"> <a href="http://www.apache.org/" title="goto Apache webpage"><img src="site_img/apache.png"/></a>
          <h3 id="div_container">Apache version 2.2.22 </h3>
          <hr/>
          <h4 id="div_container">An introduction to Apache: </h4>
          <p id="div_container">The Apache HTTP Server is a powerful, flexible, HTTP/1.1 compliant web server.
Apache implements the latest protocols, including HTTP/1.1 (RFC2616) and 
is highly configurable and extensible with third-party modules. It can be customised by writing 'modules' using the Apache module API.
Apache provides full source code and comes with an unrestrictive license.
Runs on Windows 2000, Netware 5.x and above, OS/2, and most versions of Linux/Unix, as well as several other operating systems.</p>
          <h4 id="div_container">Why Apache? </h4>
          <p id="div_container">PHP runs on different platforms such as Windows, Linux, Unix, etc. PHP is easy and fast to learn and runs efficiently on the server side. C programmers can easily master PHP as the PHP syntax is somewhat similar to C. </p>
          <p id="div_container"> PHP is compatible with almost all servers used today (Apache, IIS, etc.). PHP supports many databases such as MySQL, Oracle, PostgreSQL etc. PHP with MySQL database and Apache Server is a very good and popular combination. PHP combined with MySQL are cross-platform. </p>
          <p id="div_container"> PHP is the widely-used, free, and efficient alternative to competitors such as Microsoft's ASP and Sun Microsystems JSP. PHP is perfectly suited for Web development and can be embedded directly into the HTML code. PHP is often used together with Apache (web server) on various operating systems. It can be also used with Microsoft's IIS on Windows. </p>
          <h4 id="div_container">Other features of Apache: </h4>
        </div>
      </div>
    </div>
    <div id="tabs-2">
    	        <div id="div_container"><a href="http://www.netbeans.org/" title="goto Netbeans.org"> <img src="site_img/nb73-110X32.png"/></a>
        	<h4 id="div_container">Net Beans IDE version 7.2.1 (for PHP)</h4> 
            <p id="div_container">The NetBeans PHP editor offers code templates and code generation (Getters and Setters), refactoring (Instant Rename), parameter tooltips, hints and quick fixes (Implement All Abstract Methods), and smart code completion (including bracket completion). Benefit from syntactic and semantic code highlighting, pop-up documentation, code formating and folding, marking of occurrences and exit points, clever try/catch code completion, smart method parameter pre-filling, and rectangular selection.</p>
            </div>
            <hr/>
        <div id="div_container"> <a href="http://git-scm.com/" title="goto git webpage"><img src="site_img/Git-Logo-2Color.png" height="67" width="160"/></a>
          <h4 id="div_container">Version Control System-git version 1.8.1 </h4>
          <p id="div_container">Git is a free and open source distributed version control system designed to handle everything from small to very large projects with speed and efficiency.
Git is easy to learn and has a tiny footprint with lightning fast performance. It outclasses SCM tools like Subversion, CVS, Perforce, and ClearCase with features like cheap local branching, convenient staging areas, and multiple workflows. </p>
          <hr />
        </div>
    </div>    
      </div>
</div>
<div style="background:linear-gradient(#999,#FFF); 
height:75px; width:1000px; border-radius:10px 10px 0px 0px; border:solid #FFF; border-width:1px; 
margin-top:810px; margin-left:160px; padding-top:10px; alignment-adjust:central; text-align:center; "> <span> <a href="index.php" >Home</a> | <a href="#" > View cars </a> | <a href="#">Car reviews </a> | <a href="#">Choose car </a> | <a href="#">Image gallery </a> | <a href="#">Careers</a> | <a href="#">About us</a> | <a href="about_this_project.php">About this project</a> </span><br />
  <span>This project is developed by Banashree Mazumdar & Tuhin Sarkar </span><br />
  <span>Copyright &copy; Banashree Mazumdar & Tuhin Sarkar by 2013</span> </div>
</body>
</html>
