let positionPokemon = null;
class Squad {
  constructor() {
    $("#btn-save").on("click", function () {
      if (!$(this).hasClass("disabled")) {
        squad.save();
      }
    });

    $("#btn-edit").on("click", this.blockSquad);

    $("#name").on("input", function () {
      var filter = $(this).val();
      $(".card").show();
      $("#cards")
        .find(".card-title:not(:contains(" + filter + "))")
        .parent()
        .parent()
        .css("display", "none");
    });

    $(".img-select").on("click", function () {
      const container = $(this).parent().parent();
      if (!container.hasClass("disabled")) {
        positionPokemon = container.attr("id");
        $("#pokedexModal").modal({
          show: true,
        });
      }
    });

    $(document).on("click", ".btn-select", function () {
      const imgSelected = $(this).attr("data-img");
      const idSelected = $(this).attr("data-id");
      const nameSelected = $(this).attr("data-name");

      if (
        $(`#${positionPokemon}`).find(".container-pokemon").children().length <
        2
      ) {
        $(`#${positionPokemon}`)
          .find(".container-pokemon")
          .prepend(
            `<h5>
            <i class="fas fa-times text-danger float-right btn-delete"></i>
          </h5>`
          );
      }
      $(`#${positionPokemon}`).find(".img-select").attr("src", imgSelected);
      $(`#${positionPokemon}`).find(".name-pokemon").html(nameSelected);
      $(`#${positionPokemon}`)
        .find(".name-pokemon")
        .attr("data-id", idSelected);
    });

    $(document).on("click", ".btn-delete", function () {
      const container = $(this).parent().parent().parent();
      if (!container.hasClass("disabled")) {
        container.find("h5").remove();
        container
          .find(".img-select")
          .attr("src", "../../../assets/img/pokemons/silhueta.png");
        container.find(".name-pokemon").html("selecione");
        container.find(".name-pokemon").attr("data-id", null);
      }
    });

    this.getSquad();
    pokemon.getAll(this.popularPokemons, 0, 160);
  }

  blockSquad = function () {
    $(".colection-pokemon").toggleClass("disabled-card disabled");

    $("#btn-edit").children().toggleClass("fa-edit");
    $("#btn-edit").children().toggleClass("fa-times text-danger");

    $("#btn-save").toggleClass("disabled");
    $("#btn-clear").toggleClass("disabled");
  };

  popularPokemons(pok) {
    const img = pok.sprites.other["official-artwork"].front_default;
    const card = `<div clas="card-container col-6">
                  <div class="card bg-warning mb-3">
                    <img class="card-img-top w-50 m-auto pt-2" src="${img}"
                      alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title text-primary-color font-weight-bold" >${pok.name}</h5>
                      <button data-id="${pok.id}" data-name="${pok.name}" data-img="${img}" type="button"  data-dismiss="modal" class="btn btn-info btn-block text-white font-weight-bold btn-select">Selecionar</button>
                    </div>
                  </div>
                </div>`;
    $("#cards").append(card);
  }

  getSquad() {
    loading.open();
    $.post("../../../api/get-squad.php", function (res) {
      const obj = JSON.parse(res);
      if (obj.success) {
        if (obj.data.length) {
          obj.data.forEach((pokemon, index) => {
            const card = $(`#pokemon-${index + 1}`);
            $.get(
              `https://pokeapi.co/api/v2/pokemon/${pokemon.pokemonId}/`,
              (data) => {
                card
                  .find(".img-select")
                  .attr(
                    "src",
                    data.sprites.other["official-artwork"]["front_default"]
                  );

                if (card.find(".container-pokemon").children().length < 2) {
                  card.find(".container-pokemon").prepend(
                    `<h5>
            <i class="fas fa-times text-danger float-right btn-delete"></i>
          </h5>`
                  );
                }
                card.find(".name-pokemon").html(pokemon.pokemonName);
                card.find(".name-pokemon").attr("data-id", pokemon.pokemonId);
                card
                  .find(".name-pokemon")
                  .attr("data-favorite", pokemon.favorite);
              }
            );
          });
        }

        loading.close();
        return;
      }
    });
  }

  save() {
    const payload = [];
    $(".colection-pokemon").each(function (_, el) {
      const id = $(el).find(".name-pokemon").attr("data-id");
      if (id) {
        payload.push({
          favorite: $(el).find(".name-pokemon").attr("data-favorite") || 0,
          user_id: sessionStorage.getItem("userId"),
          pokemon_id: id,
          pokemon_name: $(el).find(".name-pokemon").text(),
        });
      }
    });

    if (payload.length) {
      squad.blockSquad();
      $.post(
        "../../../api/create-squad.php",
        { data: payload },
        function (res) {
          const obj = JSON.parse(res);
          const icon = obj.success ? "success" : "error";

          Swal.fire({
            position: "center",
            icon: icon,
            title: obj.message,
            showConfirmButton: false,
            timer: 1500,
          });
        }
      );
    } else {
      Swal.fire({
        position: "center",
        icon: "warning",
        title: "Selecione ao menos um pokemon!",
        showConfirmButton: false,
        timer: 1500,
      });
    }
  }
}

const squad = new Squad();
