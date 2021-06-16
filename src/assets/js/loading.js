class Loading {
  open() {
    $(".bg-loading").css("display", "flex");
  }

  close() {
    $(".bg-loading").css("display", "none");
  }
}

const loading = new Loading();
