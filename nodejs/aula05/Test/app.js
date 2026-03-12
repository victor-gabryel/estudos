var http = require('http');

http.createServer(function(req, res){
    res.end("<h1>Teste</h1>")
}).listen(8081)

console.log("O Servidor rodando!");