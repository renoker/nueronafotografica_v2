import glide from '@glidejs/glide'

new glide('#relacionadas', {
    type: 'carousel',
    startAt: 0,
    perView: 1,
    peek: { before: 190, after: 120 },
}).mount()
