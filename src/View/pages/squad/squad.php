<?php
  require_once '../../../Helpers/Authentication.php';
  $auth = new Authentication();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="squad.css">
  <link href="../../../../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../../../lib/font-awesome/css/all.min.css" rel="stylesheet">

  <link rel="stylesheet" href="../../../assets/css/global.css" />
  <title>Equipe</title>
</head>

<body>
  <div class="container-fluid">
    <div class="container my-5">
      <div class="d-flex">
        <div class="container-card-squad bg-cyan mt-2">
          <div class="container mt-3">
            <div class="d-flex justify-content-between mx-3 align-items-center mt-3">
              <h2 class="text-warning font-weight-bold display-5">Equipe <?php
                echo ucfirst($auth->getNickname()) . "!";
                ?>
              </h2>
              <button id="btn-edit" class="btn btn-default"><i class="fas fa-edit"></i></button>
            </div>
          </div>
          <div class="container">
            <div id="colection-cards" class="row ">
              <div id="pokemon-1"
                class="colection-pokemon disabled-card disabled col-md-4 d-flex flex-column justify-content-center align-items-center mt-4">
                <div class="container-pokemon rounded-circle bg-warning cursor-pointer">
                  <img class="img-fluid img-select" src="../../../assets/img/pokemons/silhueta.png" alt="">
                </div>
                <p class="text-primary-color font-weight-bold mt-2 name-pokemon">Selecione</p>
              </div>
              <div id="pokemon-2"
                class="colection-pokemon disabled-card disabled col-md-4 d-flex flex-column justify-content-center align-items-center mt-4">
                <div class="container-pokemon rounded-circle bg-warning cursor-pointer">
                  <img class="img-fluid img-select" src="../../../assets/img/pokemons/silhueta.png" alt="">
                </div>
                <p class="text-primary-color font-weight-bold mt-2 name-pokemon">Selecione</p>
              </div>
              <div id="pokemon-3"
                class="colection-pokemon disabled-card disabled col-md-4 d-flex flex-column justify-content-center align-items-center mt-4">
                <div class="container-pokemon rounded-circle bg-warning cursor-pointer">
                  <img class="img-fluid img-select" src="../../../assets/img/pokemons/silhueta.png" alt="">
                </div>
                <p class="text-primary-color font-weight-bold mt-2 name-pokemon">Selecione</p>
              </div>
              <div id="pokemon-4"
                class="colection-pokemon disabled-card disabled col-md-4 d-flex flex-column justify-content-center align-items-center mt-4">
                <div class="container-pokemon rounded-circle bg-warning cursor-pointer">
                  <img class="img-fluid img-select" src="../../../assets/img/pokemons/silhueta.png" alt="">
                </div>
                <p class="text-primary-color font-weight-bold mt-2 name-pokemon">Selecione</p>
              </div>
              <div id="pokemon-5"
                class="colection-pokemon disabled-card disabled col-md-4 d-flex flex-column justify-content-center align-items-center mt-4">
                <div class="container-pokemon rounded-circle bg-warning cursor-pointer">
                  <img class="img-fluid img-select" src="../../../assets/img/pokemons/silhueta.png" alt="">
                </div>
                <p class="text-primary-color font-weight-bold mt-2 name-pokemon">Selecione</p>
              </div>
              <div id="pokemon-6"
                class="colection-pokemon disabled-card disabled col-md-4 d-flex flex-column justify-content-center align-items-center mt-4">
                <div class="container-pokemon rounded-circle bg-warning cursor-pointer">
                  <img class="img-fluid img-select" src="../../../assets/img/pokemons/silhueta.png" alt="">
                </div>
                <p class="text-primary-color font-weight-bold mt-2 name-pokemon">Selecione</p>
              </div>
            </div>
          </div>
          <div class="container">
            <div class="row justify-content-end m-3">
              <div class="d-flex justify-content-between align-items-center">
                <button id="btn-save" class="btn btn-success disabled font-weight-bold mx-3"><i class="fas fa-save"></i>
                  <span class="d-none d-md-inline">Salvar</span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- MODAL -->
  <div id="pokedexModal" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog"
    aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-primary-color font-weight-bold" id="pokedexModalLabel">Pokédex</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <div class="row">
              <div id="pokedex" class="container-fluid bg-light pb-5">
                <div class="row">
                  <div class="container">
                    <div class="col-12 mt-4 mb-3  d-md-flex align-items-center justify-content-between">
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text bg-white" id="icon-email">
                            <img width="18" class="img-fluid" src="../../../assets/img/icons/pokeballSearch.png"
                              alt="pokémon">
                          </span>
                        </div>
                        <input id="name" name="name" type="text" class="form-control"
                          placeholder="Digite o nome do pokémon" />
                      </div>
                    </div>
                  </div>
                  <div class="container mt-4">
                    <div class="col-12">
                      <div id="cards" class="d-flex flex-wrap align-items-center justify-content-center">

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="../../../../lib/jquery/jquery-3.2.1.min.js" type="text/javascript"></script>
  <script src="../../../../lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <script src="../../../assets/js/loading.js"></script>
  <script src="../../../assets/js/pokemon.js"></script>
  <script src="squad.js"></script>
</body>

</html>