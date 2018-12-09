<!DOCTYPE html>
<html lang="pt">
	<head>
		<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <meta http-equiv="x-ua-compatible" content="ie=edge">
	    <title>Gerenciador Financeiro - Carteiras</title>
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
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo URL; ?>/home">Home
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item active">
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

        <main class="container">

            <h1 class="font-weight-bold mb-3">Nº Carteiras Virtuais:</h1><hr>
            
            <br>
            
            <div class="alert alert-danger" role="alert"> Você não possui nenhuma carteira virtual registrada !</div>

            <br>

            <div class="modal fade" id="modalDefaultContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <!--Modal: Contact form-->
                <div class="modal-dialog cascading-modal" role="document">
                    
                    <!--Content-->
                    <div class="modal-content">

                        <!--Header-->
                        <div class="modal-header info-color white-text">
                            <h4 class="title">
                                <i class="fa fa-money"></i> Nova Carteira</h4>
                            <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>

                        <!--Body-->
                        <div class="modal-body">
                            <form method="POST" action="<?php echo URL; ?>/carteira/cadastro">
                                <!-- Default input name -->
                                <label for="defaultFormNameModalEx">Título</label>
                                <input type="text" id="defaultFormNameModalEx" class="form-control form-control-sm" name="titulo">
                                
                                <br>

                                <!-- Default input cor -->
                                <label for="defaultFormNameModalEx">Cor</label>
                                <input type="color" id="defaultFormNameModalEx" class="form-control form-control-sm" name="cor">
                        
                                <br>
                        
                                <!-- Default textarea message -->
                                <label for="defaultFormMessageModalEx">Descrição</label>
                                <textarea type="text" id="defaultFormMessageModalEx" class="md-textarea form-control" name="descricao"></textarea>

                                <br>

                                <div class="custom-control custom-checkbox mb-4">
                                    <input type="checkbox" class="custom-control-input" id="defaultContactFormCopy" name="status">
                                    <label class="custom-control-label" for="defaultContactFormCopy">Ativo</label>
                                </div>
                        
                                <div class="text-center mt-4 mb-2">
                                    <a href="<?php echo URL; ?>/carteira/cadastro">
                                        <button class="btn btn-info">Enviar
                                            <i class="fa fa-send ml-2"></i>
                                        </button>
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--/.Content-->
                </div>
                <!--/Modal: Contact form-->
            </div>

            <div class="fixed-bottom" id="button-flutuante">
                <a class="btn-floating btn-lg red" data-toggle="modal" data-target="#modalDefaultContactForm">
                    <i class="fa fa-plus"></i>
                </a>
            </div>

        </main><br><br>

        </div>

        <!-- Footer -->
        <footer class="page-footer font-small blue" style="position: fixed; bottom: 0px; width: 100%;">
            <!-- Copyright -->
            <div class="footer-copyright text-center py-3">© <?php echo date("Y"); ?> Copyright:
                <a href="https://sistemaskadu.com.br"> Sistemaskadu.com.br</a>
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->
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
</html>