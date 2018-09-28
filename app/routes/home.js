module.exports = function(app) {

  app.get('/', function(request, response){
   app.app.controller.home.home(app, request, response)
  });

}
