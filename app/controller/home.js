module.exports.home = function (app, request, response) {
    var connection = app.config.db();
  
      //instance Produtos
      var produtoModel = new app.app.models.ProdutosDAO(connection);
  
      produtoModel.topCinco(function(error, result) {
        response.render("home/index", { produtos: result });
      });
}
