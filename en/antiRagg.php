<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="icon" type="jpg/png" href="./logo_college.png" sizes="16x16">
	<title>Anti-Ragging | IIITDMJ</title>
		<meta http-equiv="refresh" content="3000">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./style.css">
       <link rel="stylesheet" type="text/css" href="./mobile.css">
</head>

	    <?php include './topheader.php';?>
	   	<div class="container">
	    	<body>
	    		<?php include './Header.php';?>

				<?php include "./navbar.php";?>

				<span class="br"></span>
	
				<div class="aboutHeader" id="adminHeader">
					<h2>Anti Ragging Commitee</h2>
				</div>

				<div class="AcMain">

					<div class="calTable">
						<table>
								 <caption>Emergency contact details:</caption>
								  <tr>
    								<th>Name</th>
    								<th>Designation</th>
    								<th>Contact Number</th>
  								</tr>

  								<tr>
  									<td>Dr. Tanuja Sheroy</td>
  									<td>Dean(Student)</td>
  									<td><a href="tel:+917612794412">+91761-2794412</a></td>
  								</tr>

  								<tr>
  									<td>Dr. Tanuja Sheroy</td>
  									<td>Dean(Student)</td>
  									<td><a href="tel:+917612794412">+91761-2794412</a></td>
  								</tr>

  								<tr>
  									<td>Dr. Tanuja Sheroy</td>
  									<td>Dean(Student)</td>
  									<td><a href="tel:+917612794412">+91761-2794412</a></td>
  								</tr>


  								<tr>
  									<td>Dr. Tanuja Sheroy</td>
  									<td>Dean(Student)</td>
  									<td><a href="tel:+917612794412">+91761-2794412</a></td>
  								</tr>

  					</table> 
  				</div>

  				<div class="pointsNoted">
  					<h1>Some points to remember about ragging</h1>
  				
  					<ul class="Anti-Ragging-ol">
  						
  						<li><b>Ragging is an act of aggression</b> committed by an individual or a group of individuals over another individual or a group of individuals where the first group, by virtue of their being senior to the second group, somehow get the authority and audacity to commit the act and the second group, by virtue of their being new to the institution are automatic victims. Any interaction which is aggressive and asymmetric (not on equal footing) is ragging.
  						</li>


    					<li><b>Ragging is not harmless fun.</b> In an institution like IIITDM, students come from diverse social and cultural backgrounds, and what may be harmless fun for some may turn out be serious indignity for some others. There are always a few cases where some freshers and ragging (or interaction) intolerable and suffer loss of self esteem. Nation-wide there have been more than 25 ragging deaths and suicides since 1998. It is often the case that seniors, being young students themselves, do not realize where to draw the line and when to back off – the risk is simply not worth it.
    					</li>


    					<li>
    						<b>Ragging does not increase smartness of make a fresher bold.</b> Quite to the contrary it forces an individual to accept subjugation and conform; perhaps even rationalize it later (with the drinks and samosas at the end of the interaction period). This loss of individuality suppresses talent and reduces self-worth. In turn, the forced homogeneity precludes free flow of new ideas, creativity and the spirit of enquiry. Also, the attempt of the seniors to break the self esteem of a newcomer and revel in their shame and fear engenders feelings of bitterness and revengefulness, which is often taken out on juniors next year.
    					</li>


  					</ul>



  					<h3 style="font-family: 'Ubuntu',sans-serif;">For any ragging related issues at IIITDMJ, please email <a href="mailto:arc@iiitdmj.ac.in" style="text-decoration:none; color: #028093;">arc@iiitdmj.ac.in</a>.




  				</div>

				</div>
			</body>
		</div>

<?php include './footer.php'?>
<script>

	window.onscroll = function()
{
  stickyFunction()
};


var nbar = document.getElementById("adminHeader");
var sticky = nbar.offsetTop;
function stickyFunction() {
  if (window.pageYOffset >= sticky) {
    nbar.classList.add("sticky");
  } else {
    nbar.classList.remove("sticky");
 		}
	}

var coll = document.getElementsByClassName("acdpB");
var i;

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
</script>
</html>