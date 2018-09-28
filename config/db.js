var mysql = require('mysql');

var mysql_connection = function() {
    console.log('Conexão com db ok!');
    return connection = mysql.createConnection(
        {
            host: 'localhost',
            user: 'root',
            password: 'labfiap$2018',
            database: 'nac_cardapio'
        }
    );
}

module.exports = function() {
    console.log('Agora vai!');
    return mysql_connection;
}