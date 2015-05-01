<?php
defined( '_JEXEC' ) or die( 'Access to this location is RESTRICTED.' );
echo '<?xml version="1.0" encoding="utf-8"?'.'>'; 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
<jdoc:include type="head" />
<?php
	// inserting mootools
		JHTML::_('behavior.mootools');
?>
<meta name="designer" content="Juergen Koller - http://www.lernvid.com" />
<meta name="licence" content="Copyright LernVid.com - Creative Commons Sharalike 3.0" />
<link href="templates/<?php echo $this->template ?>/css/template.css" rel="stylesheet" type="text/css" media="all" />
<?php if (($this->params->get('useJavascript')) !=0) : ?>
	<script type="text/javascript" src="templates/<?php echo $this->template ?>/js/hover.js"></script>
<?php endif; ?>	
<?php if (($this->params->get('useFade')) !=0) : ?>	
	<script type="text/javascript" src="templates/<?php echo $this->template ?>/js/fade.js"></script>
<?php endif; ?>	
<!--[if IE 7]>
	<link href="templates/<?php echo $this->template ?>/css/ie7.css" rel="stylesheet" type="text/css" media="all" />
<![endif]-->
<!--[if lt IE 7]>
	<link href="templates/<?php echo $this->template ?>/css/ie5x6x.css" rel="stylesheet" type="text/css" media="all" />
<![endif]-->
<?php
	if($this->countModules("left")&&!$this->countModules("right")){ $contentwidth="left";}
	if($this->countModules("right")&&!$this->countModules("left")){ $contentwidth="right";}
	if($this->countModules("left")&&$this->countModules("right")) {$contentwidth="middle"; }
?>
</head>
<body>
<div id="wrapper">
	<div id="header_container">
			<div id="header">
				<a id="homelink" href="<?php echo  $this->params->get('HomeLink');?>" title="<?php echo  $this->params->get('HomeLinkTitle');?>"></a>
				<?php if (($this->params->get('showSitetitle')) !=0) : ?>
					<div id="sitetitle" style="color: <?php echo  $this->params->get('FontColor');?>; font-size:<?php echo  $this->params->get('FontSize');?>px;"><?php echo $mainframe->getCfg('sitename');?></div>
				<?php endif; ?>
				<?php if($this->countModules('headmodule')) : ?>
					<div id="headmodule">
			             <jdoc:include type="modules" name="headmodule" style="xhtml" />
					</div>
				<?php endif; ?>
				<?php if (($this->params->get('useFlashHeader')) !=0) : ?>
					<div id="flashheader">
						<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
						    codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,24"
						    width="980" height="250">
						    <param name="movie" value="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template?>/fl/header.swf" />
						    <param name="quality" value="high" />
						    <param name="menu" value="false" />
						    <param name="wmode" value="transparent" />
						  <!--[if !IE]> <-->
						    <object data="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template?>/fl/header.swf"
						    width="980" height="250" type="application/x-shockwave-flash">
						    <param name="quality" value="high" />
						    <param name="menu" value="false" />
						    <param name="pluginurl" value="http://www.macromedia.com/go/getflashplayer" />
						    <param name="wmode" value="transparent" />
						  No Flash Player found! Download the latest Adobe Flash Player from Adobe.com.
						    </object>
						  <!--> <![endif]-->
						</object>
					</div>
				<?php endif;?>
			</div> 
	</div>
	<div id="navigation_container">
		<?php if($this->countModules('user3')) : ?>
			<div id="navigation">
	             <jdoc:include type="modules" name="user3" style="xhtml" />
			</div>
		<?php endif; ?>
	</div>
	<div class="clr"></div>
	<div id="container">
		<div id="breadcrumb">
			<?php if($this->countModules('breadcrumb')) : ?>
				<div id="breadcrumbs">
	            	<img src="images/M_images/arrow.png" alt="Direction"/><jdoc:include type="module" name="breadcrumbs" />
			    </div>
			<?php endif; ?>	
		</div>
		<div id="page_content">
				<?php if($this->countModules('left')) : ?>
					<div id="left_outer">
						<div id="left_top"></div>
							<div id="sidebar_left">
					             <jdoc:include type="modules" name="left" style="rounded" />
							</div>
						<div id="left_bottom"></div>
					</div>	
				<?php endif; ?>		
				<?php if($this->countModules('right')) : ?>
					<div id="sidebar_right">
			             <jdoc:include type="modules" name="right" style="rounded" />
					</div>
				<?php endif; ?>		
			    <div id="content_out<?php echo $contentwidth; ?>">
					<div id="content">
						<jdoc:include type="message" />
						 <jdoc:include type="component" />
					</div>
					<?php if($this->countModules('user1 or user2')) : ?>
						<div id="user_modules1">
							<?php if($this->countModules('user1')) : ?>
								<div id="user1">
						           <jdoc:include type="modules" name="user1" style="rounded" />
								</div>
							<?php endif; ?>			
							<?php if($this->countModules('user2')) : ?>
								<div id="user2">
							           <jdoc:include type="modules" name="user2" style="rounded" />
								</div>
							<?php endif; ?>			
					</div>
					<?php endif; ?>			
					<div class="clr"></div>
				</div>
		</div>	
		<div class="clr"></div>
		<div id="container2">
			<div id="footer">
				<jdoc:include type="modules" name="footer" />
			</div>
			<div class="clr"></div>
		</div>
	</div>
	<div id="bottom_container">
		<div id="bottom">
			<div id="go_top"><p><a href="#">TOP</a></p></div>
			<div id="copyright_info">
				<p>&copy; <strong><?php echo $mainframe->getCfg('sitename');?></strong> - <?php echo JHTML::Date($this->date_field, "%Y"); ?> - all rights reserved | <a href="http://www.lernvid.com" title="LernVid.com" target="_blank"> Template Design: LernVid.com</a></p>
			</div>
		</div>
	</div>
	<div class="clr"></div>
</div>
<jdoc:include type="modules" name="debug" style="xhtml" />
</body>
</html>