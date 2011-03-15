<?php header("Content-type: text/html; charset=utf-8");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8; IE=edge; chrome=1" />
	<meta http-equiv="Content-Script-Type" content="text/javascript" />
    <meta http-equiv="Content-Style-Type" content="text/css" />

	<!--  Mobile Viewport Fix
	j.mp/mobileviewport & davidbcalhoun.com/2010/viewport-metatag 
	device-width : Occupy full width of the screen in its current orientation
	initial-scale = 1.0 retains dimensions instead of zooming out if page height > device height
	maximum-scale = 1.0 retains dimensions instead of zooming in if page width < device width
	-->
	<!-- 	
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;" />
	-->

	<title>GetReady</title>
	<link type="text/css" media="all" rel="stylesheet" href="../stylesheets/core.css?v=1" /><!--ezpublish reset-->
	<link type="text/css" media="all" rel="stylesheet" href="../stylesheets/reset.css?v=1" /><!--eric meyer reset -->
	<link type="text/css" media="all" rel="stylesheet" href="../stylesheets/style.css?v=1" /><!--main styles-->
	<link type="text/css" media="all" rel="stylesheet" href="../stylesheets/typography.css?v=1" /><!--editor/typography styles-->
	<link type="text/css" media="print" rel="stylesheet" href="../stylesheets/print.css?v=1" /><!--printer and pdf styles-->
	<link type="text/css" media="handheld" rel="stylesheet" href="../stylesheets/handheld.css?v=1" /><!-- For the less-enabled mobile browsers like Opera Mini -->
	<!--[if IE]>
	<link type="text/css" rel="stylesheet" media="all" href="../stylesheets/ie.css" />
	<![endif]-->
	<!-- Place favicon.ico and apple-touch-icon.png in the root of your domain and delete these references -->
	<!--
	<link type="image/x-icon" rel="shortcut icon" href="../images/favicon.ico" />
	<link type="image/x-icon" rel="apple-touch-icon" href="../images/apple-touch-icon.png" />
	-->
	<script type="text/javascript" src="../javascript/head.min.js"></script>
	<script type="text/javascript">
		var isIE6 = 0;
		if(!('maxHeight' in document.createElement('div').style)){
			isIE6 = 1;
		};
		head.js(
			"https://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js",
			"https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.min.js",
			function(){
				if(!window.jQuery){
					head.js("../javascrip/jquery.min.js");
				};
				head.js(
					"../javascript/jquery.validate.js",
					//"../javascript/ui.selectmenu.js",
					//"../javascript/jquery.filestyle.js",
					"../javascript/script.js"
				);
			}
		);
		if (head.browser.ie)  {
			head.js("http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js");		
		};
		if(isIE6){
			head.js("../javascript/DD_belatedPNG_0.0.8a-min.js");		
		};
	</script>
	<!-- 	I hide this line because SELECTIVZR.JS may confilc with head.js -->
	<!-- 	<script type="text/javascript" src="../javascript/selectivizr.js"></script> -->
</head>