var express = require('express');
var consign = require('consign');
var bodyParser = require('body-parser');
var expressValidator = require('express-validator');

//Inicializando a function
var app = express();

//BodyParser, chamar antes do consign
app.use(bodyParser.urlencoded({ extended: true }));

// Midware to validate functions (more info at )
app.use(expressValidator());

//Autoload das rotas
//.then('config/db') => Autoload do DB, tem que ter extensao
consign().include('app/routes').then('app/models').then('config/db.js').into(app);

//A Engine de view foi altera para EJS. Para configurar isso no Node:
app.set('view engine', 'ejs');
app.set('views', './app/views');


//Exports
module.exports = app;