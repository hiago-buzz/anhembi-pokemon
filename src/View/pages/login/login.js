class Login {
  constructor() {
    $("#btn-login").on("click", this.logIn);
  }

  logIn() {
    const password = $("#password").val();
    const email = $("#email").val();
    if (!util.validateEmail() || !password) {
      Swal.fire({
        position: "center",
        icon: "warning",
        title: "Preencha os campos corretamente!",
        showConfirmButton: false,
        timer: 1500,
      });
      return;
    }

    loading.open();
    const payload = {
      email,
      password,
    };

    $.post("./src/api/login.php", payload, function (res) {
      const obj = JSON.parse(res);

      if (obj.success) {
        sessionStorage.setItem("token", obj.data);
        window.location = "index.php";
        return;
      }
      loading.close();
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
const login = new Login();
