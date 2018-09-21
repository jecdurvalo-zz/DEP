module.exports.getCarro = function (app, request, response) {
    var connection = app.config.db();
    var carroModel = app.app.models.carroModel;

    carroModel.getCarro(connection, function (error, result) {
        resp.render("categorias/carro", {
            carro: result
        });
    });
}