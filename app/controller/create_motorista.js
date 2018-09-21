module.exports.create_motorista = function (app, request, response) {
    response.render('admin/create_motorista', {
        validacao: {},
        motorista: {}
    });
}

module.exports.add_motorista = function (app, request, response) {
    var motorista = request.body;

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
        response.render('admin/create_motorista', {
            validacao: erros,
            motorista: motorista
        });

        return;
    }

    var connection = app.config.db();
    var motoristaModel = new app.app.models.MotoristaDAO(connection);

    // Parameter 'user' is a JSON files
    motoristaModel.salvarMotorista(motorista, function (error, result) {
        response.redirect("/motorista");
    });
}