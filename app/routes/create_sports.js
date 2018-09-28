module.exports = function(app) {

  app.get('/create_sports', function(request, response){
    response.render('admin/create_sports');
  });

  app.post('/add_sports', function(request, response){
    var esporte = request.body;

    var connection = app.config.db();
    var sportsModel = app.app.models.sportsModel;

    sportsModel.addSports(esporte, connection, function(error, result){
      response.redirect("/sports");
    });
  });
}