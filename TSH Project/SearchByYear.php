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

  <title> Search By Year </title>
            
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

    footer .glyphicon {
          font-size: 20px;
          margin-bottom: 20px;
          color: #f4511e;      }

    .panel-footer {
          background-color: white !important;  }

    #footertext{
          font-size: 12pt;    }
       
    #id1{
          background-color: #DCEDC8;
           }
    #id2{
          background-color: #FFE0B2;
          /*padding-bottom: 120px;*/  }

    #id3{
          background-color: #BBDEFB;  }

    #id4{
          background-color: #D1C4E9;  }

    #btn{
          background-color: #4DB6AC;
          font-size: 10px;
          font-size: 20px;
          border-radius: 40px;     }

    .center {
          display: block;
          margin-left: auto;
          margin-right: auto;   }

    .border{
          border:3px solid orange;   }

    .line{
          border: 1px solid #4DB6AC;    }

  </style>
</head>

<!-- ///////////////////////////////////////////////////////////////////////////////////////////// -->
<body>
  
<div class="text-center">
    <img class="img-circle mx-auto d-block" src="icon5.jpg" align="center" style="height:20%; width:10%;">
</div>
<!-- ///////////////////////////////////////////////////////////////////////////////////////////// -->

<div class="container-fluid">
  <div class="row">

    <nav class="nav navbar-inverse"  style="background-color: #FF6600">

          <div class="navbar-header active" >     <!-- active page -->
          <a href="#" class="navbar-brand" style="font-family:Georgia; font-size: 25pt; color:white; font-style:bold; background-color: red;"> Search By Year </a> 
              
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> 
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
          </button> 
          </div>
          
          <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right" id="nav">
              <li><a href="http://localhost/SearchBySubject.php" style="color: white;  font-family: serif; font-size: 16pt">SEARCH BY SUBJECT</a></li>
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
<!-- ///////////////////////////////////////////////////////////////////////////////////////// -->

<div class="container-text-center">
  <div class="row">

    <div class ="col-lg-2 col-md-2 col-sm-2 col-xs-2">  </div>
 
    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 text-center border"  id="id1">
          <h1 style="font-size:2vw;">BEGINNER</h1>
          <hr class="line">

          <a href="http://localhost/FirstYear.php"><img src="firstyear.jpeg" class="img-responsive center"></a>

          <div class="caption">
          <hr class="line">
          <h4 style="font-weight: bold; font-size:2vw;">1st year </h4>

          <p style="font-size: 2vw; font-family: cursive;">“Be willing to be a beginner every single morning.” <br>― Meister Eckhart</p>

          <div class=" button text-center">
          <a href="http://localhost/FirstYear.php"><button type="submit" class="btn btn-default btn-lg" id="btn">GOTO</button></a> 

          </div>   <!-- button div ends here -->
          </div>   <!-- caption div ends here -->
    </div>   <!-- col-2 div ends here -->


    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 text-center border" id="id2">
          <h1 style="font-size:2vw;"> NOVICE</h1>
          <hr class="line">  

          <a href="http://localhost/SecondYear.php"><img src="secondyear.jpeg" class="img-responsive center"></a>

          <div class="caption">
          <hr class="line">
          <h4 style="font-weight: bold;font-size:2vw; ">2nd Year</h4>

          <p style="font-size:2vw; font-family: cursive;">The past cannot be changed. The future is yet in your power.<br>-Unknown</p>

          <div class=" button text-center">
          <a href="http://localhost/SecondYear.php"><button type="submit" class="btn btn-default btn-lg" id="btn">GOTO</button></a> 

          </div>   <!-- button div ends here -->
          </div>   <!-- caption div ends here -->
    </div>  <!-- col-2 div ends here -->

 
    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 text-center border" id="id3" >
          <h1 style="font-size:2vw;">ADVANCED</h1>
          <hr class="line">  

          <a href="http://localhost/ThirdYear.php"><img src="thirdyear.jpeg" class="img-responsive center"></a>

          <div class="caption">
          <hr class="line">
          <h4 style="font-weight: bold;font-size:2vw; ">3rd Year</h4>

          <p style="font-size:2vw; font-family: cursive;">What you do today can improve all your tomorrows. <br> -Ralph Marston</p>

          <div class=" button text-center"> 
          <a href="http://localhost/ThirdYear.php"><button type="submit" class="btn btn-default btn-lg" id="btn">GOTO</button></a> 

          </div>   <!-- button div ends here -->
          </div>   <!-- caption div ends here -->
    </div>   <!-- col-2 div ends here -->

    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 text-center border" id="id4">
          <h1 style="font-size:2vw;">SUPERIOR</h1>
          <hr class="line">  

          <a href="http://localhost/FourthYear.php"><img src="fourthyear.jpeg" class="center img-responsive"></a>

          <div class="caption">
          <hr class="line">
          <h4 style="font-weight: bold;font-size:2vw; ">4th Year</h4>

          <p style="font-size:2vw; font-family: cursive;">Some people dream of success while others wake up & work."<br>-Unknown</p>

          <div class=" button text-center">
          <a href="http://localhost/FourthYear.php"><button type="submit" class="btn btn-default btn-lg" id="btn">GOTO</button></a>

          </div>   <!-- button div ends here -->
          </div>   <!-- caption div ends here -->
    </div>   <!-- col-2 div ends here -->
  
    <div class ="col-lg-2 col-md-2 col-sm-2 col-xs-2">  </div>   
  
  </div>   <!-- row div ends here --> 
</div>   <!-- container div ends here -->

<br>
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