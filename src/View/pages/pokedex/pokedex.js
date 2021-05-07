class Pokedex {
  constructor() {
    $("#btn-search, #btn-close").on("click", this.openCloseSideBar);
  }

  openCloseSideBar = function () {
    $("#side-bar").toggleClass("active");
  };
}

const pokedex = new Pokedex();
