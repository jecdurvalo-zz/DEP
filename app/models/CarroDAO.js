function CarroDAO(connection){
  
  this._connection = connection;
}
  CarroDAO.prototype.getCarro = function(callback) {
    this._connection.query('SELECT * FROM carro', callback);
  }

  module.exports = function() {

    return CarroDAO;
  
  }