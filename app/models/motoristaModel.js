module.exports = function() {

    this.getMotorista = function(connection, callback) {
      connection.query('SELECT * FROM motorista', callback);
    }
    return this;
  }