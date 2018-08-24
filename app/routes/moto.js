module.exports = function(app) {

    app.get('/moto', function(req, resp){
  
      var connection = app.config.db();
      var motoModel = app.app.models.motoModel;
  
      motoModel.getMoto(connection, function(error, result) {
        resp.render("categorias/moto", { moto: result });
      });
    });
  }
  