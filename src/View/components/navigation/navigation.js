class Navigation {
  constructor() {
    this.navItems = $(".nav-item");
    this.root = $("#root");

    this.setInitialPage();

    this.navItems.on("click", function () {
      const page = $(this).attr("data-id");
      navigation.removeClassnavActive();
      $(this).addClass("active");
      navigation.redirect(page);
    });

    $("#btn-logout").on("click", this.logout);
  }

  removeClassnavActive = function () {
    this.navItems.each((_, element) => {
      $(element).removeClass("active");
    });
  };

  redirect = function (page) {
    const PAGES = {
      pokedex: "src/View/pages/pokedex/pokedex.php",
      squad: "src/View/pages/squad/squad.php",
      perfil: "src/View/pages/perfil/perfil.php",
    };
    this.root.attr("src", PAGES[page]);
    this.setPageInSession(page);
  };

  setInitialPage = function () {
    const page = this.getPageInSession();
    if (page) {
      this.removeClassnavActive();
      $(`#${page}`).addClass("active");
      this.redirect(page);
    }
  };

  setPageInSession = function (page) {
    sessionStorage.setItem("currentPage", page);
  };

  getPageInSession = function () {
    return sessionStorage.getItem("currentPage");
  };

  deletePageInSession = function () {
    sessionStorage.removeItem("currentPage");
  };

  logout = function () {
    $.post("./src/api/logout.php", function (res) {
      const obj = JSON.parse(res);

      if (obj.success) {
        sessionStorage.removeItem("token");
        window.location = "login.php";
      }
    });
  };
}

const navigation = new Navigation();
