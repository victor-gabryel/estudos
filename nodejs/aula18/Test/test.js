// Conexão com o banco de dados
const Sequelize = require('sequelize')

const sequelize = new Sequelize('test', 'root', 'root', {
    host: "localhost",
    dialect: 'mysql'
})


// Verificando conexão
sequelize.authenticate()
.then(() => {
    console.log("Conectado com sucesso!")
})
.catch((erro) => {
    console.log("Erro: " + erro)
})


// Postagem
const Postagem = sequelize.define('postagens', {
    titulo: {
        type: Sequelize.STRING
    },
    conteudo: {
        type: Sequelize.TEXT
    }
})

// Postagem.create({
//     titulo: "Um titulo qualquer",
//     conteudo: "sfsafffff"
// })

const Usuario = sequelize.define('usuarios', {
    nome: {
        type: Sequelize.STRING
    },
    sobrenome: {
        type: Sequelize.STRING
    },
    idade: {
        type: Sequelize.INTEGER
    },
    email: {
        type: Sequelize.STRING
    }
})

Usuario.create({
    nome: "Victor",
    sobrenome: "Gabryel",
    idade: "18",
    email: "email@teste.com"
})