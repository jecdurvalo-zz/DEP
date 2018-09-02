var http = require('http');

//Criando nosso servidor!

var server = http.createServer(function(req, res){


    //req.url = /algo
    
    var categoria = req.url;

    if(categoria == "/fiap"){
        res.end("<html><body>Site da FIAP</body></html>");
    } else if(categoria == "/criativo"){
        res.end("<html><body>Uma pagina muito criativa</body></html>");
    }

    res.end("<html><body>Pagina Teste</body></html>");

}); 

server.listen(2000);