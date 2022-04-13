<div class="footer">
	<div class="footer-main">
    <div class="footer-heading">

      <div class="header-block">
        <img src="./logo_college.png" alt="header"/>
        <h3>IIITDM JABALPUR</h3>
      </div>

      <div class="footer-subheader">
        <p><strong style="font-family: 'Noto Sans';">BORN FOR INNOVATION</strong><br>
        <a  target="_blank" href="https://goo.gl/maps/RdkPC6HoLTkbdweNA">Airport Rd, PDPM IIITDM Jabalpur Campus, <br>Khamaria, Jabalpur, <br>Madhya Pradesh 482005</a>
        </p>
      </div>

      <div class="socials">
      <a href="https://twitter.com/iiitdmjbp"><img src="./icons/icons_twitter.png" alt="twitter" height="25 px"></a>
      <a href="https://www.facebook.com/iiitdm.jbp/"><img src="./icons/icons_facebook.png" alt="facebook" height="25 px"></a>
      <a href="https://www.youtube.com/channel/UCODKL--xMCqXIK31cRdOWOw"><img src="./icons/icons_youtube.png" alt="youtube" height="25 px"></a>
      <a href="https://www.instagram.com/iiitdm_jabalpur/"><img src="./icons/icons_instagram.png" alt="instagram" height="25 px"></a>
      </div>

    </div>


    <button type="button" class="collaps">KNOW MORE</button>
      <div class="content">
        <a href="#">IIIT ACT</a><br>
        <a href="#">Undergraduate</a><br>
        <a href="#">Postgraduate</a><br>
        <a href="#">Fees Structure</a><br>
        <a href="#">Seat Matrix</a><br>
        <a href="#">Academic Guidelines</a><br>
        <a href="#">Curriculum</a><br>
</div>

<button  type="button" onclick="function()" class="collaps">Important Links</button>
<div class="content">
        <a href="#">Academic Calendar</a><br>
        <a href="#">Useful Information</a><br>
        <a href="#">Refund Rule</a><br>
        <a href="#">Convocation</a><br>
        <a href="#">Important Forms</a><br>
        <a href="#">Internal Circulars</a><br>
        <a href="#">External Circulars</a><br>
</div>

<button type="button" class="collaps">OTHERS</button>
<div class="content">
        <a href="#">SC/ST and Minority Cell</a><br>
        <a href="#">Women Cell</a><br>
        <a href="#">Grievance Redressal Cell</a><br>
        <a href="#">Anti Ragging Squad</a><br>
        <a href="#">Seat Matrix</a><br>
        <a href="#">Tenders</a><br>
        <a href="./Jobs/">Career Opportunities</a><br>
</div>


<div class="footerSecondary">
  <button class="officals">For Officials
  </button>
    <div class="office">
      <a href="#">E-TENDER</a> |
      <a href="#">PLACEMENT</a>|
      <a href="#">RAJBHASA</a>|
      <a href="#">ORDINANCES</a>|
      <a href="#">QIP PROGRAMS</a>|
      <a href="#">TENDERS</a>|
      <a href="#">JOBS</a>|
      <a href="#">INTRAWEB</a>|
      <a href="#">IIITDMJ E-MAIL</a>|
      <a href="#">IIIT COUNCIL</a>
    </div>
    <div class="footerSecondary">
    <div class="Copyright">
      <center>
        Copyright © 2021 IIITDMJ | All rights reserved.
      </center>
    </div>
  </div>
</div>




<!-- Desktop, and larger screen -->
    <div class="footer-subgroup">
      <h4>KNOW MORE</h4>
      <div class = "footer-subgroup-links">
        <a href="#">IIIT ACT</a><br>
        <a href="#">Undergraduate</a><br>
        <a href="#">Postgraduate</a><br>
        <a href="#">Fees Structure</a><br>
        <a href="#">Seat Matrix</a><br>
        <a href="#">Academic Guidelines</a><br>
        <a href="#">Curriculum</a><br>
      </div>
    </div>

    <div class="footer-subgroup">
      <h4>IMPORTANT LINKS</h4>
      <div class = "footer-subgroup-links">
        <a href="#">Academic Calendar</a><br>
        <a href="#">Useful Information</a><br>
        <a href="#">Refund Rule</a><br>
        <a href="#">Convocation</a><br>
        <a href="#">Important Forms</a><br>
        <a href="#">Internal Circulars</a><br>
        <a href="#">External Circulars</a><br>
      </div>
    </div>

    <div class="footer-subgroup">
      <h4>OTHERS</h4>
      <div class = "footer-subgroup-links">
        <a href="#">SC/ST and Minority Cell</a><br>
        <a href="#">Women Cell</a><br>
        <a href="#">Grievance Redressal Cell</a><br>
        <a href="#">Anti Ragging Squad</a><br>
        <a href="#">Seat Matrix</a><br>
        <a href="#">Tenders</a><br>
        <a href="./Jobs/">Career Opportunities </a><br>
      </div>
    </div>
  </div>

  <div class="footer-secondary">
    <div class="footer-secondary-links">
      <a href="#">E-TENDER</a>
      <a href="#">PLACEMENT</a>
      <a href="#">RAJBHASA</a>
      <a href="#">ORDINANCES</a>
      <a href="#">QIP PROGRAMS</a>
      <a href="#">TENDERS</a>
      <a href="#">JOBS</a>
      <a href="#">INTRAWEB</a>
      <a href="#">IIITDMJ E-MAIL</a>
      <a href="#">IIIT COUNCIL</a>
    </div>
  </div>
  <div class="footer-secondary">
    <div class="Copyright">
      <center>
        Copyright © 2022 IIITDMJ | All rights reserved.
      </center>
    </div>
  </div>
</div>





<script>
  var coll = document.getElementsByClassName("collaps");

var i;

for (i = 0; i < coll.length; i++) 
{
  coll[i].addEventListener("click",function() 
  {
    this.classList.toggle("active2");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}

var secn = document.getElementsByClassName("officals");

var i;

for (i = 0; i < coll.length; i++) 
{
  secn[i].addEventListener("click",function() 
  {
    this.classList.toggle("active3");
    var office = this.nextElementSibling;
    if (office.style.display == "block") {
      office.style.display = "none";
    } else {
      office.style.display = "block";
    }
  });
}
</script>
