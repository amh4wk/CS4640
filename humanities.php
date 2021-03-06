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
          <h1>Humanities</h1>
        </div>
      </div>

    </div> 
  </div> 

  <div class="container-fluid text-center">
    <div class="row content">
      <div class="col-sm-2">

      </div>
      <div class="col-sm-8 text-left" style="background-color: white; padding-top: 20px; padding-bottom: 20px">
        <form action= http://localhost:4200 >
          <input type="submit" value="Write your own review">
        </form>

        <table cellpadding="10" style="width:100%; border: 1px solid black;">
          <tr style="border: 1px solid black">
            <th><h3>EAST 1010: East Asian Canons and Cultures<br></h3>Took the class to fulfill a requirement, and overall it was okay. Not my favorite class as someone interested in science, but Professor Chen is really nice and cool. You have 4 exams that are comprised of four examples of identifying and analyzing a text, so really not that hard if you study before and make sure you know the material. There are also a lot of opportunities for extra credit by going to the East Asia Center lectures, which makes this an easier A. There is a textbook you need to have access to the texts for the exams, but you don't have to read the texts before coming to class, as Prof. Chen will go over them. I would go to every class just to hear/write down his analysis of each text, but that's not necessary depending on the person. I'd recommend this class as an easy way to fulfill a requirement/if you're interested in East Asian cultures/literature.<br><br></th>
          </tr>

          <tr style="border: 1px solid black">
            <th><h3>DANC 1400: The Art of Dance</h3><br>The class is structured in an extremely organized fashion. You will be exposed to readings and videos that journey the development of dance throughout the years. You will also think about art in ways in which you never have before! You have 2 3-4 page papers, 1 choreographer presentation and paper, attendance/participation grading, and a final exam worth 20% of your grade.<br><br></th>
          </tr>

        </table>
      </div>

      <div class="col-sm-2">

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