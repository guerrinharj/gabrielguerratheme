//Pegamos todas as tags clicaveis via data-attribute
const trilhasTag = document.querySelectorAll('[data-trilhainfo]')

//Para cada tag
trilhasTag.forEach(tag => {
  //Quando clicamos em uma tag
  tag.addEventListener('click', () => {
    //Retiramos a classe de todos elementos com classe que queremos retirar no document.
    document.querySelectorAll('.descricao-trilha').forEach(trilhainfo => {
      trilhainfo.classList.remove('trilha-visible')
    })

    //Criamos uma variavel que pega o atributo de uma tag especifica
    const dataTrilha = tag.getAttribute('data-trilhainfo')
    //Procuramos no document se algum elemento possui o atributo
    const trilhaQuery = document.querySelector(dataTrilha)

    //Adicionamos a classe nesse elemento que achou o atributo
    trilhaQuery.classList.toggle('trilha-visible')
  })
})