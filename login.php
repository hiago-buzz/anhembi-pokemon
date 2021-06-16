<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="lib/font-awesome/css/all.min.css" rel="stylesheet">

  <link rel="stylesheet" href="src/View/pages/login/login.css" />
  <link rel="stylesheet" href="src/assets/css/global.css" />
  <link rel="stylesheet" href="src/assets/css/loading.css" />
  <title>Login</title>
</head>

<body>
  <div class="bg-loading">
    <div class="lds-dual-ring"></div>
  </div>
  <div class="container-fluid" id="background-login">
    <div class="container h-100 d-flex flex-column align-items-end justify-content-center bg-color-white">
      <div class="card-login">
        <h1 class="title mt-5">Já é um Treinador?</h1>
        <form id="form-login" class="mt-3">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text bg-white" id="icon-email">
                <i class="fas fa-envelope text-warning"></i>
              </span>
            </div>
            <input id="email" name="email" type="email" autocomplete="off" class="form-control"
              placeholder="Digite seu e-mail" />
          </div>
          <div class="input-group mb-1">
            <div class="input-group-prepend">
              <span class="input-group-text bg-white" id="icon-email">
                <i class="fas fa-lock text-warning"></i></span>
            </div>
            <input id="password" name="password" type="password" autocomplete="off" class="form-control"
              placeholder="Digite sua senha" />
          </div>
          <!-- <small class="text-primary-color opacity-8">Esqueci a senha</small> -->
          <button id="btn-login" type="button" class="btn btn-warning btn-block text-white font-weight-bold mt-4 mb-3">
            Entrar
          </button>
          <small class="text-primary-color mt-5 mb-1 opacity-8">
            Ainda não é um Treinador?
          </small>
          <a href="create.php">
            <button type="button" class="btn btn-outline-primary btn-block text-primary-color font-weight-bold mt-1">
              Cadastrar
            </button>
          </a>
        </form>
      </div>
    </div>
  </div>
  <script src="lib/jquery/jquery-3.2.1.min.js" type="text/javascript"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <script src="src/assets/js/loading.js" type="text/javascript"></script>
  <script src="src/assets/js/utils.js" type="text/javascript"></script>
  <script src="src/View/pages/login/login.js"></script>
</body>

</html>