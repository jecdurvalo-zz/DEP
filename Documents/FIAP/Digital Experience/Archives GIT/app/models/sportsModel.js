module.exports = function() {

  this.getSports = function(connection, callback) {
    connection.query('SELECT * FROM esporte', callback);
  }

  this.addSports = function(esporte, connection, callback){
    connection.query('INSERT INTO esporte SET ? ', esporte, callback);
  }

  return this;
}