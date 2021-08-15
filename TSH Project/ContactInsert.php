
<?php 

$U=$_POST['name'];
$E=$_POST['email'];
$C=$_POST['comments'];
$con=mysqli_connect('localhost', 'root', '', 'TSH_DB_CON');
// if($con){
//   echo "succes connection";
//  }
// else{
// echo "error connection";
// }

$quy= "INSERT INTO contacttable (name, email,comments)VALUES('$U','$E','$C')";
// if($quy){
//   echo "succes query";
// }
// else{
// echo "error query";
// }

$run=mysqli_query($con,$quy);
  // echo "success insert";
 ?>

 <script type="text/javascript">
 	window.open('Contact.php','_parent');
 </script>
