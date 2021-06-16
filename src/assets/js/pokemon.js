class Pokemon {
  constructor() {
    this.baseUrl = "https://pokeapi.co/api/v2/pokemon";
  }

  getAll(callback, offset = 0, limit = 20) {
    loading.open();
    $.get(`${this.baseUrl}?offset=${offset}&limit=${limit}`).done(
      ({ results }) => {
        results.forEach((element) => {
          $.get(element.url).done((e) => callback(e));
        });
      }
    );
    loading.close();
  }
}

const pokemon = new Pokemon();
