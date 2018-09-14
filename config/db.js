var mysql = require('mysql');

//Apenas quem chamar a variável vai conectar com o banco
var mysql_connection = function() {
    console.log('Conexão com DB estabelecida!');
    return connection = mysql.createConnection(
        {
            host: 'Localhost',
            user: 'root',
            password: 'jobinhaa',
            database: 'sistema_produtos'
        }
    );
}

module.exports = function() {
    console.log('Agora vai!');
    return mysql_connection;
}