<!DOCTYPE html>
<html>

<head>
    <title>Curriculum | IIITDMJ</title>
    <?php include './header.php';?>
</head>

<body>

<?php include './navbar.php';?>

    <header class="masthead" style="background-image: url('assets/img/word-engineer-banner_66675-160.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto position-relative">
                    <div class="site-heading">
                        <h1>Curriculum</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <div class="container">

        <div class="row">
            <div class="col-md-10 col-lg-8 mx-auto">
                <div class="curriculum">



                <button class="curriculumCollaps" 
                ><h3>Undergraduate Curriculum</h3></button>

                    <div class="ugcr" id="undergrad">

                        <br>

                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#">2020</a></li>
                        <li><a href="#">2021</a></li>
                        <li><a href="#">2022</a></li>
                    </ul>

                    <br>

                <div class="semNav">

                   <button onclick="changeCal(event,'odd')" id = "defaultOpen"
                   class="curriculumButton">Odd Sem</button>
                    <button onclick="changeCal(event,'even')" class="curriculumButton">Even Sem</button>

                </div>

                <div class="curriculumTable">
                    
                    <div class="tableContainer" id="odd">


                        <?php include './curSem1.php';?>
                        <br/>

                        <?php include './curSem3.php';?>
                        <br/>

                        <?php include './curSem5.php';?>
                        <br/>
                        
                        <?php include './curSem7.php';?>
                        <br/>


                    </div>


                    <div class="tableContainer" id="even">


                        <?php include './curSem2.php';?>
                        <br/>

                        <?php include './curSem4.php';?>
                        <br/>

                        <?php include './curSem6.php';?>
                        <br/>
                        
                        <?php include './curSem8.php';?>
                        <br/>


                    </div>


                </div>


                </div>

            </div>

                












                <div class="curriculum">
                   
                    <button class="curriculumCollaps" 
                ><h3>Postgraduate Curriculum</h3></button>

                    <div class="ugcr" id="undergrad">

                        <br>

                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#">Menu 1</a></li>
                        <li><a href="#">Menu 2</a></li>
                    </ul>

                    <br>

                <div class="semNav">

                    <button class="curriculumButton" data-toggle="collapse">Even Sem</button>

                </div>

                <div class="curriculumTable">
                    
                    <div class="tableContainer" id="odd">


                        <?php include './curSem1.php';?>
                        <br/>

                        <?php include './curSem3.php';?>
                        <br/>

                        <?php include './curSem5.php';?>
                        <br/>
                        
                        <?php include './curSem7.php';?>
                        <br/>


                    </div>


                    <div class="tableContainer" id="even">


                        <?php include './curSem2.php';?>
                        <br/>

                        <?php include './curSem4.php';?>
                        <br/>

                        <?php include './curSem6.php';?>
                        <br/>
                        
                        <?php include './curSem8.php';?>
                        <br/>


                    </div>


                </div>


                </div>


                </div>
                <div class="curriculum">
                     <button class="curriculumCollaps" 
                ><h3>Ph.D Curriculum</h3></button>

                    <div class="ugcr" id="undergrad">

                        <br>

                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#">Menu 1</a></li>
                        <li><a href="#">Menu 2</a></li>
                    </ul>

                    <br>

                <div class="semNav">

                    <button class="curriculumButton" data-toggle="collapse">Even Sem</button>

                </div>

                <div class="curriculumTable">
                    
                    <div class="tableContainer" id="odd">


                        <?php include './curSem1.php';?>
                        <br/>

                        <?php include './curSem3.php';?>
                        <br/>

                        <?php include './curSem5.php';?>
                        <br/>
                        
                        <?php include './curSem7.php';?>
                        <br/>


                    </div>


                    <div class="tableContainer" id="even">


                        <?php include './curSem2.php';?>
                        <br/>

                        <?php include './curSem4.php';?>
                        <br/>

                        <?php include './curSem6.php';?>
                        <br/>
                        
                        <?php include './curSem8.php';?>
                        <br/>


                    </div>


                </div>


                </div>



                </div>


            </div>

            <div class="col">
                <div>
                    <fieldset>
                        <legend class="fs-6 text-center">Reference</legend>

                        <div class="d-flex d-md-flex justify-content-around align-items-md-center" style="margin: 0;padding: 0;text-align: center;">
                            <div style="width: 10px;height: 12px;background: var(--bs-red);"></div><span class="text-center" style="font-size: 7px;">-</span>
                            <h6 class="d-md-flex" style="font-size: 9px;">common to all</h6>
                        </div>
                    </fieldset>
                </div>
            </div>
        </div>
    </div>


























    <footer style="background: var(--bs-gray-700);">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto">
                    <ul class="list-inline text-center">
                        <li class="list-inline-item"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-twitter fa-stack-1x fa-inverse"></i></span></li>
                        <li class="list-inline-item"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-facebook fa-stack-1x fa-inverse"></i></span></li>
                        <li class="list-inline-item"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-github fa-stack-1x fa-inverse"></i></span></li>
                    </ul>
                    <p class="text-muted copyright">Copyright&nbsp;©&nbsp;Brand 2022</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/clean-blog.js"></script>
    <script type="text/javascript">
        var coll = document.getElementsByClassName("curriculumCollaps");
        var i;

    for (i = 0; i < coll.length; i++) {
      coll[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var content = this.nextElementSibling;
        if (content.style.maxHeight){
          content.style.maxHeight = null;
        } else {
          content.style.maxHeight = 'max-content';
        } 
      });
    }




    function changeCal(evt, calName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tableContainer");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("curriculumButton");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(calName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
    </script>
</body>

</html>