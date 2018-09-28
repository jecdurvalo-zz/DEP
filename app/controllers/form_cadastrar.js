module.exports.create_cardapio = function(app, req, res){
  res.render('admin/form_cadastrar', {
      cardapio: {}
    });
}

module.exports.salvar = function(app, req, res){
  var cardapio = req.body;
  var connection = app.config.db();

  var cardapioModel = new app.app.models.CardapioDAO(connection);

  cardapioModel.addCardapio(cardapio, function (error, res) {
    res.redirect("/cardapio");
  });
}