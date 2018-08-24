var mysql = require('mysql');

var mysql_connection = function(){
    console.log("Banco de dados ok!");

    return connection = mysql. createConnection({
        host: 'localhost',
        user: 'root',
        password: 'labfiap$2018',
        database: 'nac',
    }
    );
}

module.exports = function() {
    console.log('Tudo funcionando!');
    return mysql_connection;
}

