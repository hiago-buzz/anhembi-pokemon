const url = new URL(window.location.href);

class Perfil {
  constructor() {
    $("#btn-edit").on("click", this.toggleEdit);

    $("#btn-delete").on("click", this.modalDelete);

    $("#btn-save").on("click", () => {
      if (!this.validate()) {
        Swal.fire({
          position: "center",
          icon: "warning",
          title: "Os campos não devem estar vazios!",
          showConfirmButton: false,
          timer: 1500,
        });
        return;
      }
      this.update();
    });

    this.getUser();
  }

  toggleEdit() {
    $("#btn-save").toggleClass("disabled");
    if ($(".form-control").hasAttr("disabled")) {
      $(".form-control").removeAttr("disabled");
    } else {
      $(".form-control").attr("disabled", true);
    }
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

  getUser() {
    loading.open();
    $.post("../../../api/get-user-log.php", function (res) {
      const obj = JSON.parse(res);
      if (obj.success) {
        const user = obj.data;
        $("#bio").val(user.bio);
        $("#nick-name").val(user.nickName);
        $("#full-name").val(user.fullName);
        $("#email").val(user.email);
        $("#pokemon").val(user.pokemonName);
        $("#birth-date").val(user.birthDate);
        $("#gender").val(user.gender);
        sessionStorage.setItem("userId", user.id);

        $.get(
          `https://pokeapi.co/api/v2/pokemon/${user.pokemonId}/`,
          (data) => {
            $("#imgPokemon").attr(
              "src",
              data.sprites.other["official-artwork"]["front_default"]
            );
            loading.close();
          }
        );

        return;
      } else {
        perfil.returnToLogin();
      }
    });
  }

  modalDelete() {
    Swal.fire({
      title: "Está ação é irreversivel!",
      text: "Deseja continuar?",
      type: "warning",
      showCancelButton: true,
      cancelButtonText: "Cancelar",
      confirmButtonText: "OK",
    }).then((type) => {
      if (type.isConfirmed) {
        perfil.delete();
      }
    });
  }

  delete() {
    const userId = sessionStorage.getItem("userId");
    $.post("../../../api/user-delete.php", { userId }, (res) => {
      const obj = JSON.parse(res);
      if (obj.success) {
        sessionStorage.removeItem("userId");
        sessionStorage.removeItem("token");
        perfil.returnToLogin();
      } else {
        Swal.fire({
          type: "error",
          position: "center",
          icon: "error",
          title: obj.message,
          showConfirmButton: false,
          timer: 1500,
        });
      }
    });
  }

  update() {
    loading.open();
    const payload = $("#formPerfil").serializeObject();
    $.post("../../../api/update-user.php", payload, (res) => {
      const obj = JSON.parse(res);
      const icon = obj.success ? "success" : "error";
      loading.close();
      Swal.fire({
        position: "center",
        icon: icon,
        title: obj.message,
        showConfirmButton: false,
        timer: 1500,
      });
      this.toggleEdit();
    });
  }

  returnToLogin() {
    window.location = `${url.origin}/anhembi-pokemon.com.br/login.php`;
  }
}

const perfil = new Perfil();
