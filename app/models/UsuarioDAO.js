function UsuarioDAO(connection) {
    //console.log("Carregou a função");

    this._connection = connection();
}

UsuarioDAO.prototype.inserirUsuario = function (usuario) {
    this._connection.open(function (err, mongoclient) {
        mongoclient.collection("usuarios", function (err, collection) {
            collection.insert(usuario);
            mongoclient.close();
        });
    });
}

UsuarioDAO.prototype.autenticar = function (usuario, req, res) {
    this._connection.open(function (err, mongoclient) {
        mongoclient.collection("usuarios", function (err, collection) {
            collection.find(usuario).toArray(function(err, result){
                console.log(result);
            });
            mongoclient.close();
        });
    });
}

module.exports = function () {
    return UsuarioDAO;
}