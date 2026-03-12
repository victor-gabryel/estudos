const express = require("express");
const app = express();
const PORT = 8081;

const server = app.listen(PORT, () => {
    console.log(`Servidor rodando em http://localhost:${PORT}`);
});


server.on("error", (erro) => {
    console.log("Erro ao iniciar o servidor:");
    console.error(erro);
});