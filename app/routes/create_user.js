module.exports = function (app) {

  app.get('/create_user', function (request, response) {
   app.app.controller.create_user.create_user(app, request, response)
  });

  app.post('/add_user', function (request, response) {
    app.app.controller.create_user.add_user(app, request, response)
  });
}