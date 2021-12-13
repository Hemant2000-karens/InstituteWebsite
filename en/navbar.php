<div class="topnav" id="myTopnav">
  <a href="index.php" class="active">Home</a>
  <a href="Department.php">Department</a>
  <a href="Acd.php">Academics</a>
  <a href="Dean.php">Dean</a>


  <div class="dropdown">
    <button class="dropbtn">Office Bearers 
    </button>
    <div class="dropdown-content">
      <a href="#">Faculties</a>
      <a href="#">Research Staff</a>
      <a href="#">Office Staff</a>
      <a href="#">Other Staff</a>
    </div>
  </div> 

  <div class="dropdown">
    <button class="dropbtn">Dropdown 
    </button>
    <div class="dropdown-content">
      <a href="#">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
  </div> 

<div class="dropdown">
    <button class="dropbtn">Dropdown 
    </button>
    <div class="dropdown-content">
      
      <!-- Mega Menu -->
      <div class="meganews">
        <h2>Mega Menu</h2>
      </div>   
      <div class="row">
        <div class="column">
          <h3>Category 1</h3>
          <a href="#">Link 1</a>
          <a href="#">Link 2</a>
          <a href="#">Link 3</a>
        </div>
        <div class="column">
          <h3>Category 2</h3>
          <a href="#">Link 1</a>
          <a href="#">Link 2</a>
          <a href="#">Link 3</a>
        </div>
        <div class="column">
          <h3>Category 3</h3>
          <a href="#">Link 1</a>
          <a href="#">Link 2</a>
          <a href="#">Link 3</a>
        </div>
      </div>

      <!-- Mega Menu Ends -->

    </div>
  </div> 


  <div class="dropdown">
    <button class="dropbtn">About Us 
    </button>
    <div class="dropdown-content">
      <a href="#">About Institute</a>
      <a href="#">Board of Directors</a>
      <a href="#">Administrations</a>
      <a href="#">Local Administration</a>
      <a href="#">Building Works Committee</a>
    </div>
  </div> 

  <a href="javascript:void(0);" style="font-size:18px; color: #f2f2f2" class="icon" onclick="myFunction()">&#9778;</a>
</div>

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className == "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}


</script>

      