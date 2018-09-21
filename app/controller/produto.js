module.exports.produto = function(app, request, response){
    var connection = app.config.db();

    //instance Produtos
    var produtosModel = new app.app.models.ProdutosDAO(connection);

    produtosModel.getProdutos(function(error, result) {
      response.render("produtos/produtos", { produtos: result });
    });
}