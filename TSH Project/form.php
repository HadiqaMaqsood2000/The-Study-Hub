<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form method="get" action="form.php"   >
		

		<label>A: </label> <input type="text" name="user1">

		<label>B: </label> <input type="text" name="user2">

		<label>C: </label> <input type="text" name="user3">

		<input type="submit" name="submit" value="submit">

	</form>

</body>
</html>



<?php

$user1= @$_GET ['user1'];
$user2= @$_GET ['user2'];
$user3= @$_GET ['user3'];

	if($user1> $user2 && $user1> $user3){ 				echo "<br>";
				echo $user1." is greater than ".$user2." & ".$user3;
	}

	else if($user2> $user1 && $user1> $user3){			echo "<br>";
				echo $user2." is greater than ".$user1." & ".$user3;
	}

	else if($user3> $user2 && $user1> $user1){			echo "<br>";
				echo $user3." is greater than ".$user2." & ".$user1;
	}

	else
	{				echo "<br>";
		echo "None is greater!";
	}
  echo "<input type='button' onclick='print()' >";


 
?>

