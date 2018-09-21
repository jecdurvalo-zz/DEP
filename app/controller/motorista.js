module.exports.getMotorista = function (app, request, response) {
    var connection = app.config.db();

    var motoristaModel = new app.app.models.MotoristaDAO(connection);

    motoristaModel.getMoto(function (error, result) {
        response.render("categorias/motorista", {
            motorista: result
        });
    });
}
