function CardapioDAO(connection){
    
    this._connection = connection;
  }
  CardapioDAO.prototype.getCardapio = function(callback) {
      this._connection.query('SELECT * FROM cardapio', callback);
    }
  
    CardapioDAO.prototype.addCardapio = function(cardapio, callback){
      this._connection.query('INSERT INTO cardapio SET ? ', cardapio, callback);
    }
  
  module.exports = function() {
  
    return CardapioDAO;
  
  }