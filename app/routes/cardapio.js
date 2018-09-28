module.exports = function(app){
	app.get('/cardapio', function (req, res) {
		app.app.controllers.cardapio.cardapio(app, req, res)
	  });
}
