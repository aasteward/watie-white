window.onload = function(){
ready_next_button;
ready_prev_button;
display_on_load;


}

function painting_tracker_baseline(){
 return document.getElementsByClassName("slideshow").length
}

function display_on_load(){
document.getElementsByClassName("slideshow")[0].style.display = "block";   
}

function ready_next_button(){
 document.getElementsByClassName("next")[0].addEventListener("click", plusSlides);  
}

function ready_prev_button(){
 document.getElementsByClassName("prev")[0].addEventListener("click", minusSlides);
}

function plusSlides(numberTracker){
document.getElementsByClassName(slideshow)[numberTracker].class.display = "none";
document.getElementsByClassName(slideshow)[numberTracker +=1].class.display= "block";
add_to_tracker
}

function minusSlides(numberTracker){
document.getElementsByClassName(slideshow)[numberTracker].class.display = "none";
document.getElementsByClassName(slideshow)[numberTracker +=-1].class.display = "block";
subtract_from_tracker
}

function add_to_tracker(numberTracker){
  numberTracker +=1;
}

function subtract_from_tracker(numberTracker){
  numberTracker += -1;
}

//   var slideIndex = document.getElementsByClassName("echo_num")[0].innerHTML; 
//   debugger
//   showSlides(slideIndex);


//   prime();

//   function prime(){
//   document.getElementsByClassName("prev")[0].addEventListener("click", minusSlides);
//    document.getElementsByClassName("next")[0].addEventListener("click", plusSlides);
//   }

  









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
