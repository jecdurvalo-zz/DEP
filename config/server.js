var express = require('express');
var consign = require('consign');

var app = express();

consign().include('app/routes').then('app/models').then('config/db.js').into(app);

app.set('view engine', 'ejs');
app.set('views', './app/views');

module.exports = app;

