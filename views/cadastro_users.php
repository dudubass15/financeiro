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
    <link href="css/cadastro.css" rel="stylesheet">
</head>

<body>
    <header>
        <div class="light-font">
          
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb" id="breadcrumb-cadastro">
                <li class="breadcrumb-item"><a class="white-text" href="login.html">Login</a></li>
                <li class="breadcrumb-item active">Cadastro de Usuario</li>
              </ol>
            </nav>
        </div>
    </header><br><br>

    <main class="container">

        <form>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputNome">Nome</label>
                <input type="text" class="form-control" id="inputNome" placeholder="Nome">
              </div>
              <div class="form-group col-md-6">
                    <label for="inputSobrenome">Sobrenome</label>
                    <input type="text" class="form-control" id="inputSobrenome" placeholder="Sobrenome">
                  </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-2">
                    <label for="inputDate">Data de Nascimento</label>
                    <input type="date" class="form-control" id="inputDate">
                </div>
                <div class="form-group col-md-2">
                    <label for="inputIdade">Idade</label>
                    <input type="text" class="form-control" id="inputIdade" placeholder="Idade">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputCPF">Cpf</label>
                    <input type="number" class="form-control" id="inputCPF" placeholder="CPF">
                </div>
                <div class="form-group col-md-4">
                        <label for="inputCelular">Celular</label>
                        <input type="tel" class="form-control" id="inputCelular" placeholder="Celular">
                    </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Senha</label>
                    <input type="password" class="form-control" id="inputPassword4" placeholder="Senha">
                </div>
            </div>

            <div class="text-center py-4 mt-3">
                <button class="btn btn-primary" type="submit">Registrar</button>
            </div>

          </form>

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