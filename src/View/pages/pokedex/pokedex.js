let allPokemons = "";
class Pokedex {
  constructor() {
    $("#btn-search, #btn-close").on("click", this.openCloseSideBar);

    $("#name").on("input", function () {
      var filter = $(this).val();
      $(".card").show();
      $("#cards")
        .find(".card-title:not(:contains(" + filter + "))")
        .parent()
        .parent()
        .css("display", "none");
    });
    pokemon.getAll(this.popularPokemons, 0, 160);
  }

  openCloseSideBar() {
    $("#side-bar").toggleClass("active");
  }

  popularPokemons(pok) {
    const card = `<div clas="card-container col-md-3">
                  <div class="card bg-warning mb-3">
                    <img class="card-img-top w-50 m-auto pt-2" src="${pok.sprites.other["official-artwork"].front_default}"
                      alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title text-primary-color font-weight-bold">${pok.name}</h5>
                      <button type="button" class="btn btn-info btn-block text-white font-weight-bold">Detalhes</button>
                    </div>
                  </div>
                </div>`;
    $("#cards").append(card);
  }
}

const pokedex = new Pokedex();
