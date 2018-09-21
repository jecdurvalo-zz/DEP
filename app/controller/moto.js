module.exports.create_moto = function (app, request, response) {
    var connection = app.config.db();

    var motoModel = new app.app.models.MotoDAO(connection);

    motoModel.getMoto(function (error, result) {
        response.render("categorias/moto", {
            moto: result
        });
    });
}
