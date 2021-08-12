<!DOCTYPE html>
<html>
    <head>
        <title></title>
         <meta http-equiv="refresh" content="3000">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
       <link rel="stylesheet" type="text/css" href="mobile.css">
            <link href="https://fonts.googleapis.com/css2?family=Atkinson+Hyperlegible&display=swap" rel="stylesheet">
    </head>
    
    <body>
    <div class="header">
    <img src="logo_college.png"/>
        <h1>
        P.D.P.M<br>Indian Institute of Information Technology,<br>Design and Manufacturing, Jabalpur</h1>
    </div>
<hr>
<div class="topnav" id="myTopnav">
  <a href="#" class="active">Home</a>
  <a href="#">News</a>
  <a href="#">Contact</a>
  <div class="dropdown">
    <button class="dropbtn">Dropdown 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
  </div> 
  <a href="#">Research</a>
  <a href="#">About</a>
  <a href="#about">About</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">
    <div class="bar1"/></div>
  <div class="bar2"/></div>
  <div class="bar3"/></div>
</a>
</div>

<span class="br"></span>

<div class="banner">

  </div>

<div class="thought_for_Day">

</div>

<div class="article">
<fieldset>
  <legend>Notice</legend>
  <div><h1>Hello</h1></div>
</fieldset>

<fieldset>
  <legend>Notice</legend>
  <div><h1>Hello</h1></div>
</fieldset>

<fieldset>
  <legend>Notice</legend>
  <div><h1>Hello</h1></div>
</fieldset>
</div>


    </body>
          <script type="text/javascript">
            function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.classList.toggle("change");
  x.style.background='#000000';
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}

        </script>
</html>