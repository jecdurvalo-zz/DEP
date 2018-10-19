module.exports.jogo = function(application, req, res){
    if(req.session.autorizado){
        res.render('jogo');
    } else {
        res.send('Amigão, loga aí!');
    }   
    
}

module.exports.sair = function(application, req, res){
    //res.send("Saiu");

    req.session.destroy(function(err){
        res.render('index', {validacao: {}});
    });
}