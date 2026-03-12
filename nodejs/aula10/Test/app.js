const express = require("express");
const app = express();
const PORT = 8081;

app.get("/", function(req, res){
    res.sendFile(__dirname + "/html/index.html");
});

app.get("/index.html", function(req, res){
    res.sendFile(__dirname + "/html/index.html");
});

app.get("/sobre.html", function(req, res){
    res.sendFile(__dirname + "/html/sobre.html");
});

app.get("/sobre", function(req, res){
    res.send("Minha pagina sobre");
});


app.listen(PORT, function(){
    console.log(`Servidor rodando na url http://localhost:${PORT}`);
});