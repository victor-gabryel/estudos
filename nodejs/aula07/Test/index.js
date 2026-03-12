const express = require("express");
const app = express();
const PORT = 8081

app.get("/", function(req, res){
    res.send("Seja bem vindo ao meu app")
});

app.get("/sobre", function(req, res){
    res.send("Minha pagina sobre");
})

app.get("/blog", function(req, res){
    res.send("Bem vindo ao meu blog!");
})

app.listen(PORT, function(){
    console.log(`Servidor rodando na url http://localhost:${PORT}`)
})