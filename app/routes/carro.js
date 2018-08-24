module.exports = function(app) {

    app.get('/carro', function(req, resp){
  
      var connection = app.config.db();
      var carroModel = app.app.models.carroModel;
  
      carroModel.getCarro(connection, function(error, result) {
        resp.render("categorias/carro", { carro: result });
      });
    });
  }
  