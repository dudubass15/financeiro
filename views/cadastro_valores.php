<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Gerenciador Financeiro - Cadastro de Valores</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="<?php echo URL; ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="<?php echo URL; ?>/assets/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="<?php echo URL; ?>/assets/css/style.css" rel="stylesheet">
</head>

<body>
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
    </header>

    <main class="container text-center">
        <div class="form-row">
            <div class="form-group col-md-6" id="form-cadastro-valores">
                <!-- Material form contact -->
                <div class="card">

                    <h5 class="card-header info-color white-text text-center py-4">
                        <strong>Cadastro de valores</strong>
                    </h5>

                    <!--Card content-->
                    <div class="card-body px-lg-5 pt-0">

                        <!-- Form -->
                        <form class="text-center" style="color: #757575;">

                            <br>
                            
                            <!-- Carteira -->
                            <div class="form-group">
                                <label for="inputState" style="float: left;">Selecione a Carteira:</label>
                                <select id="inputState" class="form-control">
                                    <option selected></option>
                                    <option>...</option>
                                </select>
                            </div>

                            <!-- Valor -->
                            <div class="form-group">
                                <label for="inputAddress" style="float: left;">Informe o Valor:</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="R$: 0,00">
                            </div>

                             <!-- Tipo -->
                            <div class="form-group">
                                <label for="inputState" style="float: left;">Informe o Tipo:</label>
                                <select id="inputState" class="form-control">
                                    <option selected></option>
                                    <option>...</option>
                                </select>
                            </div>

                            <!--Observação-->
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1" style="float: left;">Observação</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>

                            <!-- Send button -->
                            <button class="btn btn-info btn-block my-4" type="submit">Salvar</button>

                        </form>
                        <!-- Form -->

                    </div>

                </div>
                <!-- Material form contact -->
            </div>
        </div>
    </main><br><br>

    <!-- Footer -->
    <footer class="page-footer font-small blue" style="bottom: 0px; width: 100%;">

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© <?php echo date("Y"); ?> Copyright:
            <a href="https://sistemaskadu.com.br"> Sistemaskadu.com.br</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->

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
</body>

</html>