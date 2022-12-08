function habilitaEscolha() {

    const escolha = document.getElementById("escolha").value

    if (escolha == 1) {
        const nome = document.getElementById("nome")
        nome.classList.remove('escola')
        const data = document.getElementById("data")
        data.classList.add('escola')
    }
    if (escolha == 2) {
        const nome = document.getElementById("nome")
        nome.classList.remove('escola')
        const data = document.getElementById("data")
        data.classList.add('escola')
    }
    if (escolha == 3) {
        const nome = document.getElementById("nome")
        nome.classList.add('escola')
        const data = document.getElementById("data")
        data.classList.remove('escola')

    }


}
