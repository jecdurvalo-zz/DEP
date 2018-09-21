module.exports.create_moto = function (app, request, response) {
    var connection = app.config.db();
    var motoModel = app.app.models.motoModel;

    motoModel.getMoto(connection, function (error, result) {
        resp.render("categorias/moto", {
            moto: result
        });
    });
}
