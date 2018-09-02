module.exports = function(app) {

  app.get('/sports', function(request, response){
    var connection = app.config.db();
    var sportsModel = app.app.models.sportsModel;

    sportsModel.getSports(connection, function(error, result) {
      response.render("sports/sports", { esportes: result });
    });
  });
}
