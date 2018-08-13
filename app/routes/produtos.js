module.exports = function (app) {

    var mysql = require('mysql');
    
    app.get('/produtos', function (req, res) {

        var connection = mysql.createConnection({
            host: 'localhost',
            user: 'root',
            password: 'jobinhaa',
            database: 'sistema_produtos'
        });

        connection.query(
            'SELECT * FROM produto',
            function (error, result) {
                //res.send(result);
                res.render("produtos/produtos", {produtos: result});
            }
        );
    });

}