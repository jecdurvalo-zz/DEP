var app = require('./config/server');

//Require Home
var rotaHome = require('./app/routes/home');
rotaHome(app);

//Require Cadastrar
var rotaCadastrar = require('./app/routes/cadastrar');
rotaCadastrar(app);

//Require Produtos
var rotaProdutos = require('./app/routes/produtos');
rotaProdutos(app);

//Require de uma rota diferente
var rotaDiferente = require('./app/routes/diferente');
rotaDiferente(app);

//Com o listen, da pra subir o servidor atravé de 2 parâmetros.
//Sendo um deles, o callbak
app.listen(2000, function () {
   
    console.log("Server ativo");
});