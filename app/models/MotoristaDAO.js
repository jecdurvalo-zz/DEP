function MotoristaDAO(connection) {

  this._connection = connection;
}
  MotoristaDAO.prototype.getMoto = function (callback) {
    this._connection.query('SELECT * FROM motorista', callback);
}

module.exports = function () {

  return MotoristaDAO;

}