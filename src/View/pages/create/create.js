class Create {
  constructor() {
    $("#btn-create").on("click", function () {
      Swal.fire({
        position: "center",
        icon: "success",
        title: '"Criado com sucesso!"',
        showConfirmButton: false,
        timer: 1500,
      }).then((res) => {
        window.location.href = "index.php";
      });
    });
  }
}

const create = new Create();
