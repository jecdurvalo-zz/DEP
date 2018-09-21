module.exports = function (app) {

  app.get('/moto', function (request, response) {
    app.app.controller.moto.create_moto(app, request, response)
  });
}