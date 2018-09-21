module.exports = function(app) {

  app.get('/produtos', function(request, response){
    app.app.produto.produto(app, request, response)
  });
}
