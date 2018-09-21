module.exports.getCarro = function (app, request, response) {
    var connection = app.config.db();

    var carroModel = new app.app.models.CarroDAO(connection);

    carroModel.getCarro(function (error, result) {
        response.render("categorias/carro", {
            carro: result
        });
    });
}
