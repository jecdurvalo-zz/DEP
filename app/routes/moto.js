module.exports = function (app) {

  app.get('/moto', function (request, response) {
    app.app.moto.create_moto(app, request, response)
  });
}