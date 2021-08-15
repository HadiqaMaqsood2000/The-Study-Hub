<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<!-- ///////////////////////////////////////////////////////////////////////////////////////////// -->
<head>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="styles/newstyle.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="/w3css/3/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  
  <title> Search By Subject  </title>
            
            <!-- /////////////////////////////////////////////////////////////// -->

  <style type="text/css">
    
    footer .glyphicon {
          font-size: 20px;
          margin-bottom: 20px;
          color: #f4511e;      }

    .panel-footer {
          background-color: white !important;  }

    #footertext{
          font-size: 12pt;    }
       
    #BlogHeading{
          margin: 10px 0 30px 0;
          letter-spacing: 10px;      
          font-size: 20px;
          color:#A93226;              }

    #rowtext{
          font-family: Palatino;
          font-size: 50px;
          color: purple;      }

    .border  {
          border: 3px solid #4DB6AC;
          border-radius: 7px;   }

  </style>
</head>
<!-- ////////////////////////////////////////////////////////////////////////////////////////////// -->
<body>
  
<div class="text-center">
    <img class="img-circle mx-auto d-block" src="icon5.jpg" align="center" style="height:20%; width:10%;">
    
</div>
<!-- ////////////////////////////////////////////////////////////////////////////////////////////// -->

<div class="container-fluid">
  <div class="row">

    <nav class="nav navbar-inverse"  style="background-color: #FF6600">

          <div class="navbar-header active" >     <!-- active page -->
          <a href="#" class="navbar-brand" style="font-family:Georgia; font-size: 25pt; color:white; font-style:bold; background-color: red;"> Search By Subject </a> 
              
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> 
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
          </button> 
          </div>
          
          <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right" id="nav">
              <li><a href="http://localhost/SearchByYear.php" style="color: white;  font-family: serif; font-size: 16pt">SEARCH BY YEAR</a></li>
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
<!-- ////////////////////////////////////////////////////////////////////////////////////////////// -->
<div class="container">
  
  <div class="table-resposive border"> 
        <table class="table">
        <!-- Table head row -->
        <thead>
        <tr>
        <th><h2 id="rowtext">Course Code</h2></th>
        <th><h2 id="rowtext">Subject</h2></th>
        </tr>
        </thead>

        <!-- Table body rows -->
        <tbody>
        <!-- first semester -->
        <tr class="success">
        <td><a href="http://localhost/FirstYear.php"> MTH108 </a></td>
        <td><a href="http://localhost/FirstYear.php"> Applied Calculus </a></td>
        </tr>      
      
        <tr class="active">
        <td><a href="http://localhost/FirstYear.php"> SW111 </a></td>
        <td><a href="http://localhost/FirstYear.php"> Computer Programming </a></td>
        </tr>
    
        <tr class="danger">
        <td><a href="http://localhost/FirstYear.php">ENG111</a></td>
        <td><a href="http://localhost/FirstYear.php">Functional English</a></td>
        </tr>
      
        <tr class="info">
        <td><a href="http://localhost/FirstYear.php">ES121</a></td>
        <td><a href="http://localhost/FirstYear.php">Electronic Engineering</a></td>
        </tr>
      
        <tr class="warning">
        <td><a href="http://localhost/FirstYear.php">EL101</a></td>
        <td><a href="http://localhost/FirstYear.php">Basic Electrical Engineering</a></td>
        </tr>

      <!--second semester  -->
        <tr class="success">
        <td><a href="http://localhost/FirstYear.php"> SW121 </a></td>
        <td><a href="http://localhost/FirstYear.php">Object Oriented Programming</a></td>
        </tr>      
    
        <tr class="active">
        <td> <a href="http://localhost/FirstYear.php">SW122</a></td>
        <td><a href="http://localhost/FirstYear.php">Digital Computer & Logic Design</a></td>
        </tr>
    
        <tr class="danger">
        <td><a href="http://localhost/FirstYear.php">MTH112</a></td>
        <td><a href="http://localhost/FirstYear.php">Linear Algebra & Analytical Geometry</a> </td>
        </tr>
      
        <tr class="info">
        <td><a href="http://localhost/FirstYear.php">PS106</a></td>
        <td><a href="http://localhost/FirstYear.php">Pakistan Studies</a></td>
        </tr>
      
        <tr class="warning">
        <td><a href="http://localhost/FirstYear.php"> IS111/SS104</a></td>
        <td><a href="http://localhost/FirstYear.php"> Islamic Studies / Ethics</a></td>
        </tr>
        
        <tr class="success">
        <td><a href="http://localhost/FirstYear.php"> SS125 </a></td>
        <td><a href="http://localhost/FirstYear.php">Professional Ethics</a></td>
        </tr> 

      <!-- Third semester -->
        <tr class="active">
        <td><a href="http://localhost/SecondYear.php"> SW211</a></td>
        <td> <a href="http://localhost/SecondYear.php">Software Economics & Management</a></td>
        </tr>
    
        <tr class="danger">
        <td><a href="http://localhost/SecondYear.php">SW212</a></td>
        <td><a href="http://localhost/SecondYear.php">Data Structures & Algorithms</a> </td>
        </tr>
      
        <tr class="info">
        <td><a href="http://localhost/SecondYear.php">  SW213</a></td>
        <td><a href="http://localhost/SecondYear.php">Computer Architecture & Organization</a></td>
        </tr>
      
        <tr class="warning">
        <td><a href="http://localhost/SecondYear.php">SW214 </a></td>
        <td><a href="http://localhost/SecondYear.php">Introduction to Software Engineering</a></td>
        </tr>
        
        <tr class="success">
        <td><a href="http://localhost/SecondYear.php"> MTH212</a></td>
        <td><a href="http://localhost/SecondYear.php"> Differential Equations & Fourier series</a></td>
        </tr> 

      <!-- Fourth Semester -->
        <tr class="active">
        <td><a href="http://localhost/SecondYear.php"> SW221</a></td>
        <td><a href="http://localhost/SecondYear.php"> Operating Systems Concepts</a></td>
        </tr>
    
        <tr class="danger">
        <td><a href="http://localhost/SecondYear.php">SW222</a></td>
        <td> <a href="http://localhost/SecondYear.php">Database Management & Administration</a></td>
        </tr>
        
        <tr class="info">
        <td><a href="http://localhost/SecondYear.php">SW223</a>  </td>
        <td><a href="http://localhost/SecondYear.php">Operations Research</a></td>
        </tr>
       
        <tr class="warning">
        <td><a href="http://localhost/SecondYear.php">SW224</a></td>
        <td><a href="http://localhost/SecondYear.php">Microprocessor Technologies</a></td>
        </tr>
        
        <tr class="success">
        <td><a href="http://localhost/SecondYear.php">MTH217</a> </td>
        <td><a href="http://localhost/SecondYear.php">Laplace Transforms & Discrete Mathematics</a></td>
        </tr> 

      <!-- Fiffth Semester -->
        <tr class="active">
        <td><a href="http://localhost/ThirdYear.php">SW311</a></td>
        <td><a href="http://localhost/ThirdYear.php">Theory of Automata & Formal Languages</a></td>
        </tr>
    
        <tr class="danger">
        <td><a href="http://localhost/ThirdYear.php">SW312</a></td>
        <td><a href="http://localhost/ThirdYear.php">Digital Communication</a> </td>
        </tr>
      
        <tr class="info">
        <td> <a href="http://localhost/ThirdYear.php"> MTH317 </a></td>
        <td><a href="http://localhost/ThirdYear.php">Statistics  & Probability</a></td>
        </tr>
      
        <tr class="warning">
        <td> <a href="http://localhost/ThirdYear.php">SW313</a></td>
        <td><a href="http://localhost/ThirdYear.php">Data Analytics & Business Intelligence</a></td>
        </tr>
        
        <tr class="success">
        <td><a href="http://localhost/ThirdYear.phphttp://localhost/ThirdYear.php">SW314 </a></td>
        <td><a href="http://localhost/ThirdYear.php">Mobile Programming</a></td>
        </tr> 

      <!-- sixth semester -->
        <tr class="active">
        <td><a href="http://localhost/ThirdYear.phphttp://localhost/ThirdYear.php">SW321</a></td>
        <td><a href="http://localhost/ThirdYear.php">Computer Networks & Management</a></td>
        </tr>
    
        <tr class="danger">
        <td> <a href="http://localhost/ThirdYear.php"> SW322</a></td>
        <td><a href="http://localhost/ThirdYear.php">Software Project Management</a></td>
        </tr>
      
        <tr class="info">
        <td> <a href="http://localhost/ThirdYear.php">SW323</a> </td>
        <td><a href="http://localhost/ThirdYear.php">Human Computer Interaction</a></td>
        </tr>
    
        <tr class="warning">
        <td> <a href="http://localhost/ThirdYear.php">SW324</a></td>
        <td><a href="http://localhost/ThirdYear.php">Artificial Intelligence Concepts & Techniques</a></td>
        </tr>
        
        <tr class="success">
        <td><a href="http://localhost/ThirdYear.php">ENG319</a></td>
        <td><a href="http://localhost/ThirdYear.php">Technical Report Writing & Presentation Skills</a></td>
        </tr> 

      <!-- seventh semester -->
        <tr class="active">
        <td><a href="http://localhost/FourthYear.php">SW411</a></td>
        <td><a href="http://localhost/FourthYear.php">Interactive Multimedia Systems & Graphics</a></td>
        </tr>
    
        <tr class="danger">
        <td><a href="http://localhost/FourthYear.php"> SW412</a> </td>
        <td> <a href="http://localhost/FourthYear.php"> Web Technologies</a></td>
        </tr>
      
        <tr class="info">
        <td> <a href="http://localhost/FourthYear.php">SW413 </a></td>
        <td><a href="http://localhost/FourthYear.php">Software Design & Architecture</a></td>
        </tr>
      
        <tr class="warning">
        <td><a href="http://localhost/FourthYear.php">SW414 </a></td>
        <td><a href="http://localhost/FourthYear.php">Computer Vision</a></td>
        </tr>
        
        <tr class="success">
        <td> <a href="http://localhost/FourthYear.php"> SW449</a></td>
        <td> <a href="http://localhost/FourthYear.php"> Thesis/Project(Ideas)</a> </td>
        </tr> 

      <!-- eighth semester -->
        <tr class="active">
        <td><a href="http://localhost/FourthYear.php">SW421</a></td>
        <td><a href="http://localhost/FourthYear.php">Data Warehousing & Mining  Techniques</a></td>
        </tr>
    
        <tr class="danger">
        <td><a href="http://localhost/FourthYear.php">SW422 </a></td>
        <td><a href="http://localhost/FourthYear.php">Distributed Computing</a> </td>
        </tr>

        <tr class="info">
        <td><a href="http://localhost/FourthYear.php"> SW423 </a></td>
        <td><a href="http://localhost/FourthYear.php">Software Testing & Quality Assurance</a></td>
        </tr>

        <tr class="warning">
        <td><a href="http://localhost/FourthYear.php">SW449</a> </td>
        <td><a href="http://localhost/FourthYear.php">Thesis/Project(Ideas)</a></td>
        </tr>

        </tbody>    <!-- table body ends here -->
        </table>   <!-- table ends here -->
      
  </div>    <!-- table div ends here -->
</div> <!-- container div ends here -->
<br> <br>
<!-- //////////////////////////////////////////////////////////////////////////////////////////// -->
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