<!DOCTYPE html>
<?php
$menu = JSite::getMenu();
if ($menu)
    $menu = $menu->getActive();
if ($menu)
    $menu = $menu->alias;
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<jdoc:include type="head" />
	
	<link rel="shortcut icon" href="/templates/mathany/images/favicon.ico" />
	<link rel="stylesheet" href="/templates/mathany/css/template.css" />	
	<script src="/templates/mathany/js/dropmenu.js" type="text/javascript"></script>
</head>

<body class="<?php echo $menu ?>">
	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-22973977-1']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>
	<div id="top"><div><div>
			<jdoc:include type="modules" name="top" style="xhtml" />
	</div></div></div>
	
	<div id="masthead"><div>	
		<jdoc:include type="modules" name="mid" style="xhtml" />
	</div></div>
	
	<div id="body"><div><div>
		<?php if ($menu !== 'home'): ?>
			<div id="content" class="<?php echo ($this->countModules('sidebar'))? '':'wide' ?>">
				<?php if ($this->countModules('sidebar')): ?>
					<div id="sidebar">
						<jdoc:include type="modules" name="sidebar" style="xhtml" />
					</div>
				<?php endif; ?>
			
				<div id="component" class="<?php echo ($this->countModules('sidebar'))? '':'wide' ?>"><div>
					<jdoc:include type="component" />
				</div></div> <!-- /content -->
				
				<div class="clear"></div>
			</div>
		<?php endif; ?>	
		
		<?php if ($this->countModules('bottom')): ?>
			<div id="bottom"><div>
				<jdoc:include type="modules" name="bottom" style="xhtml" />
				<div class="clear"></div>
			</div></div>
		<?php endif; ?>
		<div class="clear"></div>
	</div></div></div>
	
	<div id="footer"><div>
		<div class="right">Site by<a href="http://www.ccistudios.com" target="_blank"> CCI Studios</a></div>
		<div class="left">&copy; Copyright <?php echo date('Y') ?> Dr. Drew Mathany &amp; Associates. All Rights Reserved.</div>
	</div></div>
	
</body>
</html>