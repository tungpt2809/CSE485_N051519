// When the user scrolls the page, execute myFunction 
window.onscroll = function() {myFunction()};

// Get the navbar
var exam = document.querySelector(".exam-right");
// Get the offset position of the navbar
var sticky = exam.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset >= sticky) {
    exam.classList.add("sticky");
  } else {
    exam.classList.remove("sticky");
  }
}