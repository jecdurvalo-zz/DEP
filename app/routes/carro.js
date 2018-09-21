module.exports = function (app) {
  app.get('/carro', function (request, response) {
    app.app.controller.carro.getCarro(app, request, response);
  });
}