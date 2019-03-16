var slides = document.getElementsByClassName("mySlides");
var dots = document.getElementsByClassName("dot");
var slideIndex = slides.length;
autoSlides();

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  if (slideIndex > slides.length) {slideIndex = 1}  
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" activep", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " activep";
}

function autoSlides(){
  showSlides(slideIndex++);
  setTimeout(autoSlides,8000);
}