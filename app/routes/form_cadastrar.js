module.exports = function (app) {

   app.get('/cadastrar', function (req, res) {
    app.app.controllers.form_cadastrar.create_cardapio(app, req, res)
  });

  app.post('/salvar', function (req, res) {
    app.app.controllers.form_cadastrar.salvar(app, req, res)
  });
}
