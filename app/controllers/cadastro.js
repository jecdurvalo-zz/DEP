module.exports.cadastro = function(application,req, res){
    res.render('cadastro');
}

module.exports.cadastrar = function(application, req, res){
    var dadosForm = req.body;

    console.log(dadosForm);
}