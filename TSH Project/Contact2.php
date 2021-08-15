
<?php 

// $U=$_POST['name'];
// $E=$_POST['email'];
// $C=$_POST['comments'];
// $con=mysqli_connect('localhost', 'root', '', 'TSH_DB_CON');
// if($con){
//   echo "succes connection";
//  }
// else{
// echo "error connection";
// }

// $quy= "INSERT INTO contacttable (name, email,comments)VALUES('$U','$E','$C')";
// if($quy){
//   echo "succes query";
// }
// else{
// echo "error query";
// }

// $run=mysqli_query($con,$quy);
//   echo "success insert";
?>

<!-- //////////////////////////////////////////////////////////////////////////////////////// -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<!-- //////////////////////////////////////////////////////////////////////////////////////// -->
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

  <title>  Contact Us   </title>
            
<!--             /////////////////////////////////////////////////////////////// -->

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

    body{
            margin: 0;
            padding: 0;
            text-align: center;
            background: linear-gradient(rgba(0, 0, 50, 0.5), rgba(0, 0, 50, 0.5)), 
              url(contactimage1.jpeg);
            /*background-size: cover;*/
            background-position: center;
            font-family: sans-serif;
            background-repeat: no-repeat;
            background-size: 1800px 1000px;
              }
     
    h3 {
            font-size: 24px;
            text-transform: uppercase;
            color: #F0B27A;
            font-weight: 600; }

    .btn {
            padding: 10px 20px;
            /*background-color: #333;*/
            background-color: #283747;
            color: #f1f1f1;
            border-radius: 0;
            transition: .2s;
          }

    .btn:hover, .btn:focus {
            border: 1px solid #333;
            background-color: #AED6F1;
            color: #000;
          }

    .form-control {
            border-radius: 0;
            background: transparent;
            color: white;   }

    #comments {
            resize: none;
            color: white;                   }

    .bg-grey {
            background-color: #f6f6f6;   }
    
    #contact{
            background:transparent;     }

    p{
            color: #AED6F1;
            font-size:20px;     }

</style>

</head>
<!-- //////////////////////////////////////////////////////////////////////////////////////////// -->
<body>

<div class="text-center">
    <img class="img-circle mx-auto d-block" src="icon5.jpg" align="center" style="height:20%; width:10%;">
</div>
<br>
<!-- /////////////////////////////////////////////////////////////////////////////////////-->

<div class="container-fluid">
  <div class="row">

    <nav class="nav navbar-inverse"  style="background-color: #FF6600">

          <div class="navbar-header active" >     <!-- active page -->
          <a href="#" class="navbar-brand" style="font-family:Georgia; font-size: 25pt; color:white; font-style:bold; background-color: red;"> CONTACT </a> 
              
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> 
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
          </button> 
          </div>
          
          <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right" id="nav">
              <li><a href="http://localhost/website.php" style="color: white;  font-family: serif;    
                   font-size: 16pt;">HOME</a> </li>
              <li><a href="http://localhost/AboutUs.php" style="color: white;  font-family: serif; 
                   font-size: 16pt">ABOUT US</a></li>
              <li><a href="http://localhost/Contact.php" style="color: white;  font-family: serif;
                   font-size: 16pt">CONTACT</a></li>
          </ul> 
          </div>
    </nav>
  </div>    <!-- row ends here -->
</div>    <!-- container div end -->
<br>

<!-- ///////////////////////////////////////////////////////////////////////////////////////////// -->
<!-- Container (Contact Section) -->
<div id="contact" class="container bg-grey">
  <h3 class="text-center">Contact</h3>
  <p class="text-center"><em>We love our users!</em></p>
  <p class="text-center"><em>Contact us and we'll get back to you within 24 hours.</em></p>
  <br> <br>

  <div class="row">
      <div class="col-md-4">
        <p>User? Drop a note.</p>
        <p><span class="glyphicon glyphicon-map-marker"></span> MUET, Jamshoro</p>
        <p><span class="glyphicon glyphicon-phone"></span> +92 3113288688</p>
        <p><span class="glyphicon glyphicon-envelope"></span> hadiqamaqsood2000@gmail.com</p>
     </div>

    <!-- ///////////////////////////////// Form Portion ////////////////////////////////// -->
<div class="col-md-8">

  <form action="ContactInsert2.php" method="post">
  
   <div class="form-group">  
        <!-- name field -->
              <input class="form-control"  name="name" placeholder="Name" type="text" >
      </div>
      
      <div class="form-group">   
         <!-- email field -->
              <input class="form-control"  name="email" placeholder="Email" type="email" >
      </div>


      <div class="form-group">    
      <!-- textarea/comment section -->
      <textarea class="form-control"  name="comments" placeholder="Comment" cols="3" rows="5"></textarea>
      </div>


      <br>


      <!-- div for button -->
      <button class="btn pull-right" type="submit" name="send">Send</button>

  </form>   
</div>   <!-- col-8 right side div ends here -->

</div> <!-- row div ends here -->
</div>   <!-- contact section container ends here -->

  <!-- //////////////////////////////////////////////////////////////////////////////////// -->
</body>
</html>

