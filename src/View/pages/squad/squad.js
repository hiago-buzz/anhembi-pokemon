class Squad {
  constructor() {
    $("#btn-save").on("click", function () {
      squad.blockSquad();
      Swal.fire({
        position: "center",
        icon: "success",
        title: "Salvo com sucesso!",
        showConfirmButton: false,
        timer: 1500,
      }).then((res) => {});
    });

    $("#btn-edit").on("click", this.blockSquad);
  }

  blockSquad = function () {
    $(".colection-pokemon").toggleClass("disabled-card disabled");

    $("#btn-edit").children().toggleClass("fa-edit");
    $("#btn-edit").children().toggleClass("fa-times text-danger");

    $("#btn-save").toggleClass("disabled");
    $("#btn-clear").toggleClass("disabled");
  };
}

const squad = new Squad();
