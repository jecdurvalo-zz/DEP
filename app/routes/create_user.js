module.exports = function (app) {

  app.get('/create_user', function (request, response) {
    response.render('admin/create_user', {
      validacao: {},
      usuario: {}
    });
  });

  app.post('/add_user', function (request, response) {
    var usuario = request.body;

    request.assert('nome', 'Nome é obrigatório!').notEmpty();
    request.assert('sobrenome', 'Sobrenome é obrigatório').notEmpty();
    request.assert('cep', 'CEP é obrigatório').notEmpty();
    request.assert('rg', 'RG é obrigatório').notEmpty();
    request.assert('endereco', 'Endereço é obrigatório').len(10, 200);
    request.assert('cpf', 'CPF é obrigatório').len(11);



    var erros = request.validationErrors();

    if (erros) {
      response.render('admin/create_user', {
        validacao: erros,
        usuario: usuario
      });

      return;
    }

    var connection = app.config.db();
    var userModel = new app.app.models.UsuarioDAO(connection);

    // Parameter 'user' is a JSON files
    userModel.salvarUsuario(usuario, function (error, result) {
      response.redirect("/usuarios");
    });
  });
}