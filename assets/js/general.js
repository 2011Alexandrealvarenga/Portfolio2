function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
  }
  x[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " w3-opacity-off";
}
// Mudar ingles portugues
const btnEnglishContent = document.querySelector('.btn-eng-cont');
const btnPortuguesContent = document.querySelector('.btn-prt-cont');

btnEnglishContent.addEventListener('click', ()=>{
  showEnglish();
})
btnPortuguesContent.addEventListener('click', ()=>{
  showPortugues();
})

function showEnglish(){
  const englishContent = document.querySelectorAll('.eng-cont');
  const portuguesContent = document.querySelectorAll('.prt-cont');

  englishContent.forEach(element =>{
    element.style.display = 'block';
  });
  portuguesContent.forEach(element =>{
    element.style.display = 'none';
  });
}
function showPortugues(){
  const englishContent = document.querySelectorAll('.eng-cont');
  const portuguesContent = document.querySelectorAll('.prt-cont');

  englishContent.forEach(element =>{
    element.style.display = 'none';
  });
  portuguesContent.forEach(element =>{
    element.style.display = 'block';
  });
}
