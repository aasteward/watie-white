window.currentSlide = 0;
window.addEventListener("load", function(){
  window.getSlideshow = document.getElementsByClassName("slideshow");
  window.getInfo = document.getElementsByClassName("slideshow_info_display");
  display_on_load();  
  ready_buttons();
});
function display_on_load(){
  getSlideshow[0].style.display = "block";
  getInfo[0].style.display ="block";    
}


function ready_buttons(){
  document.getElementsByClassName("next")[0].addEventListener("click", move_slides);  
  document.getElementsByClassName("prev")[0].addEventListener("click", move_slides);
}

function move_slides(event){
  getSlideshow[currentSlide].style.display = "none";
  getInfo[currentSlide].style.display = "none";
  if (event.target.dataset.direction == "next") {direction = next_slide_index()}
  else if (event.target.dataset.direction == "prev"){direction = prev_slide_index()}
  getSlideshow[direction].style.display= "block";
  getInfo[currentSlide].style.display = "block";
  
}

function next_slide_index(){
  var slide_check = currentSlide
  slide_check += 1
  if (slide_check > current_painting()){ currentSlide = 0 }
  else{ add_to_tracker() }
  return currentSlide
}

function prev_slide_index(){
  var slide_check =currentSlide
  slide_check += -1
  if ( slide_check < 0){ currentSlide = current_painting(); }
  else{ subtract_from_tracker() }
  return currentSlide

}

function current_painting(){
   return getSlideshow.length -1;

}

function add_to_tracker(){
  currentSlide += 1;
  return currentSlide
}

function subtract_from_tracker(){
  currentSlide -= 1;
  return currentSlide
}
