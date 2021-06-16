<?php
  require_once __ROOT__.'/src/Helpers/Authentication.php';
  $auth = new Authentication();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="src/View/components/navigation/navigation.css">
  <script src="src/View/components/navigation/navigation.js" defer></script>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary-color">
    <a class="navbar-brand" href="#">
      <img data-id="pokedex" src="src/assets/img/logo/Logo.png" width="100" class="nav-item d-inline-block align-top"
        alt="">
    </a>
    <button class="navbar-toggler text-white" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
      aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav mx-auto">
        <div class="d-flex align-items-center justify-content-around mx-2">
          <img class="img-icons img-fluid" src="src/assets/img/icons/iconBall.png">
          <a data-id="pokedex" class="nav-item nav-link active" href="#">
            Pokédex
          </a>
        </div>
        <div class="d-flex align-items-center justify-content-around  mx-2">
          <img class="img-icons img-fluid" src="src/assets/img/icons/iconSword.png">
          <a data-id="squad" class="nav-item nav-link" href="#">Equipe</a>

        </div>
        <div class="d-flex align-items-center justify-content-around  mx-2">
          <img class="img-icons img-fluid" src="src/assets/img/icons/iconPikachu.png">
          <a data-id="perfil" class="nav-item nav-link" href="#"> Perfil</a>
        </div>
      </div>
      <div class="d-md-flex align-items-center justify-content-between">
        <small class="text-white mx-md-4">Bem vindo, <strong>
            <?php
        echo ucfirst($auth->getNickname()) . "!";
        ?>
          </strong>
        </small>
        <a href="#" id="btn-logout"><small class="text-white"><i class="fas fa-sign-out-alt"></i> sair</small></a>
      </div>
    </div>
  </nav>
</body>

</html>