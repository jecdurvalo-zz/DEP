module.exports = function() {

    this.getCarro = function(connection, callback) {
      connection.query('SELECT * FROM carro', callback);
    }
    return this;
  }