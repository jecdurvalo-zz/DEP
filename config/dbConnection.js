var mongo = require('mongodb');

var connecMongoDB = function(){
    var db = new mongo.Db(
        'chaves',
        new mongo.Server(
            'localhost',
            27017,
            {}
        ),
        {}
    );

    return db;
}

module.exports = function(){
    return connecMongoDB;
}