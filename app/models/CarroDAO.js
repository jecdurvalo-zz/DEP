function CarroDAO(connection){
  // refence ._connection belongs to Produtos (like inheritance POO)
  this._connection = connection;
}
    carroModel = CarroDAO
    carroModel.getCarro = function(callback) {
      this._connection.query('SELECT * FROM carro', callback);
    }
    return this;
  }