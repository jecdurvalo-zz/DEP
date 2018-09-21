module.exports = function(app){
    app.get('/', function(request, response){
        app.app.index.index(app, request, response) ; 
    })
}