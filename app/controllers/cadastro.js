module.exports.cadastro = function (application, req, res) {
    res.render('cadastro', {
        validacao: {},
        dados: {}

    });
}

module.exports.cadastrar = function (application, req, res) {
    var dadosForm = req.body;

    req.assert('nome', 'Nome é obrigatório!').notEmpty();
    req.assert('senha', 'Senha é obrigatória!').notEmpty();
    req.assert('usuario', 'Usuário é obrigatório!').notEmpty();
    req.assert('casa', 'Escolha um personagem!').notEmpty();

    var erros = req.validationErrors();

    if (erros) {
        res.render('cadastro', {
            validacao: erros,
            dados: dadosForm
        });

        return;
    }

    var connection = application.config.dbConnection;
    var UsuarioDAO = new application.app.models.UsuarioDAO(connection);


    UsuarioDAO.inserirUsuario(dadosForm);

    res.send('Podemos cadastrar!');
}
