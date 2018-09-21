module.exports = function (app) {
  app.get('/carro', function (request, response) {
    app.app.carro.getCarro(app, request, response);
  });
}