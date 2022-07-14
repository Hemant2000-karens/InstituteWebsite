let screenWidth = screen.width;
let reSlideIndex = 1;
var button = document.getElementsByClassName("card");
var nbar = document.getElementById("adminHeader");
var Hostelbutton = document.getElementsByClassName("hostel_card");
var collButton = document.getElementsByClassName("adminDetails");
var coll = document.getElementsByClassName("acdpB");
var sticky = nbar.offsetTop;
var i;


	window.onscroll = function()
	{
	  stickyFunction()
	};



	function openNews(evt, tabname) {
	  var i, tabcontent, tablinks;
	  tabcontent = document.getElementsByClassName("newsContent");
	  for (i = 0; i < tabcontent.length; i++) {
	    tabcontent[i].style.display = "none";
	  }
	  tablinks = document.getElementsByClassName("newsTab_button");
	  for (i = 0; i < tablinks.length; i++) {
	    tablinks[i].className = tablinks[i].className.replace(" active", "");
	  }
	  document.getElementById(tabname).style.display = "block";
	  evt.currentTarget.className += " active";
	}



	for (i = 0; i < coll.length; i++) {
	  coll[i].addEventListener("click", function() {
	    this.classList.toggle("show");
	    var content = this.nextElementSibling;
	    if (content.style.maxHeight){
	      content.style.maxHeight = null;
	    } else {
	      content.style.maxHeight = content.scrollHeight + "px";
	    } 
	  });
	}





	function stickyFunction() {
	  if (window.pageYOffset >= sticky) {
	    nbar.classList.add("sticky");
	  } else {
	    nbar.classList.remove("sticky");
	 	}
	}



	function changeCal(evt, calName) {
	  var i, tabcontent, tablinks;
	  tabcontent = document.getElementsByClassName("calTable");
	  for (i = 0; i < tabcontent.length; i++) {
	    tabcontent[i].style.display = "none";
	  }
	  tablinks = document.getElementsByClassName("calTab");
	  for (i = 0; i < tablinks.length; i++) {
	    tablinks[i].className = tablinks[i].className.replace(" active", "");
	  }
	  document.getElementById(calName).style.display = "block";
	  evt.currentTarget.className += " active";
	}




function changeFacultyBranch(evt, calName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("facultyList");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("calTab");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(calName).style.display = "block";
  evt.currentTarget.className += " active";
}



	for (i = 0; i < collButton.length; i++) {
	  collButton[i].addEventListener("click", function() {
	    this.classList.toggle("visibleldTab");
	    var content = this.nextElementSibling;
	    if (content.style.maxHeight){
	      content.style.maxHeight = null;
	    } else {
	      content.style.maxHeight = content.scrollHeight + "px";
	    } 
	  });
	}

	button.addEventListener("Click",linkOpen);
	function linkOpen(str)
	{
		switch(str)
		{
			case 'bod':
				window.open('https://www.google.com', '_blank');
				break;
			case 'adm':
				window.open('https://www.facebook.com', '_blank');
				break;
			case 'lad':
				window.open('https://www.instagram.com', '_blank');
				break;
			case 'ms':
				window.open('https://www.twitter.com', '_blank');
				break;
			case 'fc':
				window.open('https://www.linkedin.com', '_blank');
				break;
			case 'mv':
				window.open('https://www.oracle.com', '_blank');
				break;
		}

	}



	function openTab(evt, pageName) 
	{
  	var i, tabcontent, tablinks;
  		tabcontent = document.getElementsByClassName("bodyContent");
  	for (i = 0; i < tabcontent.length; i++) 
  	{
    	tabcontent[i].style.display = "none";
  	}
  		tablinks = document.getElementsByClassName("tablinks");
  	for (i = 0; i < tablinks.length; i++) 
  	{
    	tablinks[i].className = tablinks[i].className.replace(" active1", "");
  	}

  	document.getElementById(pageName).style.display = "block";
  	evt.currentTarget.className += " active1";
	}


	Hostelbutton.addEventListener("Click",hostelLink);
	function hostelLink(str) 
	{
		switch(str)
		{
			case 'hall1':
				window.open('https://www.iiitdmj.ac.in/hall1.iiitdmj.ac.in/', '_blank');
				break;
			case 'hall3':
				window.open('https://www.iiitdmj.ac.in/hall3.iiitdmj.ac.in/', '_blank');
				break;
			case 'hall4':
				window.open('https://www.instagram.com', '_blank');
				break;
			case 'pnn':
				window.open('https://www.twitter.com', '_blank');
				break;
			case 'ng':
				window.open('https://www.linkedin.com', '_blank');
				break;
			case 'ms':
				window.open('https://www.oracle.com', '_blank');
				break;
		}
		
	}


	function openssc(evt, calName) 
	{
	  var i, tabcontent, tablinks;
	  tabcontent = document.getElementsByClassName("social_media_posts_parents");
	  for (i = 0; i < tabcontent.length; i++) {
	    tabcontent[i].style.display = "none";
	  }
	  tablinks = document.getElementsByClassName("calTab");
	  for (i = 0; i < tablinks.length; i++) {
	    tablinks[i].className = tablinks[i].className.replace(" active", "");
	  }
	  document.getElementById(calName).style.display = "block";
	  evt.currentTarget.className += " active";
	}



	
	function moveRes(n) {
  		changeResSlide(reSlideIndex += n);
	}

	function viewMore() {
	  var dots = document.getElementById("dots");
	  var moreText = document.getElementById("more");
	  var btnText = document.getElementById("viewAllButton");

	  if (dots.style.display === "none") {
	    dots.style.display = "inline";
	    btnText.innerHTML = "Read more"; 
	    moreText.style.display = "none";
	  } else {
	    dots.style.display = "none";
	    btnText.innerHTML = "Read less"; 
	    moreText.style.display = "inline";
	  }
	}



	function changeResSlide(n) {
	  let i;
	  let slides = document.getElementsByClassName("resBodyParents");
	  if (n > slides.length) {reSlideIndex = 1}    
	  if (n < 1) {reSlideIndex = slides.length}
	  for (i = 0; i < slides.length; i++) {
	    slides[i].style.display = "none";  
	  }
	  slides[reSlideIndex-1].style.display = "block";
	}



	function viewMore()
	{
		window.open("./about.php","_self");
	}


	function ReadMore()
	{
		window.open("./about.php","_self");
	}
