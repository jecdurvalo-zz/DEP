module.exports = function (app) {

    app.get('/create_motorista', function (request, response) {
     app.app.controller.create_motorista.create_motorista(app, request, response)
    });
  
    app.post('/add_user', function (request, response) {
      app.app.controller.create_motorista.add_motorista(app, request, response)
    });
  }