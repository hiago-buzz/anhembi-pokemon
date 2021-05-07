<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="perfil.css">
  <link href="../../../../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../../../lib/font-awesome/css/all.min.css" rel="stylesheet">

  <link rel="stylesheet" href="../../../assets/css/global.css" />
  <title>PERFIL</title>
</head>

<body>
  <div class="container-fluid" id="background-perfil">
    <div class="container h-100 d-flex align-items-center justify-content-center">
      <div class="card-perfil mt-md-5 w-md-70">
        <div class="container my-3">
          <div class="d-flex justify-content-between mx-3 align-items-center mt-3">
            <h1 class="title m-4">Edite seu perfil</h1>
            <button id="btn-edit" class="btn btn-default"><i class="fas fa-edit"></i></button>
          </div>
        </div>
        <form id="formPerfil">
          <div class="container">
            <div class="row p-md-4">
              <div class="col-md-4">
                <div class="d-flex justify-content-center mx-3 mb-2 align-items-center">
                  <div class="container-pokemon rounded-circle bg-warning cursor-pointer">
                    <img class="img-fluid img-perfil" src="../../../assets/img/pokemons/1.svg" alt="">
                  </div>
                </div>
              </div>
              <div class="col-md-8">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text bg-white" id="icon-birth-date">
                      <i class="fas fa-book-reader text-warning"></i>
                    </span>
                  </div>
                  <textarea disabled class="form-control" id="describe" name="describe" rows="4"
                    placeholder="Breve descrição sobre o inicio da sua jornada">
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
, when an unkno
                  </textarea>
                </div>
              </div>
              <div class="col-md-5">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text bg-white" id="icon-nick-name">
                      <i class="fas fa-smile text-warning"></i>
                    </span>
                  </div>
                  <input disabled id="nick-name" name="nick-name" type="nick-name" autocomplete="off"
                    class="form-control" placeholder="Apelido" value="Ashe" />
                </div>
              </div>

              <div class="col-md-7">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text bg-white" id="icon-full-name">
                      <i class="fas fa-user text-warning"></i>
                    </span>
                  </div>
                  <input disabled id="full-name" name="full-name" type="full-name" autocomplete="off"
                    class="form-control" placeholder="Nome Completo" value="Vanderlei da Silva Barbosa Queiroz" />
                </div>
              </div>

              <div class="col-md-8">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text bg-white" id="icon-email">
                      <i class="fas fa-envelope text-warning"></i>
                    </span>
                  </div>
                  <input disabled id="email" name="email" type="email" autocomplete="off" class="form-control " readonly
                    placeholder="E-mail" value="valQueiroz@gmail.com" />
                </div>
              </div>

              <div class="col-md-4">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text bg-white" id="icon-pokemon">
                      <img width="18" class="img-fluid" src="../../../assets/img/icons/pikachu-pokemon.png"
                        alt="pokémon">
                    </span>
                  </div>
                  <select disabled class="form-control" id="pokemon" name="pokemon" placeholder="Pokémon Favorito">
                    <option default hidden>Bulbasaur</option>
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
                  <input disabled id="birth-date" name="birth-date" type="date" class="form-control"
                    value="1990-06-01" />
                </div>
              </div>

              <div class="col-md-6">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text bg-white" id="icon-gender">
                      <i class="fas fa-venus-mars text-warning"></i>
                    </span>
                  </div>
                  <select disabled class="form-control" id="gender" name="gender" placeholder="Gênero">
                    <option default value="O">Outro</option>
                    <option hidden>Selecione Gênero</option>
                    <option value="M">Masculino</option>
                    <option value="F">Feminino</option>
                  </select>
                </div>
              </div>

              <div class="col-12 d-flex align-items-center justify-content-between mb-3">
                <div class="col-3 p-0 ">
                </div>
                <div class="col-3 p-0">
                  <button id="btn-save" class="btn btn-success disabled text-white btn-block font-weight-bold mt-1"
                    type="button"><i class="fas fa-save"></i> <span class="d-none d-md-inline"> Salvar</span></button>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="../../../../lib/jquery/jquery-3.2.1.min.js" type="text/javascript"></script>
  <script src="../../../../lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <script src="perfil.js"></script>
</body>

</html>