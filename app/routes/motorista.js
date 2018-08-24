module.exports = function(app) {

    app.get('/motorista', function(req, resp){
  
      var connection = app.config.db();
      var motoristaModel = app.app.models.motoristaModel;
  
      motoristaModel.getMotorista(connection, function(error, result) {
        resp.render("categorias/motorista", { motorista: result });
      });
    });
  }
  