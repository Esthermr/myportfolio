<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
	<meta charset="<?php bloginfo('charset');?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="icon" type="image/x-icon" href="<?php echo STYLEROOT; ?>/img/favicon.svg">
	<title><?php wp_title('|', true, 'right');?><?php bloginfo('name');?></title>
	<?php wp_head();?>
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
</head>
<body class="entero">
	<header>
		<div class="cab">
			<div class="logo">
			<a href="http://localhost/REMStudio/"><img src="<?php echo STYLEROOT;?>/img/logo.png" alt=""></a>
			</div>
			<nav class="secciones">
				<ul>
					<li><a href="http://localhost/REMStudio/"><span class="icon material-icons">home</span><span class="text">Home</span></a></li>
					<li><a href="#aboutme"><span class="icon material-icons">person</span><span class="text">Sobre mí</span></a></li>
					<li><a href="#whatido"><span class="icon material-icons">work</span><span class="text">Qué hago</span></a></li>
					<li><a href="#curric"><span class="icon material-icons">assignment</span><span class="text">Currículo</span></a></li>
					<li><a href="#portfolio"><span class="icon material-icons">dashboard</span><span class="text">Portfolio</span></a></li>
					<li><a href="#blog"><span class="icon material-icons">article</span><span class="text">Blog</span></a></li>
					<li><a href="#contact"><span class="icon material-icons">mail</span><span class="text">Contacto</span></a></li>
				</ul>
			</nav>
			<div class="rrss">
				<a href="https://www.instagram.com/thateliel/"><i class="fab fa-instagram"></i></a>
				<a href="https://esthermr.github.io"><i class="fab fa-github"></i></a>	
			</div>
			<span class="burger material-icons">menu</span>
		</div>
	</header>