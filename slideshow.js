window.currentSlide = 0;
window.addEventListener("load", function(){
  display_on_load();  
  ready_buttons();
});

function display_on_load(){
  document.getElementsByClassName("slideshow")[0].style.display = "block";   
}


function ready_buttons(){
  document.getElementsByClassName("next")[0].addEventListener("click", plusSlides);  
  document.getElementsByClassName("prev")[0].addEventListener("click", minusSlides);
}

function plusSlides(){
  document.getElementsByClassName("slideshow")[currentSlide].style.display = "none";
  document.getElementsByClassName("slideshow")[next_slide_index()].style.display= "block";
}

function minusSlides(){
  document.getElementsByClassName("slideshow")[currentSlide].style.display = "none";
  document.getElementsByClassName("slideshow")[prev_slide_index()].style.display = "block";
}

function next_slide_index(){
  var slide_check = currentSlide
  slide_check += 1
  if (slide_check > painting_tracker_baseline()){ currentSlide = 0 }
  else{ add_to_tracker() }
  return currentSlide
}

function prev_slide_index(){
  var slide_check =currentSlide
  slide_check += -1
  if ( slide_check < 0){ currentSlide = painting_tracker_baseline(); }
  else{ subtract_from_tracker() }
  return currentSlide

}

function painting_tracker_baseline(){
   return document.getElementsByClassName("slideshow").length += -1;

}

function add_to_tracker(){
  currentSlide += 1;
  return currentSlide
}

function subtract_from_tracker(){
  currentSlide += -1;
  return currentSlide
}






//   function minusSlides(){
//     n = slideIndex -1
//     showSlides(n);
//   }

//   function plusSlides() {
//     n = slideIndex + 1
//     showSlides(n);
//   }

//   function currentSlide(n) {
//     showSlides(slideIndex = n);
//   }

//   function showSlides(n) {
//     var i;
//     var slides = document.getElementsByClassName("mySlide");
//     debugger
//     if (n > slides.length) {slideIndex = 1} 
//     if (n < 1) {slideIndex = slides.length}
//     for (i = 0; i < slides.length; i++) {
//         slides[i].style.display = "none"; 
//     }
//     slides[slideIndex-1].style.display = "block"; 
//   }
// }
