const carouselSlide = document.querySelector('.carousel-slide');
const carouselImages = document.querySelectorAll('.carousel-slide img');

var time = 5000;

let counter = 0;
const size = carouselImages[0].clientWidth;

carouselSlide.style.transform = 'translateX(' + (-size * counter) + 'px)';

function changeImg(){
  if(counter >= carouselImages.length - 1){counter = 0};
  carouselSlide.style.transition = "transform 0.4s ease-in-out";
  counter++;
  carouselSlide.style.transform = 'translateX(' + (-size * counter) + 'px)';


  carouselSlide.addEventListener('transitioned', ()=>{
    if(carouselImages[counter].id === 'lastClone'){
      carouselSlide.style.transition = "none";
      counter = carouselImages.length -2;
      carouselSlide.style.transform = 'translateX(' + (-size * counter) + 'px)';
    }
    if(carouselImages[counter].id === 'firstClone'){
      carouselSlide.style.transition = "none";
      counter = carouselImages.length - counter;
      carouselSlide.style.transform = 'translateX(' + (-size * counter) + 'px)';
    }

  });
  setTimeout("changeImg()", time);
}

setTimeout("changeImg()", time);
