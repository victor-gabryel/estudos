var idade = 64
console.log(`Vote tem ${idade} anos.`)
if (idade < 16){
    console.log(`Não vota`)
} else if (idade < 18) {
        console.log(`Voto Opcional`)
} else if (idade >= 18 && idade < 65) {
    console.log(`Voto orbigatório`)
} else {
    console.log(`Voto Opcional`)
}