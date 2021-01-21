<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php bloginfo('name'); ?> </title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/style.css">
</head>
<body>
	<header class="header">
		<div class="nav">
			<nav class="container-fluid">
				<div class="row">
					<div class="col-md-2 offse-md-1">
						<a class="logo" href="#">
							<img class="logo__img" src="<?php bloginfo('template_directory') ?>/img/logo.png" alt="logo">
						</a>
					</div>	
					<div class="col-md-6 offset-md-1">
						<ul class="menu-header d-flex justify-content-around align-items-center">
							<li class="menu-header__item"><a class="menu-header__link active" href="#">HTML</a></li>
							<li class="menu-header__item"><a class="menu-header__link" href="#">CSS</a></li>
							<li class="menu-header__item"><a class="menu-header__link" href="#">JavaScript</a></li>
							<li class="menu-header__item"><a class="menu-header__link" href="#">jQuery</a></li>
							<li class="menu-header__item"><a class="menu-header__link" href="#">Vue.js</a></li>
							<li class="menu-header__item"><a class="menu-header__link" href="#">PHP</a></li>
							<li class="menu-header__item"><a class="menu-header__link" href="#">WordPress</a></li>
							<li class="menu-header__item"><a class="menu-header__link" href="#">Bitrix</a></li>
							<li class="menu-header__item"><a class="menu-header__link" href="#">Примеры</a></li>
							<li class="menu-header__item"><a class="menu-header__link" href="#">Контакты</a></li>
						</ul>
					</div>
				</div>			
			</nav>
		</div>
	</header>