class Perfil {
  constructor() {
    $.fn.hasAttr = function (name) {
      return this.attr(name) !== undefined;
    };

    $("#btn-edit").on("click", this.toggleEdit);

    $("#btn-save").on("click", function () {
      perfil.toggleEdit();
      Swal.fire({
        position: "center",
        icon: "success",
        title: "Salvo com sucesso!",
        showConfirmButton: false,
        timer: 1500,
      }).then((res) => {});
    });
  }

  toggleEdit = function () {
    $("#btn-save").toggleClass("disabled");
    if ($(".form-control").hasAttr("disabled")) {
      $(".form-control").removeAttr("disabled");
    } else {
      $(".form-control").attr("disabled", true);
    }
  };
}

const perfil = new Perfil();
