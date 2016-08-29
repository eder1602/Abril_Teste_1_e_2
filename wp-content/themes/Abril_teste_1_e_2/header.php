<!DOCTYPE html>
<head>
<title>Teste</title>

<?php $path = get_bloginfo('template_url'); ?>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=no" />

<link href='https://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>


<!-- Bootstrap -->
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" rel="stylesheet" type="text/css">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-3.1.0.min.js"></script>

</head>
<body>


	<div class="bgShadow">
	</div>

	<div class="bgProjectDescription">
	</div>
	

		<header>
			<div class="container">
				<div class="mainBanner">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/publicidade.png">
				</div>

				<div class="mainMenu">
					<div class="row menuMobile">
						<div class="col-xs-2">
							<div class="searchMobile">
								<a href="#"><label class="glyphicon glyphicon-search" aria-hidden="true"></a>
							</div>
						</div>

						<div class="col-xs-8">
							<h1>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Quatro Rodas" ><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/quatroRodas.png" title="Quatro Rodas" alt="Quatro Rodas" class="logo"></a>
							</h1>
						</div>
						<div class="col-xs-2">
							<div class="controlMenu">
								<a href="#" class="menuHamburguer">
									<label class="glyphicon glyphicon-menu-hamburger" aria-hidden="true" for="show-menu" class="show-menu"></label>
								</a>
							</div>
						</div>
					</div>
			

					<h1 class="left menuExpanded">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Quatro Rodas" ><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/quatroRodas.png" title="Quatro Rodas" alt="Quatro Rodas" class="logo"></a>
					</h1>

					<nav>
						<ul>
							<li>
								<a href="#" title="Carros">Carros <label class="glyphicon glyphicon-menu-down" aria-hidden="true"></label></a>
							</li>
							<li>
								<a href="#" title="Carros">Testes <label class="glyphicon glyphicon-menu-down" aria-hidden="true"></label></a>
							</li>
							<li>
								<a href="#" title="Carros">Notícias <label class="glyphicon glyphicon-menu-down" aria-hidden="true"></label></a>
							</li>
							<li>
								<a href="#" title="Carros">Auto Serviço <label class="glyphicon glyphicon-menu-down" aria-hidden="true"></label></a>
							</li>
							<li>
								<a href="#" title="Carros">Guia de Compras</a>
							</li>
							<li>
								<a href="#" title="Carros">tabela fipe <label class="glyphicon glyphicon-menu-down" aria-hidden="true"></label></a>
							</li>
							<li>
								<a href="#" title="Carros">Assine</a>
							</li>
						</ul>
					</nav>
					<div class="mainSearch">
						<form action="<?php bloginfo('url'); ?>">
							<input type="text" placeholder="PESQUISAR">
							<button type="submit" class="btn" id="button-search" value="<?php _e('Search');?>">
								<label class="glyphicon glyphicon-search" aria-hidden="true" ></label>
							</button>
						</form>					
					</div>

				</div>
			</div>
		</header>