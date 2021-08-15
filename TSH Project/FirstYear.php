<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<!-- /////////////////////////////////////////////////////////////////////////////////////////////// -->

<head>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="styles/newstyle.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  <link rel="stylesheet" href="/w3css/3/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">

  <title>  First Year  </title>
            
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

    .border  {
          border: 2px solid grey;
          border-radius: 7px;   } 

    h1 {
          margin: 10px 0 30px 0;
          letter-spacing: 10px;      
          font-size: 40px;                   
          font-family: serif;
          color: #4A235A;
          background-color:rgba(255,255,0,0.2);  }

    #text-style{
          font-family: times;
          font-size: 35px;
          color: black;         }
    #heading2{
          margin: 10px 0 30px 0;
          letter-spacing: 10px;      
          font-size: 30px;                   
          font-family: serif;
          color: #4A235A;      }

    #videotext{
          font-family: monospace;
          font-size: 20px;
          color: #616161;      }

    #rowtext{
          font-family: Palatino;
          font-size: 30px;
          color: purple;      }

    footer .glyphicon {
          font-size: 20px;
          margin-bottom: 20px;
          color: #f4511e;      }

    .panel-footer {
          background-color: white !important;  }

    #footertext{
          font-size: 12pt;    }

    ul.breadcrumb {
          padding: 8px 16px;
          list-style: none;
          background-color: #eee;  }

    ul.breadcrumb li {
          display: inline;  }

    ul.breadcrumb li+li:before {
          padding: 8px;
          color: black;
          content: "|\00a0";        }

    ul.breadcrumb li a {
          color: #4DB6AC;       }


  </style>
    
</head>

<!-- ////////////////////////////////////////////////////////////////////////////////////////////// -->
<body>

<!-- Logo -->
<div class="text-center">
    <img class="img-circle mx-auto d-block" src="icon5.jpg" align="center" style="height:20%; width:10%;">
</div>
<!-- ////////////////////////////////////////////////////////////////////////////////////////////// -->

<!-- navigation bar -->
<div class="container-fluid">   
  <div class="row">

    <nav class="nav navbar-inverse"  style="background-color: #FF6600">

          <div class="navbar-header active" >     <!-- active page -->
          <a href="#" class="navbar-brand" style="font-family:Georgia; font-size: 25pt; color:white; font-style:bold; background-color: red;">TSH-1<sup>st</sup> Year </a> 
              
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
<!-- ////////////////////////////////////////////////////////////////////////////////////////////// -->
<!-- heading 1st year -->
<div class="container text-center">
  <h1 style="border: 3px solid #D81B60;"> <strong>1<sup>st</sup> Year-Beginner</strong></h2>
</div>

<!-- heading- 1st semester part -->
<h2 id="heading2"> <strong> &nbsp; 1<sup>st</sup> Semester </strong> </h2>
<hr style=" border: 2px solid #4DB6AC;">
<br>

<!-- Youtube Heading and videos part -->
<div class="container-fluid">
<span> <img class="img-responsive" src="Youtube.png" align="left">
<h2 id="text-style">  &nbsp; Youtube </h2> </span>
</div>
<!-- ////////////////////////////// For Video 1 Applied Calculus ///////////////////////////////-->
<!-- Grid row -->
<div class="row">

  <!-- Grid column -->
  <div class="col-lg-4 col-md-12 mb-4">
    <h3 id="videotext">Applied Calculus</h3>
    <!--Modal: Name-->
    <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">

        <!--Content-->
        <div class="modal-content">

          <!--Body-->
          <div class="modal-body mb-0 p-0">
            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/rCxi-O79sVo"
                allowfullscreen></iframe>
            </div>
          </div>

          <!--Footer-->
          <div class="modal-footer justify-content-center">
            <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>
          </div>

        </div>        <!--/.Content-->

      </div>
    </div>    <!--Modal: Name-->

    <a><img class="img-fluid z-depth-1" src="AppliedCalculus.jpg" alt="video"
        data-toggle="modal" data-target="#modal1"></a>

  </div>  <!-- Grid column -->

<!-- //////////////////////////////////For Video 2 English////////////////////////////////////////////-->
  <!-- Grid column -->
  <div class="col-lg-4 col-md-6 mb-4">
    <h3 id="videotext"> Functional English</h3>
    <!--Modal: Name-->
    <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">

        <!--Content-->
        <div class="modal-content">

          <!--Body-->
          <div class="modal-body mb-0 p-0">
            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/AVYfyTvc9KY"
                allowfullscreen></iframe>
            </div>
          </div>

          <!--Footer-->
          <div class="modal-footer justify-content-center">
            <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>
          </div>

        </div>        <!--/.Content-->

      </div>
    </div>    <!--Modal: Name-->

    <a><img class="img-fluid z-depth-1" src="English.jpg" alt="video"
        data-toggle="modal" data-target="#modal2"></a>

  </div>  <!-- Grid column -->

<!-- //////////////////////////////// For Video 3 Electronics /////////////////////////////////-->
  <!-- Grid column -->
  <div class="col-lg-4 col-md-6 mb-4">
    <h3 id="videotext">Electronics Engineering</h3> <br>
    <!--Modal: Name-->
    <div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">

        <!--Content-->
        <div class="modal-content">

          <!--Body-->
          <div class="modal-body mb-0 p-0">
            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/r-X9coYTOV4"
                allowfullscreen></iframe>
            </div>
          </div>

          <!--Footer-->
          <div class="modal-footer justify-content-center">
            <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>
          </div>

        </div>        <!--/.Content-->

      </div>
    </div>    <!--Modal: Name-->

    <a><img class="img-fluid z-depth-1" src="Electronics.jpg" alt="video"
        data-toggle="modal" data-target="#modal3"></a>

  </div>  <!-- Grid column -->
</div><!-- Grid row -->

<!-- ////////////////////////////// For Video 4 Electrical ///////////////////////////////-->
<!-- Grid row -->
<div class="row">

  <!-- Grid column -->
  <div class="col-lg-4 col-md-12 mb-4">
    <h3 id="videotext">Basic Electrical Engineering</h3>
    <!--Modal: Name-->
    <div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">

        <!--Content-->
        <div class="modal-content">

          <!--Body-->
          <div class="modal-body mb-0 p-0">
            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Vd2UJiIPbag"
                allowfullscreen></iframe>
            </div>
          </div>

          <!--Footer-->
          <div class="modal-footer justify-content-center">
            <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>
          </div>

        </div>        <!--/.Content-->

      </div>
    </div>    <!--Modal: Name-->

    <a><img class="img-fluid z-depth-1" src="Electrical.jpg" alt="video"
        data-toggle="modal" data-target="#modal4"></a>

  </div>  <!-- Grid column -->

<!-- //////////////////////////////////For Video 5 Computer Programming //////////////////////////-->
  <!-- Grid column -->
  <div class="col-lg-4 col-md-6 mb-4">
    <h3 id="videotext">Computer Programming</h3>
    <!--Modal: Name-->
    <div class="modal fade" id="modal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">

        <!--Content-->
        <div class="modal-content">

          <!--Body-->
          <div class="modal-body mb-0 p-0">
            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Gbzu759QIZQ"
                allowfullscreen></iframe>
            </div>
          </div>

          <!--Footer-->
          <div class="modal-footer justify-content-center">
            <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>
          </div>

        </div>        <!--/.Content-->

      </div>
    </div>    <!--Modal: Name-->

    <a><img class="img-fluid z-depth-1" src="C++.jpg" alt="video"
        data-toggle="modal" data-target="#modal5"></a>

  </div>  <!-- Grid column -->

<!-- //////////////////////////////// For Video 6 Blank /////////////////////////////////-->
  <!-- Grid column -->
  <div class="col-lg-4 col-md-6 mb-4">
    
  </div>  <!-- Grid column -->
</div><!-- Grid row -->
<!-- ////////////////////////////////////////////////////////////////////////////////////////////// -->
<br>
<hr style=" border: 2px solid orange;">
<div class="container-fluid">
<span> <img class=" img-circle img-responsive" src="icon3.jpg" align="left" width="6%" height="6%">
<h2 id="text-style"> &nbsp; Book </h2> </span>
</div>
<!-- //////////////////////////////////////////////////////////////////////////////////////////// -->
                                  <!-- Table BOOK Conatiner -->
<div class="container">
                                                                                        
  <div class="table-responsive border">          
  <table class="table">
    <thead>
      <tr>
        <th><h2 id="rowtext">Subject</h2></th>
        <th><h2 id="rowtext">Book Reference</h2></th>
      </tr>
    </thead>
    <tbody>
                <tr class="danger">
                    <td>Applied Calculus</td>
                    <td><a href="https://www.scribd.com/document/400532832/Applied-Calculas-By-M-Urs-Shaikh-pdf"> Click here for book reference</a> </td>
                </tr>

                <tr class="active">
                    <td>Functional English</td>
                    <td><a href="https://thehindupdf.online/download-wren-and-martin-pdf/"> Click here for book reference</a> </td>
                </tr>

                <tr class="success">
                    <td>Electronics Engineering</td>
                    <td><a href="https://www.allaboutcircuits.com/textbook/"> Click here for book reference</a> </td>
                </tr>

                <tr class="warning">
                    <td>Basic Electrical Engineering</td>
                    <td><a href="https://www.pdfdrive.com/a-textbook-of-electrical-technology-volume-i-basic-electrical-engineering-e31735088.html"> Click here for book reference</a> </td>
                </tr>

                <tr class="info">
                    <td>Computer Programming</td>
                    <td><a href="https://www.goodreads.com/book/show/1533141.Object_Oriented_Programming_in_C_"> Click here for book reference</a> </td>
                </tr>
    </tbody>
  </table>
  </div>
</div>

<!-- ////////////////////////////////////////////////////////////////////////////////////////////// -->
<br>
<hr style=" border: 2px solid orange;">
<div class="container-fluid">
<span> <img class="img rounded img-responsive" src="Wikipedia.png" align="left">
<h2 id="text-style">  &nbsp; Wikipedia </h2> </span>
</div>
<!-- //////////////////////////////////////////////////////////////////////////////////////////// -->
                                  <!-- Table WIKIPEDIA Conatiner -->
<div class="container">
  
  <div class="table-responsive border">          
  <table class="table">
    <thead>
      <tr>
        <th><h2 id="rowtext">Subject</h2></th>
        <th><h2 id="rowtext">Wikipedia Reference</h2></th>
        
      </tr>
    </thead>
    <tbody>
                <tr class="danger">
                    <td>Applied Calculus</td>
                    <td><a href="https://en.wikipedia.org/wiki/Calculus"> Click here for wikipedia reference</a> </td>
                </tr>

                <tr class="active">
                    <td>Functional English</td>
                    <td><a href="https://en.wikipedia.org/wiki/English_grammar"> Click here for wikipedia reference</a> </td>
                </tr>

                <tr class="success">
                    <td>Electronics Engineering</td>
                    <td><a href="https://en.wikipedia.org/wiki/Electronic_engineering"> Click here for wikipedia reference</a> </td>
                </tr>

                <tr class="warning">
                    <td>Basic Electrical Engineering</td>
                    <td><a href="https://en.wikipedia.org/wiki/Electrical_engineering"> Click here for wikipedia reference</a> </td>
                </tr>

                <tr class="info">
                    <td>Computer Programming</td>
                    <td><a href="https://en.wikipedia.org/wiki/C%2B%2B"> Click here for wikipedia reference</a> </td>
                </tr>
    </tbody>
  </table>
  </div>
</div>

<!-- ////////////////////////////////////////////////////////////////////////////////////////////// -->
<br>  
<hr style=" border: 2px solid orange;">
<div class="container-fluid">
<span> <img class="img-circle img-responsive" src="Google.jpg" align="left">
<h2 id="text-style">  &nbsp; Google </h2> </span>
</div>
<!-- //////////////////////////////////////////////////////////////////////////////////////////// -->
                                  <!-- Table GOOGLE Conatiner -->
<div class="container">
                                                                             
  <div class="table-responsive border">          
  <table class="table">
    <thead>
      <tr>
        <th><h2 id="rowtext">Subject</h2></th>
        <th><h2 id="rowtext">Google Reference</h2></th>
        
      </tr>
    </thead>
    <tbody>
                <tr class="danger">
                    <td>Applied Calculus</td>
                    <td><a href="https://www.google.com/search?ei=HVo1XeT8H5OW1fAPvYOEkAw&q=applied+calculus&oq=applied+cal&gs_l=psy-ab.1.1.35i39j0l9.80004.80591..84355...0.0..1.427.1823.2-1j2j2......0....1..gws-wiz.k-25S_4QbPo"> Click here for google reference</a> </td>
                </tr>

                <tr class="active">
                    <td>Functional English</td>
                    <td><a href="https://www.google.com/search?ei=MFw1XZuaNvCg1fAPraisiAg&q=english+language+learning&oq=english+lang&gs_l=psy-ab.1.3.0l2j0i67j0j0i20i263j0l5.203895.209224..213269...0.0..0.369.3236.2-8j4......0....1..gws-wiz.......0i71j35i39j0i131i67j0i131i20i263j0i131.39SeEPLLDWc"> Click here for google reference</a> </td>
                </tr>

                <tr class="success">
                    <td>Electronics Engineering</td>
                    <td><a href="https://www.google.com/search?ei=YF41Xa6dE9OY1fAPjLCjyA8&q=electronics+engineering+&oq=electronics+engineering+&gs_l=psy-ab.3..35i39l2j0l8.28286.30183..30740...0.0..0.345.2265.2-7j2......0....1..gws-wiz.......0i71j0i22i30j0i20i263.TZLh7-a5cg0&ved=0ahUKEwiuzcS6-cfjAhVTTBUIHQzYCPkQ4dUDCAo&uact=5 "> Click here for google reference</a> </td>
                </tr>

                <tr class="warning">
                    <td>Basic Electrical Engineering</td>
                    <td><a href="https://www.google.com/search?ei=gF41Xcr-FJPDxgPKm4XYCQ&q=electrical+engineering&oq=electrical+engineering&gs_l=psy-ab.3..0i7i30l2j0i131j0l7.30432.32206..33295...0.0..0.319.2404.2-9j1......0....1..gws-wiz.......0i71.in5XOzXzx7s&ved=0ahUKEwjKvufJ-cfjAhWToXEKHcpNAZsQ4dUDCAo&uact=5"> Click here for google reference</a> </td>
                </tr>

                <tr class="info">
                    <td>Computer Programming</td>
                    <td><a href="https://www.google.com/search?ei=5F41XcKUKpHRxgPb-ZSoBQ&q=computer+programming+c%2B%2B&oq=computer+progra&gs_l=psy-ab.3.1.0i67j0i20i263j0l8.136555.142961..145468...1.0..4.407.5293.0j1j15j3j1......0....1..gws-wiz.....10..0i71j35i39j0i131j0i131i67.vYvQVF1EtK0"> Click here for google reference</a> </td>
                </tr>
    </tbody>
  </table>
  </div>
</div>
<!-- ///////////////////////////First Semester End///////////////////////////////////////////// -->
<br>
<hr style="border: 4px solid red;">
<br>
<!-- ///////////////////////////// Second Semester Start ////////////////////////////////////////// -->
<!-- heading- 2nd semester part -->
<h2 id="heading2"> <strong> &nbsp; 2<sup>nd</sup> Semester </strong> </h2>
<hr style=" border: 2px solid #4DB6AC;">
<br>

<!-- Youtube Heading and videos part -->
<div class="container-fluid">
<span> <img class="img-responsive" src="Youtube.png" align="left">
<h2 id="text-style">  &nbsp; Youtube </h2> </span>
</div>
<!-- ////////////////////////////// For Video 1 OOP ///////////////////////////////-->
<!-- Grid row -->
<div class="row">

  <!-- Grid column -->
  <div class="col-lg-4 col-md-12 mb-4">
    <h3 id="videotext">Object Oriented Programming</h3>
    <!--Modal: Name-->
    <div class="modal fade" id="modal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">

        <!--Content-->
        <div class="modal-content">

          <!--Body-->
          <div class="modal-body mb-0 p-0">
            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/FKzoriOapnU"
                allowfullscreen></iframe>
            </div>
          </div>

          <!--Footer-->
          <div class="modal-footer justify-content-center">
            <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>
          </div>

        </div>        <!--/.Content-->

      </div>
    </div>    <!--Modal: Name-->

    <a><img class="img-fluid z-depth-1" src="java.jpg" alt="video"
        data-toggle="modal" data-target="#modal6"></a>

  </div>  <!-- Grid column -->

<!-- //////////////////////////////////For Video 2 DCLD////////////////////////////////////////////-->
  <!-- Grid column -->
  <div class="col-lg-4 col-md-6 mb-4">
    <h3 id="videotext">Digital Circuits & Logic Design</h3> 
    <!--Modal: Name-->
    <div class="modal fade" id="modal7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">

        <!--Content-->
        <div class="modal-content">

          <!--Body-->
          <div class="modal-body mb-0 p-0">
            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/M0mx8S05v60"
                allowfullscreen></iframe>
            </div>
          </div>

          <!--Footer-->
          <div class="modal-footer justify-content-center">
            <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>
          </div>

        </div>        <!--/.Content-->

      </div>
    </div>    <!--Modal: Name-->

    <a><img class="img-fluid z-depth-1" src="DCLD.jpg" alt="video"
        data-toggle="modal" data-target="#modal7"></a>

  </div>  <!-- Grid column -->

<!-- //////////////////////////////// For Video 3 LAAG /////////////////////////////////-->
  <!-- Grid column -->
  <div class="col-lg-4 col-md-6 mb-4">
    <h3 id="videotext">Linear Algebra & Analytical Geometry</h3> 
    <!--Modal: Name-->
    <div class="modal fade" id="modal8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">

        <!--Content-->
        <div class="modal-content">

          <!--Body-->
          <div class="modal-body mb-0 p-0">
            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/WnTofPT06iw"
                allowfullscreen></iframe>
            </div>
          </div>

          <!--Footer-->
          <div class="modal-footer justify-content-center">
            <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>
          </div>

        </div>        <!--/.Content-->

      </div>
    </div>    <!--Modal: Name-->

    <a><img class="img-fluid z-depth-1" src="LAAG.jpg" alt="video"
        data-toggle="modal" data-target="#modal8"></a>

  </div>  <!-- Grid column -->
</div><!-- Grid row -->

<!-- ////////////////////////////// For Video 4 Professional Ethics /////////////////////////////-->
<!-- Grid row -->
<div class="row">

  <!-- Grid column -->
  <div class="col-lg-4 col-md-12 mb-4">
    <h3 id="videotext">Professional Ethics</h3>
    <!--Modal: Name-->
    <div class="modal fade" id="modal9" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">

        <!--Content-->
        <div class="modal-content">

          <!--Body-->
          <div class="modal-body mb-0 p-0">
            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/n9A8-FjhArE"
                allowfullscreen></iframe>
            </div>
          </div>

          <!--Footer-->
          <div class="modal-footer justify-content-center">
            <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>
          </div>

        </div>        <!--/.Content-->

      </div>
    </div>    <!--Modal: Name-->

    <a><img class="img-fluid z-depth-1" src="PE.jpg" alt="video"
        data-toggle="modal" data-target="#modal9"></a>

  </div>  <!-- Grid column -->

<!-- //////////////////////////////////For Video 5 PST //////////////////////////-->
  <!-- Grid column -->
  <div class="col-lg-4 col-md-6 mb-4">
    <h3 id="videotext">Pakistan Studies</h3>
    <!--Modal: Name-->
    <div class="modal fade" id="modal10" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">

        <!--Content-->
        <div class="modal-content">

          <!--Body-->
          <div class="modal-body mb-0 p-0">
            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/VRKBJC9296U"
                allowfullscreen></iframe>
            </div>
          </div>

          <!--Footer-->
          <div class="modal-footer justify-content-center">
            <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>
          </div>

        </div>        <!--/.Content-->

      </div>
    </div>    <!--Modal: Name-->

    <a><img class="img-fluid z-depth-1" src="PST.jpg" alt="video"
        data-toggle="modal" data-target="#modal10"></a>

  </div>  <!-- Grid column -->

<!-- //////////////////////////////// For Video 6 Islamiyat /////////////////////////////////-->
<!-- Grid column -->
  <div class="col-lg-4 col-md-6 mb-4">
    <h3 id="videotext">Islamic Studies</h3>
    <!--Modal: Name-->
    <div class="modal fade" id="modal11" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">

        <!--Content-->
        <div class="modal-content">

          <!--Body-->
          <div class="modal-body mb-0 p-0">
            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/j9efqIa01IU"
                allowfullscreen></iframe>
            </div>
          </div>

          <!--Footer-->
          <div class="modal-footer justify-content-center">
            <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>
          </div>

        </div>        <!--/.Content-->

      </div>
    </div>    <!--Modal: Name-->

    <a><img class="img-fluid z-depth-1" src="ISL.jpg" alt="video"
        data-toggle="modal" data-target="#modal11"></a>

  </div>  <!-- Grid column -->
</div><!-- Grid row -->
<!-- ////////////////////////////////////////////////////////////////////////////////////////////// -->
<br>
<hr style=" border: 2px solid orange;">
<div class="container-fluid">
<span> <img class=" img-circle img-responsive" src="icon3.jpg" align="left" width="6%" height="6%">
<h2 id="text-style"> &nbsp; Book </h2> </span>
</div>
<!-- //////////////////////////////////////////////////////////////////////////////////////////// -->
                                  <!-- Table BOOK Conatiner -->
<div class="container">
                                                                                        
  <div class="table-responsive border">          
  <table class="table">
    <thead>
      <tr>
        <th><h2 id="rowtext">Subject</h2></th>
        <th><h2 id="rowtext">Book Reference</h2></th>
        
      </tr>
    </thead>
    <tbody>
                <tr class="danger">
                    <td>Object Oriented Programming</td>
                    <td><a href="https://dev.to/codegym_cc/18-best-java-books-for-beginners-in-2019-fme"> Click here for book reference</a> </td>
                </tr>

                <tr class="active">
                    <td>Digital Circuits & Logic Design</td>
                    <td><a href="https://www.pdfdrive.com/digital-logic-and-computer-design-by-m-morris-mano-e34332016.html"> Click here for book reference</a>
                    <br><a href="https://www.oreilly.com/library/view/digital-logic-design/9780750645829/xhtml/9780080477305_cover.html"> Click here for book reference</a> </td>
                </tr>

                <tr class="success">
                    <td>Linear Algebra & Analytical Geometry</td>
                    <td><a href="https://www.springer.com/gp/book/9781852336622">Click here for book reference</a>                    
                </tr>

                <tr class="warning">
                    <td>Professional Ethics</td>
                    <td><a href="https://easyengineering.net/professionalethicsinengineeringbooks/ "> Click here for book reference</a>
                    <br><a href="https://www.scoop.it/topic/hzjcumq/p/4100814991/2018/08/19/professional-ethics-in-engineering-by-jayakumar-pdf "> Click here for book reference</a> </td>
                </tr>

                <tr class="info">
                    <td>Pakistan Studies</td>
                    <td><a href="https://oup.com.pk/academic-generalbooks/pakistan-studies.html"> Click here for book reference</a> </td>
                </tr>

                <tr class="danger">
                    <td>Islamic Studies</td>
                    <td><a href="http://www.oxfordislamicstudies.com/Public/book_ohi.html"> Click here for book reference</a>
                    <br><a href="https://press.princeton.edu/titles/11081.html"> Click here for book reference</a> </td>
                </tr>
    </tbody>
  </table>
  </div>
</div>

<!-- ////////////////////////////////////////////////////////////////////////////////////////////// -->
<br>
<hr style=" border: 2px solid orange;">
<div class="container-fluid">
<span> <img class="img rounded img-responsive" src="Wikipedia.png" align="left">
<h2 id="text-style">  &nbsp; Wikipedia </h2> </span>
</div>
<!-- //////////////////////////////////////////////////////////////////////////////////////////// -->
                                  <!-- Table WIKIPEDIA Conatiner -->
<div class="container">
  
  <div class="table-responsive border">          
  <table class="table">
    <thead>
      <tr>
        <th><h2 id="rowtext">Subject</h2></th>
        <th><h2 id="rowtext">Wikipedia Reference</h2></th>
        
      </tr>
    </thead>
    <tbody>
                <tr class="danger">
                    <td>Object Oriented Programming</td>
                    <td><a href="https://en.wikipedia.org/wiki/Java_(programming_language)"> Click here for wikipedia reference</a> </td>
                </tr>

                <tr class="active">
                    <td>Digital Circuits & Logic Design</td>
                    <td><a href="https://en.wikipedia.org/wiki/Digital_electronics"> Click here for wikipedia reference</a> </td>
                </tr>

                <tr class="success">
                    <td>Linear Algebra & Analytical Geometry</td>
                    <td><a href="https://en.wikipedia.org/wiki/Analytic_geometry"> Click here for wikipedia reference</a> </td>
                </tr>

                <tr class="warning">
                    <td>Professional Ethics</td>
                    <td><a href="https://en.wikipedia.org/wiki/Professional_ethics"> Click here for wikipedia reference</a> </td>
                </tr>

                <tr class="info">
                    <td>Pakistan Studies</td>
                    <td><a href="https://en.wikipedia.org/wiki/Pakistan_studies"> Click here for wikipedia reference</a> </td>
                </tr>

                <tr class="danger">
                    <td>Islamic Studies</td>
                    <td><a href="https://en.wikipedia.org/wiki/Islamic_studies "> Click here for wikipedia reference</a> </td>
                </tr>
    </tbody>
  </table>
  </div>
</div>

<!-- ////////////////////////////////////////////////////////////////////////////////////////////// -->
<br>  
<hr style=" border: 2px solid orange;">
<div class="container-fluid">
<span> <img class="img-circle img-responsive" src="Google.jpg" align="left">
<h2 id="text-style">  &nbsp; Google </h2> </span>
</div>
<!-- //////////////////////////////////////////////////////////////////////////////////////////// -->
                                  <!-- Table GOOGLE Conatiner -->
<div class="container">
                                                                             
  <div class="table-responsive border">          
  <table class="table">
    <thead>
      <tr>
        <th><h2 id="rowtext">Subject</h2></th>
        <th><h2 id="rowtext">Google Reference</h2></th>
        
      </tr>
    </thead>
    <tbody>
                <tr class="danger">
                    <td>Object Oriented Programming</td>
                    <td><a href="https://www.google.com/search?ei=sl81XcGTLt2K1fAP06GdqA8&q=Object-oriented+programming+jav&oq=Object-oriented+programming+jav&gs_l=psy-ab.3..0l2j0i22i30l8.518292.525664..526605...3.0..0.384.2366.2-4j4......0....1..gws-wiz.......0i71j35i39.FPW-oc_viuY&ved=0ahUKEwjBtPXb-sfjAhVdRRUIHdNQB_UQ4dUDCAo&uact=5"> Click here for google reference</a>
                    <br><a href="https://www.tutorialspoint.com/java/">Click here for google reference</a>
                    <br><a href="https://www.javatpoint.com/java-oops-concepts">Click here for google reference</a> </td>
                </tr>

                <tr class="active">
                    <td>Digital Circuits & Logic Design</td>
                    <td><a href="https://www.tutorialspoint.com/digital_circuits/digital_circuits_logic_gates"> Click here for google reference</a> </td>
                </tr>

                <tr class="success">
                    <td>Linear Algebra & Analytical Geometry</td>
                    <td><a href="https://www.google.com/search?q=linear+algebra+and+analytical+geometry&oq=linear+algebra+and+analytical+geometry+&aqs=chrome..69i57j69i59l2j0l3.7417j0j8&sourceid=chrome&ie=UTF-8"> Click here for google reference</a> </td>
                </tr>

                <tr class="warning">
                    <td>Professional Ethics</td>
                    <td><a href="https://www.google.com/search?ei=PLg1XaH0OIaG1fAPzJajuAU&q=professional+ethics++&oq=professional+ethics++&gs_l=psy-ab.3..35i39l2j0i20i263j0l7.23032.24338..24980...0.0..0.335.2232.2-8j1......0....1..gws-wiz.......0i71.ESs0_AzBszg&ved=0ahUKEwihgv-Tz8jjAhUGQxUIHUzLCFcQ4dUDCAo&uact=5 "> Click here for google reference</a> </td>
                </tr>

                <tr class="info">
                    <td>Pakistan Studies</td>
                    <td><a href="http://www.dawn.com/news/862017"> Click here for google reference</a> </td>
                </tr>

                <tr class="danger">
                    <td>Islamic Studies</td>
                    <td><a href="https://www.google.com/search?ei=brk1Xf2aJp6H1fAP3Ye6kAg&q=islamic+studies&oq=islam&gs_l=psy-ab.1.1.35i39j0i67l3j0i131i67j0i67j0i131i67j0i67l3.19379.21811..25399...0.0..0.281.1217.2-5......0....1..gws-wiz.......0i71j0i131j0.qScGM8NKmuA"> Click here for google reference</a> </td>
                </tr>
    </tbody>
  </table>
  </div>
</div>
<!-- /////////////////////////////// Second Semester End ///////////////////////////////////// -->

<!-- Pagination Container -->
<div class="Conatiner text-center">
    <h2 style="font-family: Palatino;">GOTO</h2>
      <ul class="breadcrumb">
        <li>1st Year</li>
        <li><a href="http://localhost/SecondYear.php">2nd Year</a></li>
        <li><a href="http://localhost/ThirdYear.php">3rd Year</a></li>
        <li><a href="http://localhost/FourthYear.php">4th Year</a></li>
      </ul>
</div>
<!-- ///////////////////////////Second Semester End///////////////////////////////////////////// -->
<br>
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

<!-- //////////////////////////////////////////////////////////////////////////////////////////// -->
</body> 
</html>

<script type="text/javascript">
  
  $('#modal1').on('hidden.bs.modal', function (e) {
  // do something...
  $('#modal1 iframe').attr("src", $("#modal1 iframe").attr("src"));
});

$('#modal2').on('hidden.bs.modal', function (e) {
  // do something...
  $('#modal2 iframe').attr("src", $("#modal2 iframe").attr("src"));
});

$('#modal3').on('hidden.bs.modal', function (e) {
  // do something...
  $('#modal3 iframe').attr("src", $("#modal3 iframe").attr("src"));
});

$('#modal4').on('hidden.bs.modal', function (e) {
  // do something...
  $('#modal4 iframe').attr("src", $("#modal4 iframe").attr("src"));
});

$('#modal5').on('hidden.bs.modal', function (e) {
  // do something...
  $('#modal5 iframe').attr("src", $("#modal5 iframe").attr("src"));
});

$('#modal7').on('hidden.bs.modal', function (e) {
  // do something...
  $('#modal7 iframe').attr("src", $("#modal7 iframe").attr("src"));
});

$('#modal8').on('hidden.bs.modal', function (e) {
  // do something...
  $('#modal8 iframe').attr("src", $("#modal8 iframe").attr("src"));
});

$('#modal9').on('hidden.bs.modal', function (e) {
  // do something...
  $('#modal9 iframe').attr("src", $("#modal9 iframe").attr("src"));
});

$('#modal10').on('hidden.bs.modal', function (e) {
  // do something...
  $('#modal10 iframe').attr("src", $("#modal10 iframe").attr("src"));
});

$('#modal11').on('hidden.bs.modal', function (e) {
  // do something...
  $('#modal11 iframe').attr("src", $("#modal11 iframe").attr("src"));
});
</script>
