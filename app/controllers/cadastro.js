module.exports.cadastro = function (application, req, res) {
    res.render('cadastro', {
        validacao: {}
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
        });

        return;
    }
}
