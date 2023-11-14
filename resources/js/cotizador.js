import glide from '@glidejs/glide'

new glide('#coments', {
  type: 'carousel',
  gap: 24,
  startAt: 0,
  hoverpause: true,
  autoplay: 6000,
  animationduration: 10000,
  direction: 'ltr',
  breakpoints: {
    600: { perView: 1 },
  }
}).mount()

new glide('#relacionadas', {
    type: 'carousel',
    startAt: 0,
    perView: 1,
    peek: { before: 190, after: 120 },
}).mount()
