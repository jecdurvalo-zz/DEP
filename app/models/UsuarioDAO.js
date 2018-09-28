function UsuarioDAO(connection){
  this._connection = connection;
}

  UsuarioDAO.prototype.getUsuario = function(callback) {
    this._connection.query('SELECT * FROM cliente', callback);
  }

  UsuarioDAO.prototype.salvarUsuario = function(usuario, callback){
    this._connection.query('INSERT INTO cliente SET ? ', usuario, callback);
  }


module.exports = function() {

  return UsuarioDAO;

  }