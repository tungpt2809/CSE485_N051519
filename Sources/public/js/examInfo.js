// When the user scrolls the page, execute myFunction 
window.onscroll = function() {myFunction()};

// Get the navbar
var exam = document.querySelector('.exam-right');
// Get the offset position of the navbar
var sticky = exam.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset >= sticky) {
    exam.classList.add('sticky');
  } else {
    exam.classList.remove('sticky');
  }
}

var solutionBtn = document.querySelectorAll('.solution-btn span');
var solution = document.getElementsByClassName('solution');
console.log(solutionBtn);
console.log(solution);

for(var i = 0; i < solution.length; i++)(function(i){
  solutionBtn[i].onclick = function(){
    if(!solution[i].style.display || solution[i].style.display == 'none'){
      solutionBtn[i].innerHTML = 'Ẩn lời giải';
      solution[i].style.display = 'block';
    }
    else{
      solutionBtn[i].innerHTML = 'Xem lời giải';
      solution[i].style.display = 'none';
    }
  }
})(i);
