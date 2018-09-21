module.exports.create_produto = function(app, request, response){
    response.render('admin/create_produtos', {
        validacao: {},
        produto: {}
      });
}

module.exports.salvar = function(app, request, response){
    var produto = request.body;

    request.assert('nome', 'Nome é obrigatório!').notEmpty();
    request.assert('descricao', 'Descrição é obrigatório').notEmpty();

    var erros = request.validationErrors();

    if (erros) {
      response.render('admin/create_produtos', {
        validacao: erros,
        produto: produto
      });
      return;
    }

    // conexão
    var connection = app.config.db();

    // instance new 
    var produtosModel = new app.app.models.ProdutosDAO(connection);

    produtosModel.salvarProdutos(produto, function (error, result) {
      response.redirect("/produtos");
    });
}