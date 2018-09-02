module.exports = function() {

  this.getProdutos = function(connection, callback) {
    connection.query('SELECT * FROM produto', callback);
  }

  this.salvarProdutos = function(produto, connection, callback){
    connection.query('INSERT INTO produto SET ? ', produto, callback);
  }

  return this;
}