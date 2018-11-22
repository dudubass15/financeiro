<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Gerenciador Financeiro - Cadastro de Depesas</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <header>
        <nav class="navbar navbar-dark info-color justify-content-between navbar-expand-lg">
                <a class="navbar-brand" href="#">Gerenciador Financeiro</a>
        
                <!-- Collapse button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
                aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
        
                <!-- Collapsible content -->
                <div class="collapse navbar-collapse" id="basicExampleNav">
        
                    <ul class="navbar-nav mr-auto" id="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="painel.html">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="carteira.html">Carteira</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Relatório</a>
                        </li>
                        <!-- Dropdown -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">Configurações</a>
                                <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Tipo Ganho</a>
                                    <a class="dropdown-item" href="#">Usuarios</a>
                                </div>
                        </li>
                    </ul>
        
                    <form class="form-inline">
                        <div class="md-form my-0">
                                <button type="button" class="btn btn-sm btn-primary waves-effect"><i class="fa fa-sign-in pr-2" aria-hidden="true"></i>Logout</button>
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

                    <h5 class="card-header white-text text-center py-4" style="background-color: #FF2235;">
                        <strong>Nova Despesa</strong>
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

                            <!-- Tipo -->
                            <div class="form-group">
                                <label for="inputState" style="float: left;">Informe o Tipo:</label>
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

                            <!-- Parcelas -->
                            <div class="form-group">
                                <label for="inputAddress" style="float: left;">Quant. Parcelas:</label>
                                <select id="inputState" class="form-control">
                                    <option selected>1x</option>
                                    <option>2x</option>
                                    <option>3x</option>
                                    <option>4x</option>
                                    <option>5x</option>
                                    <option>6x</option>
                                    <option>7x</option>
                                    <option>8x</option>
                                    <option>9x</option>
                                    <option>10x</option>
                                </select>
                            </div>

                            <!-- Carteira -->
                            <div class="form-group">
                                <label for="inputState" style="float: left;">Status:</label>
                                <select id="inputState" class="form-control">
                                    <option selected>Pendente</option>
                                    <option>Pago</option>
                                    <option>A pagar</option>
                                </select>
                            </div>

                            <!--Observação-->
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1" style="float: left;">Observação</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>

                            <!-- Send button -->
                            <button class="btn btn-block my-4" style="background-color: #FF2235;" type="submit">Salvar</button>

                        </form>
                        <!-- Form -->

                    </div>

                </div>
                <!-- Material form contact -->
            </div>
        </div>
    </main>

      <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Default JavaScript -->
  <script type="text/javascript" src="js/styles.js"></script>
</body>

</html>