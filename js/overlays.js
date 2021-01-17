const tags = document.querySelectorAll('[data-overlay]')
const overlays = document.querySelector('.overlays')
const ggTag = document.querySelector('.gg')

tags.forEach(tag => {
  tag.addEventListener('click', () => {
    ggTag.classList.add('gg-invisible')

    overlays.classList.add('overlay-visible')

    overlays.querySelectorAll('div').forEach(div => {
      div.classList.remove('overlay-visible')
    })

    const dataOverlay = tag.getAttribute('data-overlay')
    const overlayQuery = overlays.querySelector(dataOverlay)

    overlayQuery.classList.add('overlay-visible')
  })
})

const overlaySub = document.querySelectorAll('.overlay')
const closes = document.querySelectorAll('.close')
const blankAreaTag = document.querySelector('.blank-area')

closes.forEach(close => {
  close.addEventListener('click', () => {
    closeFunction()

    const tituloProjects = document.querySelector('#titulo-menuprojects')
    tituloProjects.style.display = 'inline'

    const menuProjects = document.querySelectorAll('.menu-projects li')
    menuProjects.forEach(menuli => {
      menuli.classList.remove('li-invisible')


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
})

const closeFunction = () => {
  overlays.classList.remove('overlay-visible')




  overlaySub.forEach(overlay => {
    overlay.classList.remove('overlay-visible')
  })
  ggTag.classList.remove('gg-invisible')
}





blankAreaTag.addEventListener('click', () => {
  closeFunction()
})

const menuItems = document.querySelectorAll('.byebyeprojects')
const menuProjects = document.querySelector('.menu-projects')

menuItems.forEach(item => {
  item.addEventListener('click', () => {
    menuProjects.classList.remove('overlay-visible')
    document.querySelectorAll('.info-tracklist').forEach(releaseinfo => {
      releaseinfo.classList.remove('release-visible')
    })
  })
})

const onMouseMove = e => {
  ggTag.style.left = e.pageX + 'px'
  ggTag.style.top = e.pageY + 'px'
}
document.addEventListener('mousemove', onMouseMove)





document.addEventListener('keyup', event => { 
	if (event.keyCode == 27) {
    
    removeStuff()
  
  }

})


const noEmbeds = document.querySelectorAll('.no-embed')

noEmbeds.forEach(noembed => {
  
  noembed.addEventListener('click', () => {
    removeStuff()
  })
  

})



const removeStuff = () => {
  overlays.classList.remove('overlay-visible')
    ggTag.classList.remove('gg-invisible')

    const embedAreas = document.querySelectorAll('.embed-area')

    embedAreas.forEach (embedarea => {
      embedarea.classList.remove('embed-visible')
    })
    
    const menuProjectsTag = document.querySelector('.menu-projects')
    
    menuProjectsTag.classList.remove('overlay-visible')
    
    
    overlays.querySelectorAll('div').forEach(div => {
      div.classList.remove('overlay-visible')
    })

    const menuItems = document.querySelectorAll('.menu-item')


    menuItems.forEach(menubutton => {
      menubutton.classList.remove('menu-item-selected')
    })


}