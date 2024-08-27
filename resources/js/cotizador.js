import glide from '@glidejs/glide'

new glide('#relacionadas', {
    type: 'carousel',
    startAt: 0,
    perView: 1,
    focusAt: 'center',
    gap: 0,
    breakpoints: {
        600: {
          perView: 1,
        },
        
    }    
}).mount()
