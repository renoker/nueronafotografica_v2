import glide from '@glidejs/glide'


new glide('#glide_marcas', {
  type: 'carousel',
  startAt: 0,
  perView: 4,
  peek: 100,
  breakpoints: {
    600: { perView: 1 },
  }
}).mount()