  function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.classList.toggle("change");
  x.style.background='#212121';
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}