<!DOCTYPE html PUBLIC 
"-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
$menu = JSite::getMenu();
if ($menu)
    $menu = $menu->getActive();
if ($menu)
    $menu = $menu->alias;
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<jdoc:include type="head" />
	
	<link rel="stylesheet" href="/templates/mathany/css/template.css" />
	<link rel="shortcut icon" href="/templates/mathany/images/favicon.ico" />
	<script src="/templates/mathany/js/dropmenu.js"></script>
</head>

<body class="<?php echo $menu ?>">
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
			</div>
				<div class="clear"></div>
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