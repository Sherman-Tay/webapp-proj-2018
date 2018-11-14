var slideIndex = 1;
showDivs(slideIndex);
var interval= setInterval(function(){plusDivs(1);},2000);
function plusDivs(n) {
  showDivs(slideIndex += n);
}
function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("movie-slides");
  if (n > x.length) {
    slideIndex = 1;
  }
  if (n < 1) {
    slideIndex = x.length;
  }
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  x[slideIndex-1].style.display = "block";
}
