window.onload = function(){
  
  var slideIndex = getElementsByClassName("echo_num").innerHTML.to_i; 
  debugger
  showSlides(slideIndex);


  prime();

  function prime(){
  document.getElementsByClassName("prev")[0].addEventListener("click", minusSlides);
   document.getElementsByClassName("next")[0].addEventListener("click", plusSlides);
  }

  function minusSlides(){
    n = slideIndex -1
    showSlides(n);
  }

  function plusSlides() {
    n = slideIndex + 1
    showSlides(n);
  }

  function currentSlide(n) {
    showSlides(slideIndex = n);
  }

  function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlide");
    debugger
    if (n > slides.length) {slideIndex = 1} 
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none"; 
    }
    slides[slideIndex-1].style.display = "block"; 
  }
}
