module.exports = function() {

    this.getMoto = function(connection, callback) {
      connection.query('SELECT * FROM moto', callback);
    }
    return this;
  }