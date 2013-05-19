<html>
<head>
<title><?php echo $this->lib->title(); ?></title>


<script type='text/javascript' src='<?php echo $this->config->item('css_path') ?>js/ga.js'></script>
<script type='text/javascript' src='<?php echo $this->config->item('css_path') ?>js/metrika.js'></script>
<script type='text/javascript' src='<?php echo $this->config->item('css_path') ?>js/jquery.js'></script>
<script type='text/javascript' src='<?php echo $this->config->item('css_path') ?>js/popup.js'></script>


<script type="text/javascript" language="JavaScript">
<!--
	function HideContent(d) {
		document.getElementById(d).style.display = "none";
	}

	function ShowContent(d) {
		document.getElementById(d).style.display = "table-row";
	}

	function ReverseDisplay(d) {
		if(document.getElementById(d).style.display == "none") { document.getElementById(d).style.display = "table-row"; }
			else { document.getElementById(d).style.display = "none"; }
	}
//-->
</script>

</head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php $theme = (isset($_COOKIE['theme'])) ? $_COOKIE['theme'] : 'black' ; ?>
<link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('css_path').'/css/'.$theme; ?>.css" />



<body>
	<div id="main">
		<div id="header">

			<h1><?php echo anchor($this->config->item('css_path'),'розклад'); ?></h1>

			<div id="right">

				<h3 style="margin-left:14.7%"> </h3>
				<h3><a href="http://vk.com/kepsch" target="_blank">вк</a></h3>
				
			</div>

		</div>

		<div id="panel">

			<span>
				<?php foreach ($this->config->item('panel_items') as $link => $name) : ?>				
					<?php $c = ($this->router->class == $link) ? ' class="this"' : '';  ?>

				<a href="<?php echo $this->config->item('base').'/admin/'.$link; ?>"<?= $c ?>><?= $name ?></a>
				
				<?php endforeach; ?>
			</span>

		</div>

		<div id="content">

		<?php echo $template['body']; ?>
			
		</div>

		<div class="clear"></div>

	</div>

	<div id="footer">		

		<a href="<?php echo $this->config->item('base').'/admin'?>">адміністрування</a>
		<a href="<?php echo $this->config->item('base').'/groups'?>">групи</a>
		<a href="<?php echo $this->config->item('base').'/teachers'?>">викладачі</a>
		<a href="<?php echo $this->config->item('base').'/theme'?>">змінити тему</a>
		<a href="<?php echo $this->config->item('base').'/download'?>">завантажити</a>
		<?php if ($this->session->userdata('user_id')) : ?>

		<a href="<?php echo $this->config->item('base').'/logout'?>">вийти [<?php echo $this->session->userdata('username'); ?>]</a>			
		<?php else: ?>
		
		<a href="<?php echo $this->config->item('base').'/login'?>">увійти</a>			
		<?php endif; ?>
		
		<?php if ($theme == 'pink') : ?>
		<br>
		<br><a>рожева тема для іри яцук</a>
		<?php endif; ?>
		<div id="copyright">
			(c) <a href="http://flashbag.if.ua/" target="_blank">flashbag.if.ua</a>
		</div>
	</div>
</body>
</html>
