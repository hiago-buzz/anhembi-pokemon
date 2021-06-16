<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="lib/font-awesome/css/all.min.css" rel="stylesheet">

  <link rel="stylesheet" href="src/View/pages/create/create.css" />
  <link rel="stylesheet" href="src/assets/css/global.css" />
  <link rel="stylesheet" href="src/assets/css/loading.css" />
  <title>Cadastrar</title>
</head>

<body>
  <div class="bg-loading">
    <div class="lds-dual-ring"></div>
  </div>
  <div class="container-fluid" id="background-create">
    <div class="container h-100 d-flex align-items-center justify-content-center">
      <div class="card-create w-md-70">
        <div class="d-flex align-items-center justify-content-between">
          <h1 class="title m-4">Cadastrar <i class="fas fa-plus-circle"></i></h1>
          <a href="login.php" class="text-primary-color m-4 ml-5"><i class="fas fa-long-arrow-alt-left"></i> voltar</a>
        </div>
        <form id="formCreate">
          <div class="container">
            <div class="row p-md-4">

              <div class="col-md-5">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text bg-white" id="icon-nick-name">
                      <i class="fas fa-smile text-warning"></i>
                    </span>
                  </div>
                  <input id="nick-name" name="nick-name" type="nick-name" autocomplete="off"
                    class="form-control required" placeholder="Apelido" />
                </div>
              </div>

              <div class="col-md-7">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text bg-white" id="icon-full-name">
                      <i class="fas fa-user text-warning"></i>
                    </span>
                  </div>
                  <input id="full-name" name="full-name" type="full-name" autocomplete="off"
                    class="form-control required" placeholder="Nome Completo" />
                </div>
              </div>

              <div class="col-md-8">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text bg-white" id="icon-email">
                      <i class="fas fa-envelope text-warning"></i>
                    </span>
                  </div>
                  <input id="email" name="email" type="email" autocomplete="off" class="form-control"
                    placeholder="E-mail" />
                </div>
              </div>

              <div class="col-md-4">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text bg-white" id="icon-pokemon">
                      <img width="18" class="img-fluid" src="src/assets/img/icons/pikachu-pokemon.png" alt="pokémon">
                      <!-- <i class="fas fa-venus-mars text-warning"></i> -->
                    </span>
                  </div>
                  <select class="form-control required" id="pokemonFav" name="pokemonFav"
                    placeholder="Pokémon Favorito">
                    <option default hidden value="">Selecione Pokémon Favorito</option>
                  </select>
                </div>
              </div>

              <div class="col-md-6">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text bg-white" id="icon-birth-date">
                      <i class="fas fa-calendar text-warning"></i>
                    </span>
                  </div>
                  <input id="birth-date" name="birth-date" type="date" class="form-control  required"
                    placeholder="Confirmar Senha" />
                </div>
              </div>

              <div class="col-md-6">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text bg-white" id="icon-gender">
                      <i class="fas fa-venus-mars text-warning"></i>
                    </span>
                  </div>
                  <select class="form-control  required" id="gender" name="gender" placeholder="Gênero">
                    <option default hidden value="">Selecione Gênero</option>
                    <option value="M">Masculino</option>
                    <option value="F">Feminino</option>
                    <option value="O">Outro</option>
                  </select>
                </div>
              </div>

              <div class="col-md-6">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text bg-white" id="icon-password">
                      <i class="fas fa-lock text-warning"></i>
                    </span>
                  </div>
                  <input id="password" name="password" type="password" autocomplete="off" class="form-control"
                    placeholder="Senha" />
                </div>
              </div>

              <div class="col-md-6">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text bg-white" id="icon-password">
                      <i class="fas fa-lock text-warning"></i>
                    </span>
                  </div>
                  <input id="confirm-password" name="confirm-password" type="password" autocomplete="off"
                    class="form-control" placeholder="Confirmar Senha" />
                </div>
              </div>

              <div class="col-md-12">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text bg-white" id="icon-birth-date">
                      <i class="fas fa-book-reader text-warning"></i>
                    </span>
                  </div>
                  <textarea class="form-control" id="bio" name="bio" rows="4"
                    placeholder="Breve descrição sobre o inicio da sua jornada"></textarea>
                </div>
              </div>

              <div class="col-12 d-flex align-items-center justify-content-between mb-3">
                <div class="col-3 p-0 ">
                  <button class="btn btn-outline-primary font-weight-bold " type="reset"><i
                      class="fas fa-user-minus"></i> <span class="d-none d-md-inline-block"> Limpar</span></button>
                </div>
                <div class="col-3 p-0">
                  <button id="btn-create" class="btn btn-warning text-white btn-block font-weight-bold mt-1"
                    type="button"><i class="fas fa-user-plus"></i> <span class="d-none d-md-inline">
                      Criar</span></button>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script src="lib/jquery/jquery-3.2.1.min.js" type="text/javascript"></script>
  <script src="src/assets/js/pokemon.js" type="text/javascript"></script>
  <script src="src/assets/js/loading.js" type="text/javascript"></script>
  <script src="src/assets/js/utils.js" type="text/javascript"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <script src="src/View/pages/create/create.js"></script>
</body>

</html>