function MotoDAO(connection){
  
    this._connection = connection;
  }
    MotoDAO.prototype.getMoto = function(callback) {
      this._connection.query('SELECT * FROM moto', callback);
    }
  
    module.exports = function() {
  
      return MotoDAO;
    
    }