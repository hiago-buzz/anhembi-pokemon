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
      <div id="pokedex" class="container-fluid bg-light pb-5">
        <div class="row">
          <div class="container">
            <div class="col-12 mt-4 mb-3  d-md-flex align-items-center justify-content-between">
              <h1 class="text-primary-color font-weight-bold display-5 pt-2">Pokédex</h1>
              <div class="col-md-6">
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
          </div>
          <div class="container mt-4">
            <div class="col-12">
              <div id="cards" class="row">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="../../../../lib/jquery/jquery-3.2.1.min.js" type="text/javascript"></script>
  <script src="../../../../lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="../../../assets/js/loading.js"></script>
  <script src="../../../assets/js/pokemon.js"></script>
  <script src="pokedex.js"></script>
</body>

</html>