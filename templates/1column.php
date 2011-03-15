<?php include("parts/head.php"); ?>
<? $p = 'p'.$_GET['p'].'.php'; ?>
<body>
	<div id="container" class="no-sidebar clearfix theme theme-1 theme-2">
		<?php include("parts/header.php"); ?>
		<?php include("parts/nav.php"); ?>
		<div id="main-content">
			<div id="content-area" class="clearfix">
				<div class="toolbar">
					<a id="zoom_magnify" href="#" title="ZoomIn">Zoom In</a> | 
					<a id="zoom_minify" href="#" title="ZoomOut">Zoom Out</a> | 
					<a id="zoom_reset" href="#" title="ZoomReset">Zoom Reset</a>
				</div>
				<div id="content-top">
					<p>This is #content-top</p>
				</div><!-- #content-top -->				
				<div id="content">
					<?php include($p); ?>
				</div><!-- #content -->
				<div id="content-bottom">
					<p>This is #content-bottom</p>
				</div><!-- #content-bottom-->
			</div><!--content-area-->
		</div><!-- #main-content -->
		<?php include("parts/footer.php"); ?>		
	</div><!-- #container-->
</body>
</html>
