module.exports = function (app) {
    app.get('/diferente', function (req, res) {
        res.render("produtos/produtos");
    });
}