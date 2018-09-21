module.exports = function(app) {

    app.get('/motorista', function(request, response){
      app.app.controller.motorista.getMotorista(app, request, response)
    });
  }
  