ScrollReveal().reveal('.headline', { duration: 2000 });

const slideUp = {
  distance: '150%',
  origin: 'bottom',
  viewFactor: 0.5,
  opacity: null
};

const flickIn = {
  interval: 400,
  viewFactor: 0.5,
  origin: 'bottom'
};

ScrollReveal().reveal('.slide-up', slideUp);
ScrollReveal().reveal('.flick', flickIn);
