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

    .panel {
    border: 1px solid #f4511e; 
    border-radius:0 !important;
    transition: box-shadow 0.5s;
  }
  .panel:hover {
    box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
    border: 1px solid #f4511e;
    background-color: #fff !important;
    color: #f4511e;
  }
  .panel-heading {
    color: #fff !important;
    background-color: #f4511e !important;
    padding: 25px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
  }
  .panel-footer {
    background-color: white !important;
  }
  .panel-footer h3 {
    font-size: 32px;
  }
  .panel-footer h4 {
    color: #aaa;
    font-size: 14px;
  }
  .panel-footer .btn {
    margin: 15px 0;
    background-color: #f4511e;
    color: #fff;
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
  }
  
  .line{
          border: 1px solid #4DB6AC;    }
  
  .center {
          display: block;
          margin-left: auto;
          margin-right: auto;   }

   #id1 {
        background-color: #DCEDC8;  }
   #id2{
          background-color: #FFE0B2;
          /*padding-bottom: 120px;*/  }

    #id3{
          background-color: #BBDEFB;  }

    #id4{
          background-color: #D1C4E9;  }
  </style>
</head>
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


<!-- Container (Pricing Section) -->
<div class="container-fluid">
  
  <div class="row">
  
    <div class="col-sm-3 col-xs-12">
      <div class="panel panel-default text-center">
        
        <div class="panel-heading">
          <h1>Beginner</h1>
        </div>
        
        <a href="http://localhost/FirstYear.php"><img src="firstyear.jpeg" class="img-responsive center"></a>
        
        <div class="panel-body" id="id1">
          <hr class="line">
          <h4 style="font-weight: bold; font-size:2vw;">1st year </h4>
          <p style="font-size: 2vw; font-family: cursive;">“Be willing to be a beginner every single morning.” <br>― Meister Eckhart</p>      
        </div>
        
        <div class="panel-footer">
          <a href="http://localhost/FirstYear.php"><button class="btn btn-lg">Goto</button></a>
        </div>
        
      </div>      
    </div>
    
    <div class="col-sm-3 col-xs-12">
      <div class="panel panel-default text-center">
        
        <div class="panel-heading">
          <h1>Novice</h1>
        </div>
        
        <a href="http://localhost/FirstYear.php"><img src="secondyear.jpeg" class="img-responsive center"></a>
        
        <div class="panel-body" id="id2">
        <hr class="line">
          <h4 style="font-weight: bold;font-size:2vw; ">2nd Year</h4>
          <p style="font-size: 2vw; font-family: cursive;">The past cannot be changed. The future is yet in your power.<br>-Unknown</p>      
        </div>
        
        <div class="panel-footer">
          <a href="http://localhost/FirstYear.php"><button class="btn btn-lg">Goto</button></a>
        </div>
        
      </div>      
    </div>
    
    <div class="col-sm-3 col-xs-12">
      <div class="panel panel-default text-center">
        
        <div class="panel-heading">
          <h1>Advanced</h1>
        </div>
        
        <a href="http://localhost/FirstYear.php"><img src="thirdyear.jpeg" class="img-responsive center"></a>
        
        <div class="panel-body" id="id3">
        <hr class="line">
          <h4 style="font-weight: bold;font-size:2vw; ">3rd Year</h4>
          <p style="font-size: 2vw; font-family: cursive;">What you do today can improve all your tomorrows. <br> -Ralph Marston</p>      
        </div>
        
        <div class="panel-footer">
          <a href="http://localhost/FirstYear.php"><button class="btn btn-lg">Goto</button></a>
        </div>
        
      </div>      
    </div>
    
    <div class="col-sm-3 col-xs-12">
      <div class="panel panel-default text-center">
        
        <div class="panel-heading">
          <h1>Superior</h1>
        </div>
        
        <a href="http://localhost/FirstYear.php"><img src="fourthyear.jpeg" class="img-responsive center"></a>
        
        <div class="panel-body" id="id4">
        <hr class="line">
          <h4 style="font-weight: bold;font-size:2vw; ">4th Year</h4>
          <p style=" font-size: 2vw; font-family: cursive;">Some people dream of success while others wake up & work.<br>-Unknown</p>      
        </div>
        
        <div class="panel-footer">
          <a href="http://localhost/FirstYear.php"><button class="btn btn-        lg">Goto</button></a>
        </div>
        
      </div>      
    </div>
    
  </div>
</div>
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