<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Gerenciador Financeiro - Carteira</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/carteira.css" rel="stylesheet">
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
                        <li class="nav-item">
                            <a class="nav-link" href="painel.html">Home
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="carteira.html">Carteira
                                <span class="sr-only">(current)</span>
                            </a>
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
                        <!-- <button type="button" class="btn btn-sm btn-primary waves-effect"><i class="fa fa-sign-in pr-2" aria-hidden="true"></i>Logout</button> -->
                    </ul>
        
                    <form class="form-inline">
                        <div class="md-form my-0">
                                <button type="button" class="btn btn-sm btn-primary waves-effect"><i class="fa fa-sign-in pr-2" aria-hidden="true"></i>Logout</button>
                        </div>
                    </form>
        
                </div>
                <!-- Collapsible content -->
            </nav><br>
    </header>

    <main class="container">
        <!-- Carteira -->
        <div class="card-body" id="card-body">
            <div class="card" id="carteira">
                <div class="card-body">
                <h5 class="card-title">Nome completo da pessoa <i class="fa fa-money"></i></h5><hr>
                <p class="card-valor">R$: 0,00</p>
                <p class="card-text"><small>Atualizado há 3 minutos</small></p>
                </div>
            </div>
        <!-- End -->
        </div>

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
            
                        <!-- Default input name -->
                        <label for="defaultFormNameModalEx">Nome Completo</label>
                        <input type="text" id="defaultFormNameModalEx" class="form-control form-control-sm">
            
                        <br>

                        <!-- Default input cor -->
                        <label for="defaultFormNameModalEx">Cor</label>
                        <input type="color" id="defaultFormNameModalEx" class="form-control form-control-sm">
            
                        <br>
            
                        <!-- Default textarea message -->
                        <label for="defaultFormMessageModalEx">Descrição</label>
                        <textarea type="text" id="defaultFormMessageModalEx" class="md-textarea form-control"></textarea>

                        <br>

                        <div class="custom-control custom-checkbox mb-4">
                            <input type="checkbox" class="custom-control-input" id="defaultContactFormCopy">
                            <label class="custom-control-label" for="defaultContactFormCopy">Ativo</label>
                        </div>
            
                        <div class="text-center mt-4 mb-2">
                            <button class="btn btn-info">Enviar
                                <i class="fa fa-send ml-2"></i>
                            </button>
                        </div>
            
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