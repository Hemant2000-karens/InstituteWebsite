<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Gallery | IIITDMJ</title>
 	<link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" type="text/css" href="./mobile.css">
</head>
<?php include './topheader.php'?>
<div class="container">
	<body>
		<?php include './Header.php';?>
		<?php include "./navbar.php" ?>
		<span class="br"></span>

	<div class="photo">

		<div class="wrapper">
      <input type="radio" name="select" id="option-1" checked="">
      <input type="radio" name="select" id="option-2">
      <input type="radio" name="select" id="option-3">
      <input type="radio" name="select" id="option-4">
      <input type="radio" name="select" id="option-5">
      <label for="option-1" class="option option-1">
        <div class="dot"></div>
        <span>All Search</span>
      </label>
      <label for="option-2" class="option option-2">
        <div class="dot"></div>
        <span>Album</span>
      </label>
      <label for="option-3" class="option option-3">
        <div class="dot"></div>
        <span>Year</span>
      </label>
      <label for="option-4" class="option option-4">
        <div class="dot"></div>
        <span>Date</span>
      </label>
      <label for="option-5" class="option option-5">
        <div class="dot"></div>
        <span>Description</span>
      </label>
		
    </div>
    <input type ="" className="searchText" />
	</div>
	</body>
</div>


<script>
	if(document.getElementById('option-1').checked == true)
	{
		document.getElementsByClassName('searchText').type = 'text';
	}
	else if(document.getElementById('option-2').checked == true)
	{
		document.getElementsByClassName('searchText').type = 'text';
	}
	else if(document.getElementById('option-3').checked == true)
	{
		document.getElementsByClassName('searchText').type = 'year';
	}
	else if(document.getElementById('option-4').checked == true)
	{
		document.getElementsByClassName('searchText').type = 'date';
	}
	else if(document.getElementById('option-5').checked == true)
	{
		document.getElementsByClassName('searchText').type = 'text';
	}
</script>
<?php include './footer.php'?>
</html>