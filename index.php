<?php
	$page = "home";
	if (isset($_GET["p"])) {
		//se for passar só o nome
		$page = trim($_GET["p"]);

		//se for mais de 1 variavel separado por /
		/*
		$page = trim($_GET["p"]);
		$page = explode('/',$page);
		//produto/123/x-bacon-com-ovo
		// 0 - pagina (produto) / 1 - codigo (123)
		// 3 - nome do produto (x-bacon-com-ovo)
		$codigo = $page[1];
		$produto = $page[2];
		$page = $page[0];

		*/
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Car Sale - Especialista em Carros Antigos e Relíquias</title>
	<meta charset="utf-8">
	<meta name="description" content="Revenda de carros, novos e usados de alta qualidade">
	<meta name="keywords" content="carros,novos,usados,importados,ivate">
	<meta name="viewport" content="width=device-width,initial-scale=1">

	<!-- Open Graph -->
	<meta property="og:locale" content="pt_BR">
	<meta property="og:title" content="Car Sale - Especialista em Carros Antigos e Relíquias">
	<meta property="og:description" content="Revenda de carros, novos e usados de alta qualidade">
	<meta property="og:image" content="http://pos.professorburnes.com.br/carsale/img/carsale.jpg">
	<meta property="og:image:type" content="image/jpeg">
	<meta property="og:image:width" content="800">
	<meta property="og:image:height" content="315">
	<meta property="og:type" content="website">

	<!-- Twitter Card -->
	<meta name="twitter:card" content="summary">
	<meta name="twitter:url" content="@professorburnes">
	<meta name="twitter:image" content="http://pos.professorburnes.com.br/carsale/img/carsale.jpg">
	<meta name="twitter:title" content="Car Sale - Especialista em Carros Antigos e Relíquias">

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="icon" type="image/png" href="imgs/icone.png">

	<!-- JavaScript -->
	<script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/bootstrap-inputmask.min.js"></script>
	<script type="text/javascript" src="js/jqBootstrapValidation.js"></script>

	<script>
  		$(function () { $("input,select,textarea").not("[type=submit]").jqBootstrapValidation(); } );
   </script>

</head>
<body>
	<header>
		<div class="container">
			<a href="index.php" title="Home" class="logo">
				<img src="imgs/logo.png"
				alt="CarSale">
				Car Sale
			</a>
			<div class="info">
				<span><i class="fa fa-phone"></i> 0800 011 1406</span>
				<a href="http://www.facebook.com" title="Facebook">
					<i class="fa fa-facebook"></i>
				</a>
				<a href="http://www.twitter.com" title="Twitter">
					<i class="fa fa-twitter"></i>
				</a>
				<a href="http://www.instagram.com" title="Instagram">
					<i class="fa fa-instagram"></i>
				</a>
			</div>
		</div>
	</header>

	<nav class="navbar navbar-default">
		<div class="container-fluid container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu"
				area-expanded="false">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse" 
			id="menu">
				<ul class="nav navbar-nav">
					<li>
						<a href="index.php">Home</a>
					</li>
					<li>
						<a href="sobre">Sobre</a>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						Veículos <i class="caret"></i>
						</a>

						<ul class="dropdown-menu">
							<li>
								<a href="nacionais">
								Nacionais
								</a>
							</li>
							<li>
								<a href="importados">
								Importados
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="contato">Contato</a>
					</li>
				</ul>

				<form name="form1" method="post" action="buscar" class="navbar-form navbar-right">
					<div class="input-group input-group-lg">
						<input type="text" name="busca"
						placeholder="Palavra-chave..."
						class="form-control">
						<span class="input-group-btn">
							<button type="submit"
							class="btn btn-default">
								<i class="fa fa-search"></i>
							</button>
						</span>
					</div>
				</form>
			</div>
		</div>
	</nav>

	<main>
	<?php
		//validar o loop
		if ($page == "index") $page = "home";
		
		// home -> home.php
		$page = "$page.php";
		//verificar se o arquivo existe
		if (file_exists($page))
			include $page;
		else
			include "erro.php";

	?>
	</main>

	<div class="clearfix"></div>

	<footer>
		<div class="container">
			<span class="pull-left">
				<img src="imgs/logo.png" alt="Car Sale">
				2016 - Todos os Direitos Reservados
			</span>
			<span class="pull-right">
				Desenvolvido por Dyego B. S. Donadone
			</span>
		</div>
	</footer>
</body>
</html>









