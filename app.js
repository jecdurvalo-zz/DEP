//Exporting server configs
var app = require('./config/server');

//Sobe o servidor utilizando o listen(), passando a porta e uma function de callback
app.listen(2001, function() {
  //console.log("Server is up with Express");
  console.log(":::Working!!");
});


