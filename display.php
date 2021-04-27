<?php
session_start();
if(!isset($_SESSION['username'])){	
	header('location:login.php');
}
else{
	$user=$_SESSION['username'];
}
if(isset($_POST['submit'])){
	// $name_error='';
	// if(empty($_POST['rno'])){
	// 	$name_error="<p> Enter your Roll Number.</p>";
	// }
	// else{
	// 	if(!preg_match("/[0-9]*$/",$_POST['rno'])){
	// 		$name_error="<p> Enter only numeric value...! </p>";
	// 	}
	// }
	// if($name_error==''){
	// 	header('location:display.php')
	// }
	// if(empty($_POST['name'])){
	// 	$name_error="<p> Enter your full name.</p>";
	// }
	// else{
	// 	if(!preg_match("/[a-zA-Z*$]/",$_POST['name'])){
	// 		$name_error="<p> Enter only character value...! </p>";
	// 	}
	// }
	$rno=$_POST['rno'];
	$name=$_POST['name'];
	$m1=$_POST['m1'];
	$m2=$_POST['m2'];
	$m3=$_POST['m3'];

	$sum=$m1+$m2+$m3;
	$avg=$sum/3;
	if($avg>80)
		$grade='Distiction';
	elseif($avg>70 && $avg<80)
		$grade='First class';
	elseif($avg>60 && $avg<70)
		$grade='Second class';
	elseif($avg>40 && $avg<60)
		$grade='pass class';
	else
		$grade='Fail';

}
?>

<html>
<head>
</head>
<body>
	<div>
		<form action="display.php" method="POST">
			<div>
				<label>Roll No.</label>
				<input disabled type="text" value="<?php echo $rno; ?>">
			</div>
			<div>
				<label>Full name.</label>
				<input disabled type="text" value="<?php echo $name; ?>">
			</div>
			<div>
				<label>marks 1.</label>
				<input disabled type="text" value="<?php echo $m1; ?>" >
			</div>
			<div>
				<label>marks 2.</label>
				<input disabled type="text" value="<?php echo $m2; ?>">
			</div>
			<div>
				<label>marks 3.</label>
				<input disabled type="text" value="<?php echo $m3; ?>">
			</div>
			<div>
				<input disabled type="submit" name="submit" value="submit">
			</div>		
		</form>

		
	</div>
	<div>
		<a href="logout.php">Logout</a>
	</div>
</body>
</html>
