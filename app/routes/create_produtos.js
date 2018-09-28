module.exports = function (app) {

  app.get('/create_produtos', function (request, response) {
    app.app.controller.create_produto.create_produto(app, request, response)
  });

  app.post('/salvar', function (request, response) {
    app.app.controller.create_produto.salvar(app, request, response)
  });
}