// creating class with prototypes JS
function ProdutosDAO(connection){
  // refence ._connection belongs to Produtos (like inheritance POO)
  this._connection = connection;
}
  ProdutosDAO.prototype.getProdutos = function(callback) {
    this._connection.query('SELECT * FROM produto', callback);
  }

  ProdutosDAO.prototype.salvarProdutos = function(produto, callback){
    this._connection.query('INSERT INTO produto SET ? ', produto, callback);
  }

  ProdutosDAO.prototype.topCinco = function(callback){
    this._connection.query('SELECT * FROM produto ORDER BY id_produto DESC LIMIT 5', callback);
  }

module.exports = function() {

  return ProdutosDAO;

}