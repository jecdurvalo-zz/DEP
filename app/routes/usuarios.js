module.exports = function(app) {

    app.get('/usuarios', function(request, response){
  
      var connection = app.config.db();
  
      //instance Produtos
      var usuarioModel = new app.app.models.UsuarioDAO(connection);
  
      usuarioModel.getUsuario(function(error, result) {
        response.render("usuarios/usuarios", { usuario: result });
      });
    });
  }
  