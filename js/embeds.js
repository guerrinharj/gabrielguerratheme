//Pegamos todas as tags clicaveis via data-attribute
const embedTag = document.querySelectorAll('[data-embed]')

//Para cada tag
embedTag.forEach(tag => {
  //Quando clicamos em uma tag
  tag.addEventListener('click', () => {
    //Retiramos a classe de todos elementos com classe que queremos retirar no document.
    document.querySelectorAll('.embed-area').forEach(embed => {
      embed.classList.remove('embed-visible')

		
    //Criamos uma variavel que pega o atributo de uma tag especifica
    const dataEmbed = tag.getAttribute('data-embed')



    

    //Procuramos no document se algum elemento possui o atributo
    const embedQuery = document.querySelector(dataEmbed)


    //Adicionamos a classe nesse elemento que achou o atributo
    //
    embedQuery.classList.add('embed-visible')
    
  })
})
})