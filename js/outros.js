//Pegamos todas as tags clicaveis via data-attribute
const outrosTag = document.querySelectorAll('[data-outroinfo]')

//Para cada tag
outrosTag.forEach(tag => {
  //Quando clicamos em uma tag
  tag.addEventListener('click', () => {
    //Retiramos a classe de todos elementos com classe que queremos retirar no document.
    document.querySelectorAll('.descricao-outro').forEach(outroinfo => {
      outroinfo.classList.remove('outro-visible')
    })

    //Criamos uma variavel que pega o atributo de uma tag especifica
    const dataOutro = tag.getAttribute('data-outroinfo')
    //Procuramos no document se algum elemento possui o atributo
    const outroQuery = document.querySelector(dataOutro)

    //Adicionamos a classe nesse elemento que achou o atributo
    outroQuery.classList.toggle('outro-visible')
  })
})