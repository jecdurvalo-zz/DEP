module.exports.create_user = function (app, request, response) {
    response.render('admin/create_user', {
        validacao: {},
        usuario: {}
    });
}

module.exports.add_user = function (app, request, response) {
    var usuario = request.body;

    request.assert('nome', 'Nome é obrigatório!').notEmpty();
    request.assert('sobrenome', 'Sobrenome é obrigatório').notEmpty();
    request.assert('cep', 'CEP é obrigatório').notEmpty();
    request.assert('rg', 'RG é obrigatório').notEmpty();
    request.assert('endereco', 'Endereço é obrigatório!').notEmpty();
    request.assert('endereco', 'O endereço precisa ter entre 10 e 200 caracteres!').len(10, 200);
    request.assert('cpf', 'CPF é obrigatório').notEmpty()
    request.assert('cpf', 'CPF inválido!').len(11);



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
}