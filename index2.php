<!-- Ashley Hoang and Jessica Phan -->
<!-- Recommended classes page -->
<!DOCTYPE>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">  <!-- required to handle IE -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" /> 
    <link href='https://fonts.googleapis.com/css?family=Arvo' rel='stylesheet'>
    <title>Schedule4Me</title>


  <style>
    .dept{
      margin-left:100px;
    }
    .school-title{
      margin-top: 15px;
    }
    .text{
      text-align: center;
    }
    .col-centered{
      float:none;
      margin: 0 auto;
    }
    body{
      font-family: 'Arvo';
      background-color:#E8E8E8;
    }
    h1{
      color:#E8E8E8;
    }
  </style>

</head>


<body>
  <nav class="navbar navbar-expand-md navbar-dark" style="background-color: #61C2A2">
        <a class="navbar-brand" href="#">Schedule4Me</a>
        <!-- Hamburger collapsible -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">   
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#">Account</a>
            </li>                                     
            <li class="nav-item"> 
              <a class="nav-link" href="index3.php">MySchedule</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Recommended</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php">Log Out</a>
            </li>
            
          </ul>
        </div>  
  </nav>
<!--
      <div class = "jumbotron">
        <div class ="container">
          <h1>Recommended Classes at UVA</h1>
          <p>These are the top rated classes reviewed by students at your university</p>
        </div>
      </div>
-->

  <div class="jumbotron" style="height:20%; background-color: #404040;">
    <div class="slideshow-container">
      <div class="mySlides" style="width:100%">

        <div class="text">
          <h1>Recommended Classes at UVa</h1>
        </div>
      </div>

      <div class="mySlides" style="width:100%; ">

        <div class="text" style="color:#E8E8E8">
          <h3>These are the top rated classes reviewed by students in your school</h3>
        </div>
      </div>
    </div> 
  </div> 

  <div class="dept">
    <div class="school-title">
      <h3>College of Arts & Sciences</h3>
    </div>
    <div class="row">
      <div class="col-sm-4">
        <div class="require">
          <a class="link" href="#">Social Sciences</a>
        </div>
        <div class="require">
          <a class="link" href="#">Humanities</a>
        </div>
        <div class="require">
          <a class="link" href="#">Historical Studies</a>
        </div>
        
      </div>

      <div class="col-sm-4">
        <div class="require">
          <a class="link" href="#">Non-Western Perspectives</a>
        </div>
        <div class="require">
          <a class="link" href="#">Natural Science and Mathematics</a>
        </div>
        <div class="require">
          <a class="link" href="#">First Writing Requirement</a>
        </div>
      </div>

      <div class="col-sm-4">
    
        <div class="require">
          <a class="link" href="#">Second Writing Requirement</a>
        </div>
        <div class="require">
          <a class="link" href="#">Foreign Language Requirement</a>
        </div>
      </div>
    </div>
  </div>


  <div class="dept">
    <div class="school-title" style="padding-top: 20px;">
      <h3>Engineering</h3>
    </div>
    <div class="row">
      <div class="col-sm-4">
        <div class="require">
          <a class="link" href="#">APMA 1090-1110-2120</a>
        </div>
        <div class="require">
          <a class="link" href="#">Calculus I and II</a>
        </div>
        <div class="require">
          <a class="link" href="#">Gen Chem & Lab</a>
        </div>
        
        
      </div>
      <div class="col-sm-4">
        <div class="require">
          <a class="link" href="#">Gen Physics</a>
        </div>
        <div class="require">
          <a class="link" href="#">Humanities and Social Science Elective</a>
        </div>
        
      </div>

      <div class="col-sm-4">
        <div class="require">
          <a class="link" href="#">Intro to Programming</a>
        </div>
        <div class="require">
          <a class="link" href="#">Math and Science Elective I</a>
        </div>
      </div>
    </div>
  </div>

  <div class="dept">
    <div class="school-title" style="padding-top: 20px;">
      <h3>School of Architecture</h3>
    </div>

    <div class="row">
      <div class="col-sm-4">
        <div class="require">
          <a class="link" href="#">General Education Elective</a>
        </div>
        <div class="require">
          <a class="link" href="#">Humanities Elective</a>
        </div>
      </div>

      <div class="col-sm-4">
        <div class="require">
          <a class="link" href="#">Math/Natural Science Elective</a>
        </div>
        <div class="require">
          <a class="link" href="#">Social/Behavioral Science Elective</a>
        </div>
      </div>
    </div>
  </div>

<script>
  var slideIndex=0;
  
  var showSlides = function(){
    var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i=0; i<slides.length; i++){
      slides[i].style.display = "none";
    }
    slideIndex++;
    if(slideIndex > slides.length){
      slideIndex = 1;
    }
    slides[slideIndex-1].style.display="block";
    setTimeout(showSlides, 5000);
  }
  showSlides();
</script>


</body>


</html>