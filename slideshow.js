
window.currentSlide = 0;
window.addEventListener("load", function(){
  window.getSlideshow = document.getElementsByClassName("slideshow");
  window.getInfo = document.getElementsByClassName("slideshow_info_display");
  display_on_load();  
  ready_buttons();

document.getElementsByClassName("grid")[0].addEventListener( 'layoutComplete',
  function( event, laidOutItems ) {
    console.log( 'Masonry layout completed on ' +
      laidOutItems.length + ' items' );
  }
);
});
function display_on_load(){
  getSlideshow[0].style.display = "block";
  getInfo[0].style.display ="block";    
}


function ready_buttons(){
  document.getElementsByClassName("next")[0].addEventListener("click", move_slides);  
  document.getElementsByClassName("prev")[0].addEventListener("click", move_slides);
  document.getElementsByClassName("gallery")[0].addEventListener("click", switch_display)
}

function move_slides(event){
  getSlideshow[currentSlide].style.display = "none";
  getInfo[currentSlide].style.display = "none";
  if (event.target.dataset.direction == "next") {direction = next_slide_index()}
  else if (event.target.dataset.direction == "prev"){direction = prev_slide_index()}
  getSlideshow[direction].style.display= "block";
  getInfo[currentSlide].style.display = "block";
  
}

function switch_display(){
  if (getSlideshow.length == 0){
    show_slideshow()
  } 
  else{
   show_gallery()
  }
}

function show_slideshow(){
  var gallery_item = document.getElementsByClassName("grid-item")
    for (var i=0; i<gallery_item.length;){
      if (gallery_item[0].className == "grid-item grid-item--width3"){
       gallery_item[0].className = "slideshow mural";
      }
      else{
        gallery_item[0].className="slideshow";
      }
    }
}

function show_gallery(){
  for (var i=0; i<getSlideshow.length;){
    if (getSlideshow[0].className == "slideshow mural"){
      getSlideshow[0].className = "grid-item grid-item--width3";
    }
    else{ 
      getSlideshow[0].className = "grid-item";
    }
  }
  for (var i =0; i<getInfo.length; i++){
    getInfo[i].style.display = "none"
  }
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

// get getSlideshow
// for each slideshow[i]
//   if i == 1 puts grid slector 
//   else if size == small, size = gridsmall
//   else if size == mediu, size = gridmedium
//   else if size == big, size = gridbig