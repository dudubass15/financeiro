<!DOCTYPE html>
<html lang="en">

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
  <!-- CSS do Boostrap login-->
  <link href="<?php echo URL; ?>/assets/css/signin.css" rel="stylesheet">
</head>

<body class="text-center">

  <form class="border border-light p-5 form-signin" method="POST">

    <p class="h4 mb-4 text-center">Bem vindo</p>

    <input type="email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="Email" name="email">

    <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Senha" name="senha">

    <button class="btn btn-info btn-block my-4" type="submit">Entrar</button>

    <!-- Register -->
    <p>Não é registrado ?
      <a href="<?php echo URL; ?>/usuarios/cadastro">Registre-se</a>
    </p>

    <div class="text-center">

        <p>Redes Sociais:</p>
        <a class="fb-ic mr-3 light-blue-text mx-2" role="button"><i class="fa fa-lg fa-facebook"></i></a>
        <a class="fb-ic mr-3 light-blue-text mx-2" role="button"><i class="fa fa-lg fa-twitter"></i></a>
        <a class="fb-ic mr-3 light-blue-text mx-2" role="button"><i class="fa fa-lg fa-linkedin"></i></a>
        <a class="fb-ic mr-3 light-blue-text mx-2" role="button"><i class="fa fa-lg fa-github"></i></a>
    </div>
</form>

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="<?php echo URL; ?>/assets/js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="<?php echo URL; ?>/assets/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="<?php echo URL; ?>/assets/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="<?php echo URL; ?>/assets/js/mdb.min.js"></script>
</body>

</html>
