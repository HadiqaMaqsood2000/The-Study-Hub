
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<!-- ////////////////////////////////////////////////////////////////////////////////////////////////// -->

<head>

  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <link href="styles/newstyle.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  <link rel="stylesheet" href="/w3css/3/w3.css">

  <title> The Study Hub  </title>
            
            <!-- /////////////////////////////////////////////////////////////// -->

  <style type="text/css">
    
    #nav a:hover {
          background-color: black;
           }

    .navbar a {
          float: left; /* Make sure that the links stay side-by-side */
          display: block;  /*Change the display to block, for responsive reasons (see below)*/ 
          text-align: center;  /*Center the text*/ 
          padding: 30px 20px;  /*Add some padding*/ 
          text-decoration: none;  /*Remove underline */ }    

    .carousel-inner img {
          width: 100%; /* Set width to 100% */
          margin: auto;
        }

    footer .glyphicon {
          font-size: 20px;
          margin-bottom: 20px;
          color: #f4511e;      }

    .panel-footer {
          background-color: white !important;  }

    #footertext{
          font-size: 12pt;    }
       
    .btn-danger{
          border-radius: 8px;
          padding: 30px 118px;
          font-size: 30px;   }

    .btn-warning{
          border-radius: 8px;
          padding: 30px 100px;
          font-size: 30px;   }

    
  </style>

</head>

<!-- ////////////////////////////////////////////////////////////////////////////////////////////// -->
<body>
  
<div class="text-center">
    <img class="img-circle mx-auto d-block" src="icon5.jpg" align="center" style="height:20%; width:10%;">
    
</div>
<!-- ////////////////////////////////////////////////////////////////////////////////////////// -->
<!-- Navigation Container -->
<div class="container-fluid">
  <div class="row">

    <nav class="nav navbar-inverse"  style="background-color: #FF6600">

          <div class="navbar-header active" >     <!-- active page -->
          <a href="#" class="navbar-brand" style="font-family:Georgia; font-size: 25pt; color:white; font-style:bold; background-color: red;"> Search By </a> 
              
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> 
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
          </button> 
          </div>
          
          <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right" id="nav">
              <li><a href="http://localhost/AboutUs2.php" style="color: white;  font-family: serif; 
                   font-size: 16pt">ABOUT US</a></li>
              <li><a href="http://localhost/Contact2.php" style="color: white;  font-family: serif;
                   font-size: 16pt">CONTACT</a></li>
              <li><a href="http://localhost/Website.php" style="color: white;  font-family: serif;
                   font-size: 16pt">LOGOUT</a></li>
          </ul> 
          </div>
    </nav>
  </div>    <!-- row ends here -->
</div>    <!-- container div end -->
<br>
<!-- /////////////////////////////////////////////////////////////////////////////////////////// -->
<!-- Carousel Container -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="slideimage.jpg" alt="STUDYHUB" width="1200" height="700">
      </div>

      <div class="item">
        <img src="slideimage5.jpg" alt="STUDYHUB" width="1200" height="700">
      </div>
    
      <div class="item">
        <img src="slideimage3.jpg" alt="STUDYHUB" width="1200" height="700">
      </div>

      <div class="item">
        <img src="slideimage6.jpg" alt="STUDYHUB" width="1200" height="700">
      </div>

      <div class="item">
        <img src="slideimage7.jpg" alt="STUDYHUB" width="1200" height="700">
      </div>      
    </div>     <!--    inner carousel div ends here -->

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
<br> <br>

<!-- ///////////////////////////////////////////////////////////////////////////////////////// -->
<!-- Button Container -->
<div class="container text-center">
    <a href="http://localhost/SearchBySubject.php" class="btn btn-warning btn-lg " role="button"><span class="glyphicon glyphicon-search"></span>&nbsp; Search By Subject</a>
    <br> <br>
    <a href="http://localhost/SearchByYear.php" class="btn btn-danger btn-lg" role="button"><span class="glyphicon glyphicon-search"></span>&nbsp; Search By Year</a>
</div>
<br> <br>

<!-- ///////////////////////////////////////////////////////////////////////////////////////// -->
<!-- Container (Footer Section) -->
<div class=" text-center container-fluid" style="background-color:#FF7043 ;">
  <h2 class="text-center" style="color: #4A235A; font-family:Palatino; font-size:26pt;"><strong> 
                THE STUDY HUB </strong></h2>   <!-- #FF7043 -->
  <div class="row" id="footertext">
    
      <p><span class="glyphicon glyphicon-map-marker"></span> MUET, Jamshoro</p>
      <p><span class="glyphicon glyphicon-phone"></span> +92 3113288688</p>
      <p><span class="glyphicon glyphicon-envelope"></span> hadiqamaqsood2000@gmail.com</p>
        
  </div>        <!--  outer row ends here -->
</div>      <!-- container div ends here -->


<!-- ////////////////////////////////////////////////////////////////////////// -->
</body>
</html>
