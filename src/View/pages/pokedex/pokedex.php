<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="pokedex.css">
  <link href="../../../../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../../../lib/font-awesome/css/all.min.css" rel="stylesheet">

  <link rel="stylesheet" href="../../../assets/css/global.css" />
  <title>POKEDEX</title>
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <div id="side-bar" class="col-12 col-md-3 bg-blue-grey-color">
        <div class="d-flex w-100 justify-content-between align-items-center">
          <h4 class="text-warning-color mx-3 my-5">Filtrar Pokémon</h4>
          <h4 id="btn-close" class=" text-warning-color mx-3 my-5 cursor-pointer"><i class="fas fa-times"></i></h4>
        </div>

        <form id="form-filtro">
          <div class="col-md-12">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text bg-white" id="icon-email">
                  <img width="18" class="img-fluid" src="../../../assets/img/icons/pokeballSearch.png" alt="pokémon">
                </span>
              </div>
              <input id="name" name="name" type="text" class="form-control" placeholder="Nome" />
            </div>
          </div>
          <div class="col-12 mt-4">
            <h2 class="sub-title ">Tipo:</h2>
            <div class="row align-items-center justify-content-start ml-2">
              <div class="col-6">
                <div class="form-check form-check-inline mb-3">
                  <input class="form-check-input cursor-pointer" type="checkbox" id="inlineCheckbox1" value="option1">
                  <label class="form-check-label text-white" for="inlineCheckbox1">Água</label>
                </div>
                <div class="form-check form-check-inline mb-3">
                  <input class="form-check-input cursor-pointer" type="checkbox" id="inlineCheckbox2" value="option2">
                  <label class="form-check-label text-white" for="inlineCheckbox2">Pedra</label>
                </div>
                <div class="form-check form-check-inline mb-3">
                  <input class="form-check-input cursor-pointer" type="checkbox" id="inlineCheckbox2" value="option2">
                  <label class="form-check-label text-white" for="inlineCheckbox2">Grama</label>
                </div>
              </div>
              <div class="col-6">
                <div class="form-check form-check-inline mb-3">
                  <input class="form-check-input cursor-pointer" type="checkbox" id="inlineCheckbox1" value="option1">
                  <label class="form-check-label text-white" for="inlineCheckbox1">Fogo</label>
                </div>
                <div class="form-check form-check-inline mb-3">
                  <input class="form-check-input cursor-pointer" type="checkbox" id="inlineCheckbox2" value="option2">
                  <label class="form-check-label text-white" for="inlineCheckbox2">Eletrico</label>
                </div>
                <div class="form-check form-check-inline mb-3">
                  <input class="form-check-input cursor-pointer" type="checkbox" id="inlineCheckbox2" value="option2">
                  <label class="form-check-label text-white" for="inlineCheckbox2">Venenoso</label>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>

      <div id="pokedex" class="container-fluid bg-light pb-5">
        <div class="row">
          <div class="container">
            <div class="col-12 mt-4 mb-3  d-flex align-items-center justify-content-between ">
              <h1 class="text-primary-color font-weight-bold display-5 pt-2">Pokédex</h1>
              <button id="btn-search" class="btn btn-success text-white font-weight-bold mr-4">
                <i class="fas fa-search "></i> <span class="d-none d-md-inline">Pesquisar</span>
              </button>
            </div>
          </div>
          <div class="container mt-4">
            <div class="col-12">
              <div class="row">
                <div clas="col-md-3">
                  <div class="card bg-warning mb-3">
                    <img class="card-img-top w-50 m-auto pt-2" src="../../../assets/img/pokemons/1.svg"
                      alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title text-primary-color font-weight-bold">Bulbasaur</h5>
                      <a href="#" class="btn btn-info btn-block text-white font-weight-bold">Detalhes</a>
                    </div>
                  </div>
                </div>
                <div clas="col-md-3">
                  <div class="card bg-warning mb-3">
                    <img class="card-img-top w-50 m-auto pt-2" src="../../../assets/img/pokemons/1.svg"
                      alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title text-primary-color font-weight-bold">Bulbasaur</h5>
                      <a href="#" class="btn btn-info btn-block text-white font-weight-bold">Detalhes</a>
                    </div>
                  </div>
                </div>
                <div clas="col-md-3">
                  <div class="card bg-warning mb-3">
                    <img class="card-img-top w-50 m-auto pt-2" src="../../../assets/img/pokemons/1.svg"
                      alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title text-primary-color font-weight-bold">Bulbasaur</h5>
                      <a href="#" class="btn btn-info btn-block text-white font-weight-bold">Detalhes</a>
                    </div>
                  </div>
                </div>
                <div clas="col-md-3">
                  <div class="card bg-warning mb-3">
                    <img class="card-img-top w-50 m-auto pt-2" src="../../../assets/img/pokemons/1.svg"
                      alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title text-primary-color font-weight-bold">Bulbasaur</h5>
                      <a href="#" class="btn btn-info btn-block text-white font-weight-bold">Detalhes</a>
                    </div>
                  </div>
                </div>
                <div clas="col-md-3">
                  <div class="card bg-warning mb-3">
                    <img class="card-img-top w-50 m-auto pt-2" src="../../../assets/img/pokemons/1.svg"
                      alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title text-primary-color font-weight-bold">Bulbasaur</h5>
                      <a href="#" class="btn btn-info btn-block text-white font-weight-bold">Detalhes</a>
                    </div>
                  </div>
                </div>
                <div clas="col-md-3">
                  <div class="card bg-warning mb-3">
                    <img class="card-img-top w-50 m-auto pt-2" src="../../../assets/img/pokemons/1.svg"
                      alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title text-primary-color font-weight-bold">Bulbasaur</h5>
                      <a href="#" class="btn btn-info btn-block text-white font-weight-bold">Detalhes</a>
                    </div>
                  </div>
                </div>
                <div clas="col-md-3">
                  <div class="card bg-warning mb-3">
                    <img class="card-img-top w-50 m-auto pt-2" src="../../../assets/img/pokemons/1.svg"
                      alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title text-primary-color font-weight-bold">Bulbasaur</h5>
                      <a href="#" class="btn btn-info btn-block text-white font-weight-bold">Detalhes</a>
                    </div>
                  </div>
                </div>
                <div clas="col-md-3">
                  <div class="card bg-warning mb-3">
                    <img class="card-img-top w-50 m-auto pt-2" src="../../../assets/img/pokemons/1.svg"
                      alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title text-primary-color font-weight-bold">Bulbasaur</h5>
                      <a href="#" class="btn btn-info btn-block text-white font-weight-bold">Detalhes</a>
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
  <script src="pokedex.js"></script>
</body>

</html>