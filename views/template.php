<!DOCTYPE html>
<html lang="pt">
	<head>
		<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <meta http-equiv="x-ua-compatible" content="ie=edge">
	    <title>Gerenciador Financeiro</title>
	    <!-- Font Awesome -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	    <!-- Bootstrap core CSS -->
	    <link href="<?php echo URL; ?>/assets/css/bootstrap.min.css" rel="stylesheet">
	    <!-- Material Design Bootstrap -->
	    <link href="<?php echo URL; ?>/assets/css/mdb.min.css" rel="stylesheet">
	    <!-- Your custom styles (optional) -->
	    <link href="<?php echo URL; ?>/assets/css/style.css" rel="stylesheet">
		<!-- Your custom styles (optional) -->
		<link href="<?php echo URL; ?>/assets/css/carteira.css" rel="stylesheet">
	</head>

	<body>
		<!-- Corpo da página -->
		<div>
			<header>
				<!-- Barra de navegação da Página -->
				<nav class="navbar navbar-dark info-color justify-content-between navbar-expand-lg">
					<a class="navbar-brand" href="<?php echo URL; ?>/home">Gerenciador Financeiro</a>
			
					<!-- Collapse button -->
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
					aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
					</button>
			
					<!-- Collapsible content -->
					<div class="collapse navbar-collapse" id="basicExampleNav">
						<ul class="navbar-nav mr-auto" id="navbar-nav">
							<li class="nav-item active">
								<a class="nav-link" href="<?php echo URL; ?>/home">Home
									<span class="sr-only">(current)</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?php echo URL; ?>/carteira">Carteira</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?php echo URL; ?>/relatorios">Relatório</a>
							</li>
							<!-- Dropdown -->
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
								aria-expanded="false">Configurações</a>
									<div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
										<a class="dropdown-item" href="<?php echo URL; ?>/ganhos">Tipo Ganho</a>
										<a class="dropdown-item" href="<?php echo URL; ?>/usuarios">Usuarios</a>
									</div>
							</li>
						</ul>
			
						<form class="form-inline">
							<div class="md-form my-0" style="margin: 10px; color: white;">
								<p class="navbar-nav mr-auto">Olá, <?php echo $_SESSION['nome'] ?></p>
							</div>
							<div class="md-form my-0">
								<a href="<?php echo URL; ?>/usuarios/logout/<?php echo $_SESSION['id'] ?>">
									<button type="button" class="btn btn-sm btn-primary waves-effect">
										<i class="fa fa-sign-in pr-2" aria-hidden="true"></i>Logout</button>
								</a>
							</div>
						</form>
					</div>
					<!-- Collapsible content -->

				</nav><br><br>
				<!-- Fim Barra de navegação -->
			</header>
		</div>
		<!-- Fim corpo da página -->

		<div class="container">
			<?php $this->loadViewInTemplate($viewName, $viewData); ?>
		</div>

		<div class="rodape">
			
		</div>

	</body>

	<!-- SCRIPTS -->
	<!-- JQuery -->
	<script type="text/javascript" src="<?php echo URL; ?>/assets/js/jquery-3.3.1.min.js"></script>
	<!-- Bootstrap tooltips -->
	<script type="text/javascript" src="<?php echo URL; ?>/assets/js/popper.min.js"></script>
	<!-- Bootstrap core JavaScript -->
	<script type="text/javascript" src="<?php echo URL; ?>/assets/js/bootstrap.min.js"></script>
	<!-- MDB core JavaScript -->
	<script type="text/javascript" src="<?php echo URL; ?>/assets/js/mdb.min.js"></script>
	<!-- Default JavaScript -->
	<script type="text/javascript" src="<?php echo URL; ?>/assets/js/styles.js"></script>

	<!-- Mascara para validação do Formulário -->
	<script type="text/javascript" src="<?php echo URL; ?>/assets/js/jquery.mask.js"></script>
</html>