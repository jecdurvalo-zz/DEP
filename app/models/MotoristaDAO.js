function MotoristaDAO(connection) {

  this._connection = connection;
}
  MotoristaDAO.prototype.getMoto = function (callback) {
    this._connection.query('SELECT * FROM motorista', callback);
}

MotoristaDAO.prototype.salvarMotorista = function (motorista, callback) {
  this._connection.query('INSERT INTO motorista SET ?' , motorista, callback);
}

module.exports = function () {

  return MotoristaDAO;

}