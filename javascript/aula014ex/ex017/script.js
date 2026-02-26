function tabuada(){
    let num = document.getElementById('txtn')
    let tab = document.getElementById('seltab')
    let valor = document.getElementById('txtv')

    if (num.value.length == 0) {
        window.alert('Por favor, digite um número!')
    } else {
        let v = Number(valor.value)
        let n = Number(num.value)
        let c = 1
        tab.innerHTML = ''
        while (c <= v) {
            let item = document.createElement('option')
            item.text = `${n} X ${c} = ${n*c}`
            item.value = `tab${c}`
            tab.appendChild(item)
            c++
        }
    }

}