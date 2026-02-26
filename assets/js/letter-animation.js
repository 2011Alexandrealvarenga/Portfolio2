const elementos = document.querySelectorAll('.animar');

const observer = new IntersectionObserver((entradas) => {
  entradas.forEach((entrada) => {
    if (entrada.isIntersecting) {
      entrada.target.classList.add('ativo');
    } else {
      entrada.target.classList.remove('ativo'); // remove ao sair
    }
  });
}, {
  threshold: 0.3
});

elementos.forEach((elemento) => {
  observer.observe(elemento);
});