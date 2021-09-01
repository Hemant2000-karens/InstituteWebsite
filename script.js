  function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.classList.toggle("change");
  x.style.background='#6c705c';
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}