

function openTabs(evt, idNmane) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("introduction");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("button");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(idNmane).style.display = "block";
  evt.currentTarget.className += " active";
}
document.getElementById("defaultTabs").click();