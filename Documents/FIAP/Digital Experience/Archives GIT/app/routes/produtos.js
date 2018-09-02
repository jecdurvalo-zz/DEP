module.exports = function(app) {

  app.get('/produtos', function(request, response){

    var connection = app.config.db();
    var produtosModel = app.app.models.produtosModel;

    produtosModel.getProdutos(connection, function(error, result) {
      response.render("produtos/produtos", { produtos: result });
    });
  });
}
