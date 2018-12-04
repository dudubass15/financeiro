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
    <link href="<?php echo URL; ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="<?php echo URL; ?>/assets/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="<?php echo URL; ?>/assets/css/cadastro.css" rel="stylesheet">
</head>

<body>
    <header>
        <div class="light-font">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb" id="breadcrumb-cadastro">
                <li class="breadcrumb-item"><a class="white-text" href="<?php echo URL; ?>/usuarios/login">Login</a></li>
                <li class="breadcrumb-item active">Cadastro de Usuario</li>
              </ol>
            </nav>
        </div>
    </header><br><br>

    <main class="container">

        <form method="POST">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputNome">Nome</label>
                <input type="text" class="form-control" id="inputNome" name="nome" placeholder="Nome">
              </div>
              <div class="form-group col-md-6">
                    <label for="inputSobrenome">Sobrenome</label>
                    <input type="text" class="form-control" id="inputSobrenome" name="sobrenome" placeholder="Sobrenome">
                  </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-2">
                    <label for="inputDate">Data de Nascimento</label>
                    <input type="date" class="form-control" name="data_nascimento" id="inputDate">
                </div>
                <div class="form-group col-md-2">
                    <label for="inputIdade">Idade</label>
                    <input type="number" class="form-control" id="inputIdade" name="idade" placeholder="Idade" data-mask="00">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputCPF">Cpf</label>
                    <input type="text" class="form-control" id="inputCPF" name="cpf" placeholder="CPF" data-mask="000.000.000-00">
                </div>
                <div class="form-group col-md-4">
                        <label for="inputCelular">Celular</label>
                        <input type="tel" class="form-control" id="inputCelular" name="celular" placeholder="Celular" data-mask="(00) 00000-0000">
                    </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="Email">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Senha</label>
                    <input type="password" class="form-control" id="inputPassword4" name="senha" placeholder="Senha">
                </div>
            </div>

            <div class="text-center py-4 mt-3">
                <button class="btn btn-primary" type="submit">Registrar</button>
            </div>

          </form>

    </main><br><br>

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
</body>

</html>