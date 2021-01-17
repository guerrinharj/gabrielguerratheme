


const menuButtons = document.querySelectorAll('.menu')
const backTag = document.querySelector('.back')

menuButtons.forEach(menubutton => {
  const projetosButton = menubutton.querySelector('.projetos')
  const trilhaButton = menubutton.querySelector('.trilhas')
  const outrosButton = menubutton.querySelector('.outros')
  const sobreButton = menubutton.querySelector('.sobre')

  
  projetosButton.addEventListener('click', () => {
    backTag.style.opacity = '0'

    projetosButton.classList.add('menu-item-selected')
    trilhaButton.classList.remove('menu-item-selected')
    outrosButton.classList.remove('menu-item-selected')
    sobreButton.classList.remove('menu-item-selected')
    // menuProjects.classList.add('menu-projects-visible')
    const tituloProjects = document.querySelector('#titulo-menuprojects')
    tituloProjects.style.display = 'inline'

    const menuProjects = document.querySelectorAll('.menu-projects li')
    menuProjects.forEach(menuli => {
      menuli.classList.add('menu-projects-visible')
      menuli.classList.remove('li-invisible')
    })

    document.querySelectorAll('.embed-area iframe').forEach(embed => {
      embed.classList.remove('embed-visible')
    })

    document.querySelectorAll('.embed-area iframe').forEach(embed => {
      embed.classList.remove('embed-visible')
    })

    const descricaoTrilha = document.querySelectorAll('.descricao-trilha')    
     descricaoTrilha.forEach(trilhainfo => {
        trilhainfo.classList.remove('trilha-visible')
      })

    const descricaoOutro = document.querySelectorAll('.descricao-outro')
     descricaoOutro.forEach(outroinfo => {
        outroinfo.classList.remove('outro-visible')
      })

    
  })

  trilhaButton.addEventListener('click', () => {
    backTag.style.opacity = '0'
    projetosButton.classList.remove('menu-item-selected')
    trilhaButton.classList.add('menu-item-selected')
    outrosButton.classList.remove('menu-item-selected')
    sobreButton.classList.remove('menu-item-selected')
    const tituloProjects = document.querySelector('#titulo-menuprojects')
    tituloProjects.style.display = 'inline'
    const menuProjects = document.querySelectorAll('.menu-projects li')
    menuProjects.forEach(menuli => {
      menuli.classList.remove('li-invisible')
    })
    document.querySelectorAll('.embed-area iframe').forEach(embed => {
      embed.classList.remove('embed-visible')
    })

    const descricaoOutro = document.querySelectorAll('.descricao-outro')
     descricaoOutro.forEach(outroinfo => {
        outroinfo.classList.remove('outro-visible')
      })


  })

  outrosButton.addEventListener('click', () => {
    backTag.style.opacity = '0'
    projetosButton.classList.remove('menu-item-selected')
    trilhaButton.classList.remove('menu-item-selected')
    outrosButton.classList.add('menu-item-selected')
    sobreButton.classList.remove('menu-item-selected')
    const tituloProjects = document.querySelector('#titulo-menuprojects')
    tituloProjects.style.display = 'inline'
    const menuProjects = document.querySelectorAll('.menu-projects li')
    menuProjects.forEach(menuli => {
      menuli.classList.remove('li-invisible')
    })

    const descricaoTrilha = document.querySelectorAll('.descricao-trilha')    
     descricaoTrilha.forEach(trilhainfo => {
        trilhainfo.classList.remove('trilha-visible')
      })



  })

  sobreButton.addEventListener('click', () => {
    backTag.style.opacity = '0'
    projetosButton.classList.remove('menu-item-selected')
    trilhaButton.classList.remove('menu-item-selected')
    outrosButton.classList.remove('menu-item-selected')
    sobreButton.classList.add('menu-item-selected')
    const tituloProjects = document.querySelector('#titulo-menuprojects')
    tituloProjects.style.display = 'inline'
    const menuProjects = document.querySelectorAll('.menu-projects li')
    menuProjects.forEach(menuli => {
      menuli.classList.remove('li-invisible')
    })
    document.querySelectorAll('.embed-area iframe').forEach(embed => {
      embed.classList.remove('embed-visible')
    })


    const descricaoTrilha = document.querySelectorAll('.descricao-trilha')    
     descricaoTrilha.forEach(trilhainfo => {
        trilhainfo.classList.remove('trilha-visible')
      })

    const descricaoOutro = document.querySelectorAll('.descricao-outro')
     descricaoOutro.forEach(outroinfo => {
        outroinfo.classList.remove('outro-visible')
      })


  })
})