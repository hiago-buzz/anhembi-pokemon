$.fn.serializeObject = function () {
  var o = {};
  var a = this.serializeArray();
  $.each(a, function () {
    if (o[this.name]) {
      if (!o[this.name].push) {
        o[this.name] = [o[this.name]];
      }
      o[this.name].push(this.value || "");
    } else {
      o[this.name] = this.value || "";
    }
  });
  return o;
};

class Util {
  validateEmail = function () {
    const email = $("#email");
    const regex_validation =
      /^([a-z]){1,}([a-z0-9._-]){1,}([@]){1}([a-z]){2,}([.]){1}([a-z]){2,}([.]?){1}([a-z]?){2,}$/i;

    const isValid = regex_validation.test(email.val());
    console.log(email.val());
    console.log(isValid);
    if (!isValid) {
      email.addClass("is-invalid");
    } else {
      email.removeClass("is-invalid");
    }

    return isValid;
  };
}

const util = new Util();
