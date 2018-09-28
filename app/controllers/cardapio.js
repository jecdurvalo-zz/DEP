module.exports.cardapio = function(app, req, res){
  var connection = app.config.db();

  var cardapioModel = new app.app.models.CardapioDAO(connection);
  var cardapio = req.body;
    cardapioModel.getCardapio(function(error, result) {
      res.render("cardapio/cardapio", { cardapio: result });
    });
}