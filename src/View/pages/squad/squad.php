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
              <h2 class="text-warning font-weight-bold display-5">Equipe do Fulano</h2>
              <button id="btn-edit" class="btn btn-default"><i class="fas fa-edit"></i></button>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div
                class="colection-pokemon disabled-card disabled col-md-4 d-flex flex-column justify-content-center align-items-center mt-4">
                <div class="container-pokemon rounded-circle bg-warning cursor-pointer">
                  <h5><i class="fas fa-times text-danger float-right"></i></h5>
                  <img class="img-fluid " src="../../../assets/img/pokemons/1.svg" alt="">
                </div>
                <p class="text-primary-color font-weight-bold mt-2">Bulbasaur</p>
              </div>
              <div
                class="colection-pokemon disabled-card disabled col-md-4 d-flex flex-column justify-content-center align-items-center mt-4">
                <div class="container-pokemon rounded-circle bg-warning cursor-pointer">
                  <h5><i class="fas fa-times text-danger float-right"></i></h5>
                  <img class="img-fluid " src="../../../assets/img/pokemons/4.svg" alt="">
                </div>
                <p class="text-primary-color font-weight-bold mt-2">Charmander</p>
              </div>
              <div
                class="colection-pokemon disabled-card disabled col-md-4 d-flex flex-column justify-content-center align-items-center mt-4">
                <div class="container-pokemon rounded-circle bg-warning cursor-pointer">
                  <h5><i class="fas fa-times text-danger float-right"></i></h5>
                  <img class="img-fluid " src="../../../assets/img/pokemons/8.svg" alt="">
                </div>
                <p class="text-primary-color font-weight-bold mt-2">Wartortle</p>
              </div>
              <div
                class="colection-pokemon disabled-card disabled col-md-4 d-flex flex-column justify-content-center align-items-center mt-4">
                <div class="container-pokemon rounded-circle bg-warning cursor-pointer">
                  <h5><i class="fas fa-times text-danger float-right"></i></h5>
                  <img class="img-fluid " src="../../../assets/img/pokemons/15.svg" alt="">
                </div>
                <p class="text-primary-color font-weight-bold mt-2">Beedril</p>
              </div>
              <div
                class="colection-pokemon disabled-card disabled col-md-4 d-flex flex-column justify-content-center align-items-center mt-4">
                <div class="container-pokemon rounded-circle bg-warning cursor-pointer">
                  <h5><i class="fas fa-times text-danger float-right"></i></h5>
                  <img class="img-fluid " src="../../../assets/img/pokemons/45.svg" alt="">
                </div>
                <p class="text-primary-color font-weight-bold mt-2">Vileplume</p>
              </div>
              <div
                class="colection-pokemon disabled-card disabled col-md-4 d-flex flex-column justify-content-center align-items-center mt-4">
                <div class="container-pokemon rounded-circle bg-warning cursor-pointer">
                  <img class="img-fluid img-select" src="../../../assets/img/pokemons/silhueta.png" alt="">
                </div>
                <p class="text-primary-color font-weight-bold mt-2">Selecione</p>
              </div>
            </div>
          </div>
          <div class="container">
            <div class="row justify-content-end m-3">
              <div class="d-flex justify-content-between align-items-center">
                <button id="btn-clear" class="btn btn-default disabled font-weight-bold mx-3"><i
                    class="fas fa-trash"></i>
                  <span class="d-none d-md-inline">Limpar</span></button>
                <button id="btn-save" class="btn btn-success disabled font-weight-bold mx-3"><i class="fas fa-save"></i>
                  <span class="d-none d-md-inline">Salvar</span></button>
                <button id="btn-print" class="btn btn-primary text-white font-weight-bold mx-3"> <i
                    class="fas fa-print"></i>
                  <span class="d-none d-md-inline">Print</span></button>
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
  <script src="squad.js"></script>
</body>

</html>