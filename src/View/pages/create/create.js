class Create {
  constructor() {
    $("#btn-create").on("click", () => {
      if (
        !this.validate() ||
        !util.validateEmail() ||
        !this.validatePassword()
      ) {
        Swal.fire({
          position: "center",
          icon: "warning",
          title: "Preencha os campos obrigatórios!",
          showConfirmButton: false,
          timer: 1500,
        });
        return;
      }
      this.create();
    });

    this.getPokemonFav();
  }

  validate() {
    let isValid = true;

    $(".required").each(function (_, element) {
      if (!$(element).val()) {
        $(element).addClass("is-invalid");
        isValid = false;
      } else {
        $(element).removeClass("is-invalid");
      }
    });

    return isValid;
  }

  validatePassword() {
    const password = $("#password").val();
    const confirmPassword = $("#confirm-password").val();
    let isValid = true;
    if (!password || !confirmPassword || password !== confirmPassword) {
      $("#password").addClass("is-invalid");
      $("#confirm-password").addClass("is-invalid");
      isValid = false;
    } else {
      $("#password").removeClass("is-invalid");
      $("#confirm-password").removeClass("is-invalid");
    }

    return isValid;
  }

  getPokemonFav() {
    pokemon.getAll(this.popularPokemons, 0, 160);
  }

  popularPokemons(pok) {
    const option = `<option value="${pok.id}" data-img="background-image:url(${pok.sprites.front_default});">${pok.name}</option>`;
    $("#pokemonFav").append(option);
  }

  create() {
    const payload = $("#formCreate").serializeObject();

    $.post("./src/api/create-user.php", payload, function (res) {
      const obj = JSON.parse(res);
      if (obj.success) {
        Swal.fire({
          position: "center",
          icon: "success",
          title: obj.message,
          showConfirmButton: false,
          timer: 1500,
        }).then(() => {
          sessionStorage.setItem("token", obj.data);
          window.location = "index.php";
        });

        return;
      }
      Swal.fire({
        position: "center",
        icon: "error",
        title: obj.message,
        showConfirmButton: false,
        timer: 1500,
      });
    });
  }
}

const create = new Create();
