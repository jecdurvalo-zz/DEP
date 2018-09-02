module.exports = function(app) {

  app.get('/create_produtos', function(request, response){
    response.render('admin/create_produtos');
  });

  app.post('/salvar', function(request, response){
    var produto = request.body;

    var connection = app.config.db();
    var produtosModel = app.app.models.produtosModel;

    produtosModel.salvarProdutos(produto, connection, function(error, result) {
      response.redirect("/produtos");
    });
  });
}